<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @param array $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $customerName = $this->data['fullname'] ?? 'Customer';
        $loanType = $this->data['loanType'] ?? 'Loan';

        return $this->view('emails.contact-inquiry')
            ->with('data', $this->data)
            ->subject("🔔 New {$loanType} Inquiry from {$customerName} - Action Required");
    }
}
