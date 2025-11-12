<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Loan Application - {{ $application->full_name }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DejaVu Sans', sans-serif;
            font-size: 11px;
            line-height: 1.4;
            color: #333;
        }

        .container {
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 3px solid #0c3a30;
            padding-bottom: 20px;
        }

        .logo-section {
            margin-bottom: 15px;
        }

        .company-name {
            font-size: 24px;
            font-weight: bold;
            color: #9edd05;
            margin-bottom: 5px;
        }

        .tagline {
            font-size: 10px;
            color: #666;
            letter-spacing: 2px;
        }

        .form-title {
            font-size: 20px;
            font-weight: bold;
            color: #0c3a30;
            margin-top: 15px;
        }

        .reference {
            font-size: 14px;
            color: #e91e63;
            font-weight: bold;
            margin-top: 5px;
        }

        .section {
            margin-bottom: 25px;
        }

        .section-title {
            background-color: #0c3a30;
            color: white;
            padding: 8px 12px;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }

        table td {
            padding: 8px;
            border: 1px solid #ddd;
            font-size: 10px;
        }

        table td.label {
            background-color: #f5f5f5;
            font-weight: bold;
            width: 35%;
            color: #0c3a30;
        }

        table td.value {
            width: 65%;
        }

        .three-column {
            display: table;
            width: 100%;
            margin-bottom: 15px;
        }

        .three-column .column {
            display: table-cell;
            width: 33.33%;
            padding: 8px;
            border: 1px solid #ddd;
        }

        .column .label {
            font-weight: bold;
            color: #0c3a30;
            font-size: 9px;
            margin-bottom: 3px;
        }

        .column .value {
            font-size: 10px;
        }

        .two-column {
            display: table;
            width: 100%;
            margin-bottom: 10px;
        }

        .two-column .column {
            display: table-cell;
            width: 50%;
            padding: 8px;
            border: 1px solid #ddd;
        }

        .info-box {
            background-color: #f8f9fa;
            border-left: 4px solid #9edd05;
            padding: 12px;
            margin-bottom: 15px;
        }

        .info-box .title {
            font-weight: bold;
            color: #0c3a30;
            margin-bottom: 5px;
        }

        .declaration {
            border: 2px solid #0c3a30;
            padding: 15px;
            margin-top: 20px;
            background-color: #f8f9fa;
        }

        .declaration-title {
            font-weight: bold;
            font-size: 12px;
            color: #0c3a30;
            margin-bottom: 8px;
        }

        .declaration-text {
            font-size: 9px;
            line-height: 1.5;
            text-align: justify;
        }

        .signature-section {
            margin-top: 30px;
            display: table;
            width: 100%;
        }

        .signature-box {
            display: table-cell;
            width: 50%;
            padding: 10px;
        }

        .signature-line {
            border-top: 1px solid #333;
            margin-top: 40px;
            padding-top: 5px;
            font-size: 9px;
            color: #666;
        }

        .footer {
            margin-top: 40px;
            padding-top: 15px;
            border-top: 2px solid #0c3a30;
            text-align: center;
            font-size: 9px;
            color: #666;
        }

        .status-badge {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: bold;
            margin-top: 10px;
        }

        .status-pending {
            background-color: #fff3cd;
            color: #856404;
        }

        .status-approved {
            background-color: #d4edda;
            color: #155724;
        }

        .status-rejected {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div class="logo-section">
                <div class="company-name">Payhouse Finance</div>
                <div class="tagline">INSTANT CASH LOANS</div>
            </div>
            <div class="form-title">LOAN APPLICATION FORM</div>
            <div class="reference">PF777</div>
            <div class="status-badge status-{{ $application->status }}">
                Status: {{ strtoupper($application->status) }}
            </div>
        </div>

        <!-- Application Info -->
        <div class="info-box">
            <div class="title">Application Information</div>
            <div>Application ID: #{{ $application->id }}</div>
            <div>Submitted: {{ $application->created_at->format('d M Y, H:i') }}</div>
        </div>

        <!-- Personal and Employment Details -->
        <div class="section">
            <div class="section-title">Personal and Employment Details</div>

            <div class="three-column">
                <div class="column">
                    <div class="label">First Name</div>
                    <div class="value">{{ $application->first_name }}</div>
                </div>
                <div class="column">
                    <div class="label">Middle Name</div>
                    <div class="value">{{ $application->middle_name ?: 'N/A' }}</div>
                </div>
                <div class="column">
                    <div class="label">Surname</div>
                    <div class="value">{{ $application->surname }}</div>
                </div>
            </div>

            <table>
                <tr>
                    <td class="label">Residential Address</td>
                    <td class="value">{{ $application->residential_address }}</td>
                </tr>
            </table>

            <div class="two-column">
                <div class="column">
                    <div class="label">National ID</div>
                    <div class="value">{{ $application->national_id }}</div>
                </div>
                <div class="column">
                    <div class="label">Date of Birth</div>
                    <div class="value">{{ $application->date_of_birth->format('d M Y') }}</div>
                </div>
            </div>

            <div class="two-column">
                <div class="column">
                    <div class="label">Mobile No</div>
                    <div class="value">{{ $application->mobile_no }}</div>
                </div>
                <div class="column">
                    <div class="label">Email Address</div>
                    <div class="value">{{ $application->email_address }}</div>
                </div>
            </div>

            <div class="three-column">
                <div class="column">
                    <div class="label">Sex</div>
                    <div class="value">{{ ucfirst($application->sex) }}</div>
                </div>
                <div class="column">
                    <div class="label">Marital Status</div>
                    <div class="value">{{ ucfirst($application->marital_status) }}</div>
                </div>
                <div class="column">
                    <div class="label">No. of Dependents</div>
                    <div class="value">Children: {{ $application->dependents_children }}, Others: {{ $application->dependents_others }}</div>
                </div>
            </div>

            <div class="two-column">
                <div class="column">
                    <div class="label">Occupation</div>
                    <div class="value">{{ ucfirst($application->occupation) }}</div>
                </div>
                <div class="column">
                    <div class="label">Employer / Business</div>
                    <div class="value">{{ $application->employer_business ?: 'N/A' }}</div>
                </div>
            </div>

            <table>
                <tr>
                    <td class="label">Employer Address</td>
                    <td class="value">{{ $application->employer_address ?: 'N/A' }}</td>
                </tr>
            </table>

            <div class="three-column">
                <div class="column">
                    <div class="label">Designation / Department</div>
                    <div class="value">{{ $application->designation_department ?: 'N/A' }}</div>
                </div>
                <div class="column">
                    <div class="label">Years in Occupation</div>
                    <div class="value">{{ $application->years_in_occupation ?: 'N/A' }}</div>
                </div>
                <div class="column">
                    <div class="label">Office Phone</div>
                    <div class="value">{{ $application->office_phone ?: 'N/A' }}</div>
                </div>
            </div>

            <div class="three-column">
                <div class="column">
                    <div class="label">Monthly Salary Income</div>
                    <div class="value">USD ${{ number_format($application->monthly_salary_income, 2) }}</div>
                </div>
                <div class="column">
                    <div class="label">Other Income</div>
                    <div class="value">USD ${{ number_format($application->other_income ?? 0, 2) }}</div>
                </div>
                <div class="column">
                    <div class="label">Accommodation Status</div>
                    <div class="value">{{ ucfirst($application->accommodation_status) }}</div>
                </div>
            </div>
        </div>

        <!-- Loan Details -->
        <div class="section">
            <div class="section-title">Loan Details</div>

            <div class="two-column">
                <div class="column">
                    <div class="label">Loan Amount</div>
                    <div class="value">USD ${{ number_format($application->loan_amount, 2) }}</div>
                </div>
                <div class="column">
                    <div class="label">Loan Period (In months)</div>
                    <div class="value">{{ $application->loan_period_months }} months</div>
                </div>
            </div>

            <table>
                <tr>
                    <td class="label">Loan Purpose</td>
                    <td class="value">{{ $application->loan_purpose }}</td>
                </tr>
            </table>
        </div>

        <!-- Banking Details -->
        <div class="section">
            <div class="section-title">Banking Details</div>

            <div class="two-column">
                <div class="column">
                    <div class="label">Bank</div>
                    <div class="value">{{ $application->bank_name }}</div>
                </div>
                <div class="column">
                    <div class="label">Branch</div>
                    <div class="value">{{ $application->bank_branch }}</div>
                </div>
            </div>

            <table>
                <tr>
                    <td class="label">Account Number</td>
                    <td class="value">{{ $application->account_number }}</td>
                </tr>
            </table>
        </div>

        <!-- Next of Kin Details -->
        <div class="section">
            <div class="section-title">Next of Kin Details</div>

            <div class="info-box">
                <div class="title">1. First Next of Kin</div>
            </div>

            <div class="two-column">
                <div class="column">
                    <div class="label">Name</div>
                    <div class="value">{{ $application->kin1_name }}</div>
                </div>
                <div class="column">
                    <div class="label">Relationship</div>
                    <div class="value">{{ $application->kin1_relationship }}</div>
                </div>
            </div>

            <div class="two-column">
                <div class="column">
                    <div class="label">Contact</div>
                    <div class="value">{{ $application->kin1_contact }}</div>
                </div>
                <div class="column">
                    <div class="label">Address</div>
                    <div class="value">{{ $application->kin1_address }}</div>
                </div>
            </div>

            <div class="info-box" style="margin-top: 15px;">
                <div class="title">2. Second Next of Kin</div>
            </div>

            <div class="two-column">
                <div class="column">
                    <div class="label">Name</div>
                    <div class="value">{{ $application->kin2_name }}</div>
                </div>
                <div class="column">
                    <div class="label">Relationship</div>
                    <div class="value">{{ $application->kin2_relationship }}</div>
                </div>
            </div>

            <div class="two-column">
                <div class="column">
                    <div class="label">Contact</div>
                    <div class="value">{{ $application->kin2_contact }}</div>
                </div>
                <div class="column">
                    <div class="label">Address</div>
                    <div class="value">{{ $application->kin2_address }}</div>
                </div>
            </div>
        </div>

        <!-- Terms and Conditions -->
        <div class="section">
            <div class="section-title">Terms and Conditions</div>

            <div class="declaration">
                <div class="declaration-title">DECLARATION</div>
                <div class="declaration-text">
                    I certify that the information above is true and complete and authorize Payhouse Finance to make any enquiries which it may consider necessary for confirmation of these and for credit assessment. I hereby give the lender consent to conduct a credit reference search as part of credit appraisal and to blacklist me via third party credit clearing bureaus in the event of default.
                </div>
            </div>

            <div class="signature-section">
                <div class="signature-box">
                    <div class="signature-line">Applicant's Signature</div>
                </div>
                <div class="signature-box">
                    <div class="signature-line">Date: {{ $application->created_at->format('d/m/Y') }}</div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div><strong>Payhouse Finance</strong> - Instant Cash Loans</div>
            <div>Harare: Suite EF05-09 Lonrho Building, 90 Nelson Mandela Avenue | Tel: +263 777 229 401</div>
            <div>Marondera: 250 Posselt Avenue, The Green | Tel: +263 773 009 129</div>
            <div>Chinhoyi: Office 26, White House Shopping Mall, 67 Arthur Maramba Street | Tel: +263 779 130 258</div>
            <div style="margin-top: 10px;">Email: info@payhousefinance.com | Generated: {{ now()->format('d M Y H:i') }}</div>
        </div>
    </div>
</body>
</html>
