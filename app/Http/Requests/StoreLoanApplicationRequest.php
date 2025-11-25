<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class StoreLoanApplicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // Personal Details
            'first_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s\-\']+$/'],
            'middle_name' => ['nullable', 'string', 'max:255', 'regex:/^[a-zA-Z\s\-\']+$/'],
            'surname' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s\-\']+$/'],
            'residential_address' => ['required', 'string', 'max:1000', 'min:10'],
            'national_id' => ['required', 'string', 'max:50'],
            'date_of_birth' => [
                'required',
                'date',
                'before:today',
                'before_or_equal:' . date('Y-m-d', strtotime('-18 years')),
                'after:' . date('Y-m-d', strtotime('-100 years'))
            ],
            'mobile_no' => [
                'required',
                'string',
                'regex:/^(\+263|0)(7[1-9])[0-9]{7}$/'
            ],
            'email_address' => [
                'required',
                'email:rfc,dns',
                'max:255',
                'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'
            ],
            'sex' => ['required', 'in:male,female'],
            'marital_status' => ['required', 'in:single,married,separated'],
            'dependents_children' => ['required', 'integer', 'min:0', 'max:20'],
            'dependents_others' => ['required', 'integer', 'min:0', 'max:20'],

            // Employment Details
            'occupation' => ['required', 'in:employed,self-employed'],
            'employer_business' => ['nullable', 'string', 'max:255'],
            'employer_address' => ['nullable', 'string', 'max:1000'],
            'designation_department' => ['nullable', 'string', 'max:255'],
            'years_in_occupation' => ['nullable', 'integer', 'min:0', 'max:100'],
            'office_phone' => [
                'nullable',
                'string',
                'regex:/^(\+263|0)[0-9]{9,10}$/'
            ],
            'monthly_salary_income' => ['required', 'numeric', 'min:1', 'max:999999999.99'],
            'other_income' => ['nullable', 'numeric', 'min:0', 'max:999999999.99'],
            'accommodation_status' => ['required', 'in:owned,rented,parents'],

            // Loan Details
            'loan_amount' => ['required', 'numeric', 'min:1', 'max:999999999.99'],
            'loan_period_months' => ['required', 'integer', 'min:1', 'max:60'],
            'loan_purpose' => ['required', 'string', 'min:10', 'max:1000'],

            // Banking Details
            'bank_name' => ['required', 'string', 'max:255'],
            'bank_branch' => ['required', 'string', 'max:255'],
            'account_number' => ['required', 'string', 'max:50', 'regex:/^[0-9]{6,20}$/'],

            // Next of Kin 1
            'kin1_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s\-\']+$/'],
            'kin1_relationship' => ['required', 'string', 'max:100'],
            'kin1_contact' => [
                'required',
                'string',
                'regex:/^(\+263|0)(7[1-9])[0-9]{7}$/'
            ],
            'kin1_address' => ['required', 'string', 'max:1000', 'min:10'],

            // Next of Kin 2
            'kin2_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s\-\']+$/'],
            'kin2_relationship' => ['required', 'string', 'max:100'],
            'kin2_contact' => [
                'required',
                'string',
                'regex:/^(\+263|0)(7[1-9])[0-9]{7}$/'
            ],
            'kin2_address' => ['required', 'string', 'max:1000', 'min:10'],

            // File Uploads - Required PDF files (max 5MB each)
            'payslip' => [
                'required',
                File::types(['pdf'])
                    ->max(5 * 1024) // 5MB
            ],
            'id_document' => [
                'required',
                File::types(['pdf'])
                    ->max(5 * 1024) // 5MB
            ],
            'bank_statement' => [
                'required',
                File::types(['pdf'])
                    ->max(5 * 1024) // 5MB
            ],
        ];
    }

    /**
     * Get custom error messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            // Phone number messages
            'mobile_no.regex' => 'The mobile number must be a valid Zimbabwe number (e.g., +263771234567 or 0771234567)',
            'office_phone.regex' => 'The office phone must be a valid Zimbabwe number',
            'kin1_contact.regex' => 'The next of kin 1 contact must be a valid Zimbabwe mobile number',
            'kin2_contact.regex' => 'The next of kin 2 contact must be a valid Zimbabwe mobile number',

            // Email messages
            'email_address.email' => 'Please provide a valid email address',
            'email_address.regex' => 'Please provide a valid email address format',

            // Date of birth messages
            'date_of_birth.before_or_equal' => 'You must be at least 18 years old to apply',
            'date_of_birth.after' => 'Please provide a valid date of birth',

            // Name validation messages
            'first_name.regex' => 'First name should only contain letters, spaces, hyphens, and apostrophes',
            'middle_name.regex' => 'Middle name should only contain letters, spaces, hyphens, and apostrophes',
            'surname.regex' => 'Surname should only contain letters, spaces, hyphens, and apostrophes',
            'kin1_name.regex' => 'Next of kin name should only contain letters, spaces, hyphens, and apostrophes',
            'kin2_name.regex' => 'Next of kin name should only contain letters, spaces, hyphens, and apostrophes',

            // Account number messages
            'account_number.regex' => 'Account number must be 6-20 digits',

            // Address messages
            'residential_address.min' => 'Residential address must be at least 10 characters',
            'kin1_address.min' => 'Next of kin address must be at least 10 characters',
            'kin2_address.min' => 'Next of kin address must be at least 10 characters',

            // Loan purpose
            'loan_purpose.min' => 'Please provide a detailed loan purpose (at least 10 characters)',

            // File upload messages
            'payslip.required' => 'Please upload your payslip (PDF format)',
            'payslip.mimes' => 'Payslip must be a PDF file',
            'payslip.max' => 'Payslip file size must not exceed 5MB',

            'id_document.required' => 'Please upload your ID document (PDF format)',
            'id_document.mimes' => 'ID document must be a PDF file',
            'id_document.max' => 'ID document file size must not exceed 5MB',

            'bank_statement.required' => 'Please upload your bank statement (PDF format)',
            'bank_statement.mimes' => 'Bank statement must be a PDF file',
            'bank_statement.max' => 'Bank statement file size must not exceed 5MB',
        ];
    }

    /**
     * Get custom attribute names for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'mobile_no' => 'mobile number',
            'email_address' => 'email',
            'kin1_contact' => 'next of kin 1 contact',
            'kin2_contact' => 'next of kin 2 contact',
            'kin1_name' => 'next of kin 1 name',
            'kin2_name' => 'next of kin 2 name',
            'kin1_relationship' => 'next of kin 1 relationship',
            'kin2_relationship' => 'next of kin 2 relationship',
            'kin1_address' => 'next of kin 1 address',
            'kin2_address' => 'next of kin 2 address',
        ];
    }
}
