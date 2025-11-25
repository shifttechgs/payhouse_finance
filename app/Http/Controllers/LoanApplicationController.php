<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoanApplicationRequest;
use App\Mail\LoanApplicationMail;
use App\Models\LoanApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;

class LoanApplicationController extends Controller
{
    /**
     * Display the loan application form.
     */
    public function index()
    {
        return view('loan-application.index');
    }

    /**
     * Store a newly created loan application.
     */
    public function store(StoreLoanApplicationRequest $request)
    {
        // Debug logging
        Log::info('Loan application submission started', [
            'has_files' => [
                'payslip' => $request->hasFile('payslip'),
                'id_document' => $request->hasFile('id_document'),
                'bank_statement' => $request->hasFile('bank_statement'),
            ],
            'request_method' => $request->method(),
            'content_type' => $request->header('Content-Type'),
        ]);

        try {
            // Get validated data
            $applicationData = $request->validated();

            // Generate unique reference ID
            $referenceId = $this->generateReferenceId();

            // Add metadata
            $applicationData['reference_id'] = $referenceId;
            $applicationData['ip_address'] = $request->ip();
            $applicationData['status'] = 'pending';

            // Use database transaction for data integrity
            $loanApplication = DB::transaction(function () use ($request, $applicationData, $referenceId) {
                // Create the loan application record in database
                $loanApplication = LoanApplication::create($applicationData);

                Log::info('Loan application saved to database', [
                    'id' => $loanApplication->id,
                    'reference_id' => $referenceId
                ]);

                // Handle file uploads and store permanently
                $uploadedFiles = $this->handleFileUploads($request, $referenceId);

                // Update loan application with file paths
                if (!empty($uploadedFiles)) {
                    $loanApplication->update([
                        'payslip_path' => $uploadedFiles['payslip']['permanent_path'] ?? null,
                        'id_document_path' => $uploadedFiles['id_document']['permanent_path'] ?? null,
                        'bank_statement_path' => $uploadedFiles['bank_statement']['permanent_path'] ?? null,
                    ]);
                }

                return ['application' => $loanApplication, 'files' => $uploadedFiles];
            });

            // Send email notification (outside transaction so DB save is not dependent on email)
            try {
                $this->sendAdminNotification(
                    array_merge($applicationData, ['submitted_at' => now()]),
                    $loanApplication['files']
                );
            } catch (\Exception $emailException) {
                // Log email failure but don't fail the application submission
                Log::error('Email notification failed but application saved', [
                    'reference_id' => $referenceId,
                    'error' => $emailException->getMessage()
                ]);
            }

            return response()->json([
                'success' => true,
                'message' => 'Your loan application has been submitted successfully. We will contact you shortly.',
                'reference_id' => $referenceId,
            ], 201);

        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Loan application validation failed', [
                'errors' => $e->errors(),
                'ip' => $request->ip()
            ]);
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            Log::error('Loan Application Error: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
                'ip' => $request->ip()
            ]);
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while processing your application. Please try again.',
            ], 500);
        }
    }

    /**
     * Generate a unique reference ID for the application.
     */
    protected function generateReferenceId(): string
    {
        return 'LA-' . date('Ymd') . '-' . strtoupper(Str::random(8));
    }

    /**
     * Handle secure file uploads and store permanently.
     *
     * @param StoreLoanApplicationRequest $request
     * @param string $referenceId
     * @return array
     */
    protected function handleFileUploads(StoreLoanApplicationRequest $request, string $referenceId): array
    {
        $uploadedFiles = [];
        $fileFields = ['payslip', 'id_document', 'bank_statement'];

        // Create permanent storage directory for this application
        $permanentDir = "loan-applications/{$referenceId}";

        foreach ($fileFields as $fieldName) {
            if ($request->hasFile($fieldName)) {
                $file = $request->file($fieldName);

                // Additional security checks
                if (!$this->isValidPDF($file)) {
                    throw new \Exception("Invalid file format for {$fieldName}. Only PDF files are allowed.");
                }

                // Generate secure filename with field name for clarity
                $extension = $file->getClientOriginalExtension();
                $filename = $fieldName . '-' . $referenceId . '.' . $extension;

                // Store file permanently in the application's folder
                $permanentPath = $file->storeAs(
                    $permanentDir,
                    $filename,
                    'local'
                );

                $uploadedFiles[$fieldName] = [
                    'path' => $permanentPath,
                    'permanent_path' => $permanentPath,
                    'real_path' => Storage::disk('local')->path($permanentPath),
                    'original_name' => $file->getClientOriginalName(),
                    'size' => $file->getSize()
                ];

                Log::info("File uploaded permanently: {$fieldName}", [
                    'path' => $permanentPath,
                    'reference_id' => $referenceId,
                    'original_name' => $file->getClientOriginalName(),
                    'size' => $file->getSize()
                ]);
            }
        }

        return $uploadedFiles;
    }

    /**
     * Validate if file is a legitimate PDF.
     *
     * @param \Illuminate\Http\UploadedFile $file
     * @return bool
     */
    protected function isValidPDF($file): bool
    {
        // Check MIME type
        $mimeType = $file->getMimeType();
        if (!in_array($mimeType, ['application/pdf', 'application/x-pdf'])) {
            return false;
        }

        // Check file signature (magic bytes) - PDF files start with %PDF
        $handle = fopen($file->getRealPath(), 'r');
        $header = fread($handle, 4);
        fclose($handle);

        return strpos($header, '%PDF') === 0;
    }

    /**
     * Generate PDF for the loan application and store permanently.
     */
    protected function generatePDF(array $applicationData): array
    {
        // Generate PDF from application data
        $pdf = Pdf::loadView('loan-application.pdf', ['application' => $applicationData]);

        // Create filename with reference ID
        $referenceId = $applicationData['reference_id'];
        $filename = 'loan-application-' . $referenceId . '.pdf';

        // Store PDF permanently in the application's folder
        $permanentDir = "loan-applications/{$referenceId}";
        $pdfPath = $permanentDir . '/' . $filename;

        // Save PDF to permanent storage
        Storage::disk('local')->put($pdfPath, $pdf->output());

        // Update database with PDF path
        LoanApplication::where('reference_id', $referenceId)->update(['pdf_path' => $pdfPath]);

        Log::info('Application PDF generated and saved', [
            'reference_id' => $referenceId,
            'pdf_path' => $pdfPath
        ]);

        return [
            'path' => $pdfPath,
            'real_path' => Storage::disk('local')->path($pdfPath)
        ];
    }

    /**
     * Send email notification to admin with all attachments.
     */
    protected function sendAdminNotification(array $applicationData, array $uploadedFiles): void
    {
        try {
            $adminEmail = env('ADMIN_EMAIL', 'sales@shifttechgs.com');

            // Generate application summary PDF (stored permanently)
            $pdfData = $this->generatePDF($applicationData);

            // Use Mailable class for sending email
            Mail::to($adminEmail)->send(
                new LoanApplicationMail($applicationData, $pdfData['real_path'], $uploadedFiles)
            );

            Log::info('Loan application email sent successfully', [
                'reference_id' => $applicationData['reference_id'],
                'admin_email' => $adminEmail,
                'attachments_count' => count($uploadedFiles) + 1
            ]);

            // Files are now stored permanently - no cleanup needed

        } catch (\Exception $e) {
            // Log the error and re-throw to handle in main try-catch
            Log::error('Failed to send loan application email: ' . $e->getMessage(), [
                'reference_id' => $applicationData['reference_id'] ?? 'unknown',
                'trace' => $e->getTraceAsString()
            ]);
            throw $e;
        }
    }

    /**
     * Display success page.
     */
    public function success()
    {
        return view('loan-application.success');
    }
}
