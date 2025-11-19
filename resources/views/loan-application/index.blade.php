@extends('layouts.master')

{{--@section('title', 'Apply for a Loan - Payhouse Finance')--}}
{{--@section('description', 'Apply for a loan with Payhouse Finance. Fast approval, competitive rates for civil servants, pensioners, and salaried workers in Zimbabwe.')--}}

@section('content')
<style>
    /* Loan Application Form Styles */
    .loan-app-container {
        background: #f8f9fa;
        padding: 60px 0 100px;
        min-height: 100vh;
    }

    .loan-app-card {
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(12, 58, 48, 0.1);
        overflow: hidden;
        max-width: 900px;
        margin: 0 auto;
    }

    .loan-app-header {
        background: linear-gradient(135deg, #0c3a30 0%, #1a5447 100%);
        padding: 40px;
        text-align: center;
        color: white;
    }

    .loan-app-header h1 {
        font-size: 32px;
        font-weight: 800;
        margin-bottom: 10px;
        color: #ffffff;
    }

    .loan-app-header p {
        font-size: 16px;
        color: #d0d0d0;
        margin-bottom: 0;
    }

    .loan-app-reference {
        background: rgba(158, 221, 5, 0.2);
        display: inline-block;
        padding: 8px 20px;
        border-radius: 25px;
        margin-top: 15px;
        font-weight: 600;
        color: #009328;
        font-size: 14px;
    }

    /* Progress Steps */
    .progress-steps {
        display: flex;
        justify-content: space-between;
        padding: 30px 40px;
        background: #f8f9fa;
        border-bottom: 2px solid #e9ecef;
    }

    .step {
        flex: 1;
        text-align: center;
        position: relative;
    }

    .step:not(:last-child)::after {
        content: '';
        position: absolute;
        top: 20px;
        left: 60%;
        width: 80%;
        height: 2px;
        background: #dee2e6;
        z-index: 0;
    }

    .step.active:not(:last-child)::after {
        background: #009328;
    }

    .step-circle {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #dee2e6;
        color: #6c757d;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        margin-bottom: 8px;
        position: relative;
        z-index: 1;
        transition: all 0.3s ease;
    }

    .step.active .step-circle {
        background: #009328;
        color: #ffffff;
        transform: scale(1.1);
    }

    .step.completed .step-circle {
        background: #0c3a30;
        color: #ffffff;
    }

    .step-label {
        font-size: 12px;
        color: #6c757d;
        font-weight: 600;
        display: block;
    }

    .step.active .step-label {
        color: #0c3a30;
    }

    /* Form Content */
    .form-content {
        padding: 40px;
    }

    .form-step {
        display: none;
    }

    .form-step.active {
        display: block;
        animation: fadeIn 0.5s;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .form-section-title {
        font-size: 24px;
        font-weight: 700;
        color: #0c3a30;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 3px solid #009328;
    }

    .form-group {
        margin-bottom: 25px;
    }

    .form-label {
        font-size: 14px;
        font-weight: 600;
        color: #0c3a30;
        margin-bottom: 8px;
        display: block;
    }

    .form-label .required {
        color: #dc3545;
    }

    .form-control, .form-select {
        width: 100%;
        padding: 12px 16px;
        border: 2px solid #e9ecef;
        border-radius: 10px;
        font-size: 15px;
        transition: all 0.3s ease;
        font-family: inherit;
    }

    .form-control:focus, .form-select:focus {
        border-color: #009328;
        outline: none;
        box-shadow: 0 0 0 4px rgba(158, 221, 5, 0.1);
    }

    .form-control.error {
        border-color: #dc3545;
    }

    .error-message {
        color: #dc3545;
        font-size: 13px;
        margin-top: 5px;
        display: none;
    }

    .form-control.error + .error-message {
        display: block;
    }

    /* Radio and Checkbox Groups */
    .radio-group, .checkbox-group {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
    }

    .radio-item, .checkbox-item {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .radio-item input[type="radio"],
    .checkbox-item input[type="checkbox"] {
        width: 20px;
        height: 20px;
        cursor: pointer;
        accent-color: #009328;
    }

    .radio-item label,
    .checkbox-item label {
        font-size: 14px;
        color: #495057;
        cursor: pointer;
        margin-bottom: 0;
        font-weight: 500;
    }

    /* Two Column Layout */
    .form-row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }

    /* Form Navigation */
    .form-navigation {
        display: flex;
        justify-content: space-between;
        gap: 15px;
        margin-top: 40px;
        padding-top: 30px;
        border-top: 2px solid #e9ecef;
    }

    .btn-nav {
        padding: 14px 35px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 15px;
        cursor: pointer;
        border: none;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }

    .btn-prev {
        background: #e9ecef;
        color: #495057;
    }

    .btn-prev:hover {
        background: #dee2e6;
        transform: translateX(-3px);
    }

    .btn-next, .btn-submit {
        background: #009328;
        color: #ffffff;
        box-shadow: 0 4px 15px rgba(158, 221, 5, 0.3);
        margin-left: auto;
    }

    .btn-next:hover, .btn-submit:hover {
        background: #009328;
        transform: translateX(3px);
        box-shadow: 0 6px 20px rgba(158, 221, 5, 0.4);
    }

    .btn-submit {
        padding: 14px 50px;
    }

    .btn-submit:disabled {
        background: #dee2e6;
        color: #6c757d;
        cursor: not-allowed;
        transform: none;
    }

    /* Loading Spinner */
    .spinner {
        border: 3px solid #f3f3f3;
        border-top: 3px solid #0c3a30;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        animation: spin 1s linear infinite;
        display: none;
    }

    .btn-submit.loading .spinner {
        display: inline-block;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    /* Info Box */
    .info-box {
        background: #e7f5ff;
        border-left: 4px solid #009328;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 25px;
    }

    .info-box i {
        color: #009328;
        margin-right: 10px;
    }

    .info-box p {
        margin: 0;
        font-size: 14px;
        color: #1864ab;
    }

    /* Responsive */
    /* Success Modal */
    .success-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.75);
        z-index: 9999;
        align-items: center;
        justify-content: center;
        padding: 20px;
        animation: fadeIn 0.3s ease;
    }

    .success-modal.show {
        display: flex;
    }

    .success-modal-content {
        background: #ffffff;
        border-radius: 24px;
        box-shadow: 0 25px 80px rgba(0, 0, 0, 0.4);
        max-width: 600px;
        width: 100%;
        text-align: center;
        padding: 50px 40px;
        position: relative;
        animation: slideUpModal 0.5s ease;
        max-height: 90vh;
        overflow-y: auto;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideUpModal {
        from {
            opacity: 0;
            transform: translateY(50px) scale(0.9);
        }
        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    .success-modal-icon {
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, #009328 0%, #009328 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 30px;
        animation: scaleInModal 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        box-shadow: 0 10px 30px rgba(158, 221, 5, 0.3);
    }

    @keyframes scaleInModal {
        from {
            transform: scale(0) rotate(-180deg);
        }
        to {
            transform: scale(1) rotate(0deg);
        }
    }

    .success-modal-icon i {
        font-size: 55px;
        color: #0c3a30;
    }

    .success-modal-title {
        font-size: 36px;
        font-weight: 800;
        color: #0c3a30;
        margin-bottom: 15px;
        line-height: 1.2;
    }

    .success-modal-message {
        font-size: 16px;
        color: #6c757d;
        line-height: 1.7;
        margin-bottom: 35px;
    }

    .success-modal-details {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border-radius: 16px;
        padding: 30px;
        margin-bottom: 35px;
        text-align: left;
    }

    .success-modal-details h3 {
        font-size: 18px;
        font-weight: 700;
        color: #0c3a30;
        margin-bottom: 20px;
        text-align: center;
    }

    .modal-detail-item {
        display: flex;
        align-items: flex-start;
        gap: 15px;
        padding: 15px 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.08);
    }

    .modal-detail-item:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    .modal-detail-item i {
        font-size: 22px;
        color: #009328;
        min-width: 22px;
        margin-top: 2px;
    }

    .modal-detail-item span {
        font-size: 14px;
        color: #495057;
        line-height: 1.6;
        flex: 1;
    }

    .btn-modal-home {
        background: linear-gradient(135deg, #009328 0%, #009328 100%);
        color: #0c3a30;
        padding: 16px 45px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 16px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        transition: all 0.3s ease;
        box-shadow: 0 6px 25px rgba(158, 221, 5, 0.35);
        border: none;
        cursor: pointer;
    }

    .btn-modal-home:hover {
        background: linear-gradient(135deg, #009328 0%, #009328 100%);
        transform: translateY(-3px);
        box-shadow: 0 10px 35px rgba(158, 221, 5, 0.45);
        color: #0c3a30;
    }

    .success-modal-footer {
        margin-top: 30px;
        padding-top: 25px;
        border-top: 1px solid #e9ecef;
    }

    .success-modal-footer p {
        font-size: 14px;
        color: #6c757d;
        margin: 0;
    }

    .success-modal-footer strong {
        color: #0c3a30;
        font-weight: 700;
    }

    .success-modal-footer a {
        color: #009328;
        text-decoration: none;
        font-weight: 600;
        transition: color 0.3s ease;
    }

    .success-modal-footer a:hover {
        color: #009328;
    }

    @media (max-width: 768px) {
        .loan-app-header {
            padding: 30px 20px;
        }

        .loan-app-header h1 {
            font-size: 24px;
        }

        .progress-steps {
            padding: 20px 15px;
            overflow-x: auto;
        }

        .step {
            min-width: 80px;
        }

        .step-circle {
            width: 35px;
            height: 35px;
            font-size: 14px;
        }

        .step-label {
            font-size: 10px;
        }

        .form-content {
            padding: 25px 20px;
        }

        .form-section-title {
            font-size: 20px;
        }

        .form-row {
            grid-template-columns: 1fr;
        }

        .form-navigation {
            flex-direction: column;
        }

        .btn-next, .btn-submit {
            margin-left: 0;
        }

        .success-modal-content {
            padding: 40px 25px;
            border-radius: 20px;
        }

        .success-modal-icon {
            width: 80px;
            height: 80px;
        }

        .success-modal-icon i {
            font-size: 45px;
        }

        .success-modal-title {
            font-size: 28px;
        }

        .success-modal-message {
            font-size: 15px;
        }

        .success-modal-details {
            padding: 20px;
        }

        .btn-modal-home {
            width: 100%;
            justify-content: center;
        }
    }

</style>
<!-- Start Page Banner Area -->
<div
    class="page-banner-area position-relative overflow-hidden"
    style="background-image: url('{{ asset('assets/images/hero/hero-image-1.svg') }}');"
>
    <div class="container">
        <div class="page-banner-content">
            <h1>Loan Application Form</h1>
            <ul>
                <li>Complete your loan application in 4 simple steps</li>
            </ul>
        </div>
    </div>

    {{--        <div class="shape-image">--}}
    {{--            <img class="page-banner-shape-1 moveHorizontal_reverse" src="assets/images/shape/page-banner-shape-1.png" alt="shape">--}}
    {{--            <img class="page-banner-shape-2 moveVertical" src="assets/images/shape/page-banner-shape-2.png" alt="shape">--}}
    {{--        </div>--}}
</div>
<!-- End Page Banner Area -->


<div class="loan-app-container">
    <div class="container">
        <div class="loan-app-card">
{{--            <!-- Header -->--}}
{{--            <div class="loan-app-header">--}}
{{--                <h1>Loan Application Form</h1>--}}
{{--                <p>Complete your loan application in 4 simple steps</p>--}}
{{--                <div class="loan-app-reference">Form Reference: PF777</div>--}}
{{--            </div>--}}

            <!-- Progress Steps -->
            <div class="progress-steps">
                <div class="step active" data-step="1">
                    <div class="step-circle">1</div>
                    <span class="step-label">Personal Details</span>
                </div>
                <div class="step" data-step="2">
                    <div class="step-circle">2</div>
                    <span class="step-label">Employment & Loan</span>
                </div>
                <div class="step" data-step="3">
                    <div class="step-circle">3</div>
                    <span class="step-label">Banking Details</span>
                </div>
                <div class="step" data-step="4">
                    <div class="step-circle">4</div>
                    <span class="step-label">Next of Kin</span>
                </div>
            </div>

            <!-- Form -->
            <form id="loanApplicationForm" class="form-content">
                @csrf

                <!-- Step 1: Personal Details -->
                <div class="form-step active" data-step="1">
                    <h2 class="form-section-title">Personal and Contact Details</h2>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">First Name <span class="required">*</span></label>
                            <input type="text" name="first_name" class="form-control" required>
                            <div class="error-message">First name is required</div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Middle Name</label>
                            <input type="text" name="middle_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Surname <span class="required">*</span></label>
                            <input type="text" name="surname" class="form-control" required>
                            <div class="error-message">Surname is required</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Residential Address <span class="required">*</span></label>
                        <textarea name="residential_address" class="form-control" rows="3" required></textarea>
                        <div class="error-message">Residential address is required</div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">National ID <span class="required">*</span></label>
                            <input type="text" name="national_id" class="form-control" required>
                            <div class="error-message">National ID is required</div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Date of Birth <span class="required">*</span></label>
                            <input type="date" name="date_of_birth" class="form-control" required>
                            <div class="error-message">Date of birth is required</div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Mobile Number <span class="required">*</span></label>
                            <input type="tel" name="mobile_no" class="form-control" placeholder="+263..." required>
                            <div class="error-message">Mobile number is required</div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email Address <span class="required">*</span></label>
                            <input type="email" name="email_address" class="form-control" required>
                            <div class="error-message">Valid email address is required</div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Sex <span class="required">*</span></label>
                            <div class="radio-group">
                                <div class="radio-item">
                                    <input type="radio" id="male" name="sex" value="male" required>
                                    <label for="male">Male</label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" id="female" name="sex" value="female" required>
                                    <label for="female">Female</label>
                                </div>
                            </div>
                            <div class="error-message">Please select sex</div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Marital Status <span class="required">*</span></label>
                            <select name="marital_status" class="form-select" required>
                                <option value="">Select...</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="separated">Separated</option>
                            </select>
                            <div class="error-message">Please select marital status</div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Number of Children Dependents <span class="required">*</span></label>
                            <input type="number" name="dependents_children" class="form-control" min="0" value="0" required>
                            <div class="error-message">Please enter number of children dependents</div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Number of Other Dependents <span class="required">*</span></label>
                            <input type="number" name="dependents_others" class="form-control" min="0" value="0" required>
                            <div class="error-message">Please enter number of other dependents</div>
                        </div>
                    </div>

                    <div class="form-navigation">
                        <button type="button" class="btn-nav btn-next">
                            Next <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>
                </div>

                <!-- Step 2: Employment & Loan Details -->
                <div class="form-step" data-step="2">
                    <h2 class="form-section-title">Employment Details</h2>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Occupation <span class="required">*</span></label>
                            <div class="radio-group">
                                <div class="radio-item">
                                    <input type="radio" id="employed" name="occupation" value="employed" required>
                                    <label for="employed">Employed</label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" id="self-employed" name="occupation" value="self-employed" required>
                                    <label for="self-employed">Self-Employed</label>
                                </div>
                            </div>
                            <div class="error-message">Please select occupation type</div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Employer / Business Name</label>
                            <input type="text" name="employer_business" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Designation / Department</label>
                            <input type="text" name="designation_department" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Employer Address</label>
                        <textarea name="employer_address" class="form-control" rows="2" placeholder="Office address where you are based"></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Years in Present Occupation</label>
                            <input type="number" name="years_in_occupation" class="form-control" min="0">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Office Phone Number</label>
                            <input type="tel" name="office_phone" class="form-control">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Monthly Salary Income (USD) <span class="required">*</span></label>
                            <input type="number" name="monthly_salary_income" class="form-control" step="0.01" min="0" required>
                            <div class="error-message">Monthly salary income is required</div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Other Income (USD)</label>
                            <input type="number" name="other_income" class="form-control" step="0.01" min="0" value="0">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Status of Present Accommodation <span class="required">*</span></label>
                        <div class="radio-group">
                            <div class="radio-item">
                                <input type="radio" id="owned" name="accommodation_status" value="owned" required>
                                <label for="owned">Owned</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" id="rented" name="accommodation_status" value="rented" required>
                                <label for="rented">Rented</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" id="parents" name="accommodation_status" value="parents" required>
                                <label for="parents">Parents'</label>
                            </div>
                        </div>
                        <div class="error-message">Please select accommodation status</div>
                    </div>

                    <h2 class="form-section-title" style="margin-top: 40px;">Loan Details</h2>

                    <div class="info-box">
                        <i class="ri-information-line"></i>
                        <p>Please specify the loan amount and purpose. Our team will review your application and contact you shortly.</p>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Loan Amount (USD) <span class="required">*</span></label>
                            <input type="number" name="loan_amount" class="form-control" step="0.01" min="1" required>
                            <div class="error-message">Loan amount is required</div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Loan Period (Months) <span class="required">*</span></label>
                            <input type="number" name="loan_period_months" class="form-control" min="1" max="60" required>
                            <div class="error-message">Loan period is required</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Loan Purpose <span class="required">*</span></label>
                        <textarea name="loan_purpose" class="form-control" rows="3" required></textarea>
                        <div class="error-message">Loan purpose is required</div>
                    </div>

                    <div class="form-navigation">
                        <button type="button" class="btn-nav btn-prev">
                            <i class="ri-arrow-left-line"></i> Previous
                        </button>
                        <button type="button" class="btn-nav btn-next">
                            Next <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>
                </div>

                <!-- Step 3: Banking Details -->
                <div class="form-step" data-step="3">
                    <h2 class="form-section-title">Banking Details</h2>

                    <div class="info-box">
                        <i class="ri-bank-line"></i>
                        <p>Please provide your banking details for loan disbursement purposes.</p>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Bank Name <span class="required">*</span></label>
                            <select name="bank_name" class="form-select" required>
                                <option value="">Select Bank...</option>
                                <option value="CBZ Bank">CBZ Bank</option>
                                <option value="Stanbic Bank">Stanbic Bank</option>
                                <option value="ZB Bank">ZB Bank</option>
                                <option value="Steward Bank">Steward Bank</option>
                                <option value="FBC Bank">FBC Bank</option>
                                <option value="CABS">CABS</option>
                                <option value="NMB Bank">NMB Bank</option>
                                <option value="Nedbank">Nedbank</option>
                                <option value="Ecobank">Ecobank</option>
                                <option value="Other">Other</option>
                            </select>
                            <div class="error-message">Bank name is required</div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Branch <span class="required">*</span></label>
                            <input type="text" name="bank_branch" class="form-control" required>
                            <div class="error-message">Branch is required</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Account Number <span class="required">*</span></label>
                        <input type="text" name="account_number" class="form-control" required>
                        <div class="error-message">Account number is required</div>
                    </div>

                    <div class="form-navigation">
                        <button type="button" class="btn-nav btn-prev">
                            <i class="ri-arrow-left-line"></i> Previous
                        </button>
                        <button type="button" class="btn-nav btn-next">
                            Next <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>
                </div>

                <!-- Step 4: Next of Kin Details -->
                <div class="form-step" data-step="4">
                    <h2 class="form-section-title">Next of Kin Details</h2>

                    <div class="info-box">
                        <i class="ri-user-heart-line"></i>
                        <p>Please provide details of two next of kin contacts for emergency purposes.</p>
                    </div>

                    <h3 style="font-size: 18px; font-weight: 700; color: #0c3a30; margin-bottom: 20px;">First Next of Kin</h3>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Full Name <span class="required">*</span></label>
                            <input type="text" name="kin1_name" class="form-control" required>
                            <div class="error-message">Next of kin name is required</div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Relationship <span class="required">*</span></label>
                            <input type="text" name="kin1_relationship" class="form-control" placeholder="e.g., Spouse, Parent, Sibling" required>
                            <div class="error-message">Relationship is required</div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Contact Number <span class="required">*</span></label>
                            <input type="tel" name="kin1_contact" class="form-control" placeholder="+263..." required>
                            <div class="error-message">Contact number is required</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Address <span class="required">*</span></label>
                        <textarea name="kin1_address" class="form-control" rows="2" required></textarea>
                        <div class="error-message">Address is required</div>
                    </div>

                    <h3 style="font-size: 18px; font-weight: 700; color: #0c3a30; margin: 30px 0 20px;">Second Next of Kin</h3>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Full Name <span class="required">*</span></label>
                            <input type="text" name="kin2_name" class="form-control" required>
                            <div class="error-message">Next of kin name is required</div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Relationship <span class="required">*</span></label>
                            <input type="text" name="kin2_relationship" class="form-control" placeholder="e.g., Spouse, Parent, Sibling" required>
                            <div class="error-message">Relationship is required</div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Contact Number <span class="required">*</span></label>
                            <input type="tel" name="kin2_contact" class="form-control" placeholder="+263..." required>
                            <div class="error-message">Contact number is required</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Address <span class="required">*</span></label>
                        <textarea name="kin2_address" class="form-control" rows="2" required></textarea>
                        <div class="error-message">Address is required</div>
                    </div>

                    <div class="info-box" style="margin-top: 30px; background: #fff3cd; border-color: #ffc107;">
                        <i class="ri-checkbox-circle-line" style="color: #856404;"></i>
                        <p style="color: #856404;">
                            <strong>Declaration:</strong> I declare that all the particulars and information given in this application form are true and correct. I authorize Payhouse Finance to make any enquiries necessary for credit assessment.
                        </p>
                    </div>

                    <div class="form-navigation">
                        <button type="button" class="btn-nav btn-prev">
                            <i class="ri-arrow-left-line"></i> Previous
                        </button>
                        <button type="submit" class="btn-nav btn-submit">
                            <span class="btn-text">Submit Application</span>
                            <div class="spinner"></div>
                            <i class="ri-send-plane-fill"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Success Modal -->
<div id="successModal" class="success-modal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <div class="success-modal-content" role="document">
        <div class="success-modal-icon">
            <i class="ri-checkbox-circle-fill"></i>
        </div>

        <h1 id="modalTitle" class="success-modal-title">Application Submitted!</h1>
        <p class="success-modal-message">
            Thank you for submitting your loan application. We have received your details and will review your application shortly.
        </p>

        <div class="success-modal-details">
            <h3>What Happens Next?</h3>
            <div class="modal-detail-item">
                <i class="ri-mail-send-line"></i>
                <span>You will receive a confirmation email with your application reference number.</span>
            </div>
            <div class="modal-detail-item">
                <i class="ri-time-line"></i>
                <span>Our team will review your application within 24-48 hours.</span>
            </div>
            <div class="modal-detail-item">
                <i class="ri-phone-line"></i>
                <span>We will contact you via phone or email for any additional information needed.</span>
            </div>
            <div class="modal-detail-item">
                <i class="ri-check-double-line"></i>
                <span>Once approved, your loan will be disbursed to your provided bank account.</span>
            </div>
        </div>

        <a href="{{ url('/') }}" class="btn-modal-home">
            <i class="ri-home-4-line"></i> Return to Home
        </a>

        <div class="success-modal-footer">
            <p>
                Need help? Call us at <strong>+263 777 229 401</strong> or
                <a href="https://api.whatsapp.com/send?phone=263777229401&text=Hi%20Payhouse.%20I%20just%20submitted%20a%20loan%20application%20and%20need%20assistance." target="_blank">
                    Chat on WhatsApp
                </a>
            </p>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('loanApplicationForm');
    const steps = document.querySelectorAll('.form-step');
    const progressSteps = document.querySelectorAll('.progress-steps .step');
    let currentStep = 1;

    // Navigation
    document.querySelectorAll('.btn-next').forEach(btn => {
        btn.addEventListener('click', () => {
            if (validateStep(currentStep)) {
                goToStep(currentStep + 1);
            }
        });
    });

    document.querySelectorAll('.btn-prev').forEach(btn => {
        btn.addEventListener('click', () => {
            goToStep(currentStep - 1);
        });
    });

    function goToStep(step) {
        steps[currentStep - 1].classList.remove('active');
        progressSteps[currentStep - 1].classList.remove('active');

        currentStep = step;

        steps[currentStep - 1].classList.add('active');
        progressSteps[currentStep - 1].classList.add('active');

        // Mark completed steps
        progressSteps.forEach((s, index) => {
            if (index < currentStep - 1) {
                s.classList.add('completed');
            } else {
                s.classList.remove('completed');
            }
        });

        // Scroll to top
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function validateStep(step) {
        const currentStepElement = steps[step - 1];
        const requiredFields = currentStepElement.querySelectorAll('[required]');
        let valid = true;

        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                field.classList.add('error');
                valid = false;
            } else {
                field.classList.remove('error');
            }

            // Email validation
            if (field.type === 'email' && field.value) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(field.value)) {
                    field.classList.add('error');
                    valid = false;
                }
            }
        });

        if (!valid) {
            // Scroll to first error
            const firstError = currentStepElement.querySelector('.error');
            if (firstError) {
                firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }

        return valid;
    }

    // Remove error class on input
    document.querySelectorAll('.form-control, .form-select').forEach(field => {
        field.addEventListener('input', function() {
            this.classList.remove('error');
        });
    });

    // Form submission
    form.addEventListener('submit', async function(e) {
        e.preventDefault();

        if (!validateStep(currentStep)) {
            return;
        }

        const submitBtn = form.querySelector('.btn-submit');
        submitBtn.disabled = true;
        submitBtn.classList.add('loading');
        submitBtn.querySelector('.btn-text').textContent = 'Submitting...';

        const formData = new FormData(form);
        const data = Object.fromEntries(formData.entries());

        // Log the data being submitted
        console.log('Submitting loan application:', data);

        try {
            const response = await fetch('{{ route('loan.submit') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('[name="_token"]').value,
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify(data)
            });

            // Log response for debugging
            console.log('Response status:', response.status);

            // Get response text first to see what we're getting
            const responseText = await response.text();
            console.log('Response body:', responseText);

            let result;
            try {
                result = JSON.parse(responseText);
            } catch (e) {
                console.error('Failed to parse JSON:', e);
                throw new Error('Server returned invalid response. Check console for details.');
            }

            if (response.ok) {
                // Show success modal
                const modal = document.getElementById('successModal');
                modal.classList.add('show');

                // Focus on modal for accessibility
                setTimeout(() => {
                    modal.querySelector('.btn-modal-home').focus();
                }, 300);

                // Reset form
                form.reset();

                // Reset to first step
                goToStep(1);

                // Scroll to top
                window.scrollTo({ top: 0, behavior: 'smooth' });

                // Prevent body scroll when modal is open
                document.body.style.overflow = 'hidden';
            } else {
                // Handle validation errors
                if (result.errors) {
                    const errorMessages = Object.values(result.errors).flat().join('\n');
                    throw new Error(errorMessages);
                }
                throw new Error(result.message || 'An error occurred');
            }
        } catch (error) {
            console.error('Submission error:', error);
            // Use toastr if available, otherwise fallback to alert
            if (typeof toastr !== 'undefined') {
                toastr.error(error.message, 'Submission Failed');
            } else {
                alert('Error: ' + error.message);
            }
        } finally {
            // Reset submit button
            submitBtn.disabled = false;
            submitBtn.classList.remove('loading');
            submitBtn.querySelector('.btn-text').textContent = 'Submit Application';
        }
    });

    // Modal close functionality
    const modal = document.getElementById('successModal');

    // Close modal when clicking outside of it
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });

    // Close modal on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('show')) {
            closeModal();
        }
    });

    function closeModal() {
        modal.classList.remove('show');
        document.body.style.overflow = '';
    }
});
</script>
@endsection
