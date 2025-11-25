<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactFormMail;

class ContactsController extends Controller
{
    /**
     * Display the contact form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Handle the contact form submission.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function submitForm(Request $request)
    {
        // Validate the form data with enhanced validation
        $validator = Validator::make($request->all(), [
            'fullname' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-zA-Z\s\-\']+$/'
            ],
            'phone' => [
                'required',
                'string',
                'regex:/^(\+263|0)(7[1-9]|2[0-9])[0-9]{7}$/'
            ],
            'email' => [
                'required',
                'email:rfc,dns',
                'max:255',
                'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'
            ],
            'loanType' => [
                'required',
                'string',
                'in:Business Loans,Salaried Individuals'
            ],
            'message' => [
                'nullable',
                'string',
                'max:1000'
            ],
        ], [
            // Custom error messages
            'fullname.required' => 'Please provide your full name.',
            'fullname.regex' => 'Name should only contain letters, spaces, hyphens, and apostrophes.',
            'phone.required' => 'Please provide your phone number.',
            'phone.regex' => 'Please provide a valid Zimbabwe phone number (e.g., +263771234567 or 0771234567).',
            'email.required' => 'Please provide your email address.',
            'email.email' => 'Please provide a valid email address.',
            'email.regex' => 'Please provide a valid email format.',
            'loanType.required' => 'Please select a loan type.',
            'loanType.in' => 'Please select a valid loan type.',
            'message.max' => 'Message must not exceed 1000 characters.',
        ]);

        if ($validator->fails()) {
            return redirect('/contact')
                ->withErrors($validator)
                ->withInput();
        }

        // Extract and sanitize validated data
        $data = $validator->validated();
        $data['fullname'] = strip_tags($data['fullname']);
        $data['message'] = strip_tags($data['message'] ?? '');

        // Get contact email from environment
        $contactEmail = env('CONTACT_EMAIL', 'sales@shifttechgs.com');

        try {
            // Send the contact form data via email
            Mail::to($contactEmail)->send(new ContactFormMail($data));

            // Log successful submission
            Log::info('Contact form submitted successfully', [
                'name' => $data['fullname'],
                'email' => $data['email'],
                'loan_type' => $data['loanType'],
                'ip' => $request->ip()
            ]);

            return redirect('/contact')->with('success', '✅ Thank you for contacting us! Your message has been sent successfully. Our team will get back to you within 24 hours.');

        } catch (\Exception $e) {
            // Log the error with details
            Log::error('Contact form email failed', [
                'error' => $e->getMessage(),
                'name' => $data['fullname'] ?? 'Unknown',
                'email' => $data['email'] ?? 'Unknown',
                'ip' => $request->ip(),
                'trace' => $e->getTraceAsString()
            ]);

            return redirect('/contact')->with('error', '❌ We\'re sorry, but there was an error sending your message. Please try again or contact us directly at ' . $contactEmail);
        }
    }
}
