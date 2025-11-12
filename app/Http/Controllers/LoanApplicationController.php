<?php

namespace App\Http\Controllers;

use App\Models\LoanApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log; // Add this import statement


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
    public function store(Request $request)
    {
        // Log the incoming request data for debugging
        //Log::info('Loan Application Submitted:', $request->all());

        try {
            // Validate the request
            $validated = $request->validate([
            // Personal Details
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'surname' => 'required|string|max:255',
            'residential_address' => 'required|string|max:1000',
            'national_id' => 'required|string|max:50',
            'date_of_birth' => 'required|date|before:today',
            'mobile_no' => 'required|string|max:20',
            'email_address' => 'required|email|max:255',
            'sex' => 'required|in:male,female',
            'marital_status' => 'required|in:single,married,separated',
            'dependents_children' => 'required|integer|min:0',
            'dependents_others' => 'required|integer|min:0',

            // Employment Details
            'occupation' => 'required|in:employed,self-employed',
            'employer_business' => 'nullable|string|max:255',
            'employer_address' => 'nullable|string|max:1000',
            'designation_department' => 'nullable|string|max:255',
            'years_in_occupation' => 'nullable|integer|min:0|max:100',
            'office_phone' => 'nullable|string|max:20',
            'monthly_salary_income' => 'required|numeric|min:0',
            'other_income' => 'nullable|numeric|min:0',
            'accommodation_status' => 'required|in:owned,rented,parents',

            // Loan Details
            'loan_amount' => 'required|numeric|min:1',
            'loan_period_months' => 'required|integer|min:1|max:60',
            'loan_purpose' => 'required|string|max:1000',

            // Banking Details
            'bank_name' => 'required|string|max:255',
            'bank_branch' => 'required|string|max:255',
            'account_number' => 'required|string|max:50',

            // Next of Kin 1
            'kin1_name' => 'required|string|max:255',
            'kin1_relationship' => 'required|string|max:100',
            'kin1_contact' => 'required|string|max:20',
            'kin1_address' => 'required|string|max:1000',

            // Next of Kin 2
            'kin2_name' => 'required|string|max:255',
            'kin2_relationship' => 'required|string|max:100',
            'kin2_contact' => 'required|string|max:20',
            'kin2_address' => 'required|string|max:1000',
            ]);

            // Add IP address
            $validated['ip_address'] = $request->ip();

            // Create the loan application
            $application = LoanApplication::create($validated);

            // Generate PDF
            $pdfPath = $this->generatePDF($application);
            $application->update(['pdf_path' => $pdfPath]);

            // Send email to admin
            $this->sendAdminNotification($application);

            return response()->json([
                'success' => true,
                'message' => 'Your loan application has been submitted successfully. We will contact you shortly.',
                'application_id' => $application->id,
            ], 201);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            \Log::error('Loan Application Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while processing your application. Please try again.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Generate PDF for the loan application.
     */
    protected function generatePDF(LoanApplication $application): string
    {
        // Generate PDF
        $pdf = Pdf::loadView('loan-application.pdf', compact('application'));

        // Create filename
        $filename = 'loan-application-' . $application->id . '-' . time() . '.pdf';
        $path = 'loan-applications/' . $filename;

        // Save PDF to storage
        Storage::disk('public')->put($path, $pdf->output());

        return $path;
    }

    /**
     * Send email notification to admin.
     */
    protected function sendAdminNotification(LoanApplication $application): void
    {
        try {
            $adminEmail = env('ADMIN_EMAIL', 'sales@shifttechgs.com');
            $pdfPath = Storage::disk('public')->path($application->pdf_path);

            Mail::send('emails.loan-application', compact('application'), function ($message) use ($adminEmail, $pdfPath, $application) {
                $message->to($adminEmail)
                    ->subject('New Loan Application - ' . $application->full_name)
                    ->attach($pdfPath, [
                        'as' => 'loan-application-' . $application->id . '.pdf',
                        'mime' => 'application/pdf',
                    ]);
            });
        } catch (\Exception $e) {
            // Log the error but don't fail the application
            \Log::error('Failed to send loan application email: ' . $e->getMessage());
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
