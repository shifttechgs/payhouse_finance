<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LoanApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $applicationData;
    public $applicationPdfPath;
    public $uploadedFiles;

    /**
     * Create a new message instance.
     *
     * @param array $applicationData
     * @param string $applicationPdfPath
     * @param array $uploadedFiles
     */
    public function __construct(array $applicationData, string $applicationPdfPath, array $uploadedFiles)
    {
        $this->applicationData = $applicationData;
        $this->applicationPdfPath = $applicationPdfPath;
        $this->uploadedFiles = $uploadedFiles;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $fullName = trim(
            ($this->applicationData['first_name'] ?? '') . ' ' .
            ($this->applicationData['middle_name'] ?? '') . ' ' .
            ($this->applicationData['surname'] ?? '')
        );

        $referenceId = $this->applicationData['reference_id'] ?? 'N/A';

        $email = $this->view('emails.loan-application')
            ->subject('New Loan Application - ' . $fullName . ' [Ref: ' . $referenceId . ']')
            ->with('application', $this->applicationData);

        // Attach the generated application PDF
        if (file_exists($this->applicationPdfPath)) {
            $email->attach($this->applicationPdfPath, [
                'as' => 'loan-application-' . $referenceId . '.pdf',
                'mime' => 'application/pdf',
            ]);
        }

        // Attach uploaded documents
        if (isset($this->uploadedFiles['payslip']['real_path']) && file_exists($this->uploadedFiles['payslip']['real_path'])) {
            $email->attach($this->uploadedFiles['payslip']['real_path'], [
                'as' => 'payslip-' . $referenceId . '.pdf',
                'mime' => 'application/pdf',
            ]);
        }

        if (isset($this->uploadedFiles['id_document']['real_path']) && file_exists($this->uploadedFiles['id_document']['real_path'])) {
            $email->attach($this->uploadedFiles['id_document']['real_path'], [
                'as' => 'id-document-' . $referenceId . '.pdf',
                'mime' => 'application/pdf',
            ]);
        }

        if (isset($this->uploadedFiles['bank_statement']['real_path']) && file_exists($this->uploadedFiles['bank_statement']['real_path'])) {
            $email->attach($this->uploadedFiles['bank_statement']['real_path'], [
                'as' => 'bank-statement-' . $referenceId . '.pdf',
                'mime' => 'application/pdf',
            ]);
        }

        return $email;
    }
}
