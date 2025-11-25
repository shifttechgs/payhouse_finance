<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Loan Application - {{ $application['reference_id'] ?? 'N/A' }}</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'DejaVu Sans', sans-serif; font-size: 8px; line-height: 1.2; color: #333; }
        .container { padding: 10px 15px; }

        /* Header */
        .header { text-align: center; border-bottom: 2px solid #0c3a30; padding-bottom: 8px; margin-bottom: 8px; }
        .company-name { font-size: 16px; font-weight: bold; color: #0c3a30; }
        .tagline { font-size: 7px; color: #666; letter-spacing: 1px; margin-bottom: 3px; }
        .form-title { font-size: 11px; font-weight: bold; color: #0c3a30; }
        .reference { font-size: 9px; color: #e91e63; font-weight: bold; }

        /* Sections */
        .section { margin-bottom: 6px; }
        .section-title {
            background: #0c3a30; color: white; padding: 3px 6px;
            font-size: 8px; font-weight: bold; margin-bottom: 4px;
        }

        /* Grid Tables */
        .grid { width: 100%; border-collapse: collapse; margin-bottom: 4px; }
        .grid td { border: 1px solid #ddd; padding: 3px 4px; font-size: 7px; vertical-align: top; }
        .grid .lbl { background: #f5f5f5; font-weight: bold; color: #0c3a30; width: 22%; }
        .grid .val { width: 28%; }

        /* 4-column layout */
        .grid4 td.lbl { width: 15%; }
        .grid4 td.val { width: 10%; }

        /* Compact info row */
        .info-row { background: #f8f9fa; border: 1px solid #ddd; padding: 4px 6px; margin-bottom: 6px; font-size: 7px; }
        .info-row span { margin-right: 15px; }
        .info-row strong { color: #0c3a30; }

        /* Declaration */
        .declaration { border: 1px solid #0c3a30; padding: 6px; margin-top: 6px; background: #f9f9f9; }
        .declaration-title { font-weight: bold; font-size: 8px; color: #0c3a30; margin-bottom: 3px; }
        .declaration-text { font-size: 6px; line-height: 1.3; text-align: justify; }

        /* Signatures */
        .sig-row { margin-top: 10px; }
        .sig-row table { width: 100%; }
        .sig-row td { width: 50%; padding: 5px; }
        .sig-line { border-top: 1px solid #333; margin-top: 20px; padding-top: 3px; font-size: 7px; color: #666; }

        /* Footer */
        .footer { margin-top: 8px; padding-top: 6px; border-top: 1px solid #0c3a30; text-align: center; font-size: 6px; color: #666; }

        /* Document note */
        .doc-note { background: #e3f2fd; border: 1px solid #2196F3; padding: 4px; font-size: 6px; color: #1565C0; margin-top: 4px; }
    </style>
</head>
<body>
<div class="container">
    <!-- Header -->
    <div class="header">
        <div class="company-name">PAYHOUSE FINANCE</div>
        <div class="tagline">INSTANT CASH LOANS</div>
        <div class="form-title">LOAN APPLICATION FORM</div>
        <div class="reference">Ref: {{ $application['reference_id'] ?? 'N/A' }}</div>
    </div>

    <!-- Application Info -->
    <div class="info-row">
        <span><strong>Submitted:</strong> {{ isset($application['submitted_at']) ? \Carbon\Carbon::parse($application['submitted_at'])->format('d M Y, H:i') : now()->format('d M Y, H:i') }}</span>
        <span><strong>IP:</strong> {{ $application['ip_address'] ?? 'N/A' }}</span>
    </div>

    <!-- Personal Details -->
    <div class="section">
        <div class="section-title">PERSONAL DETAILS</div>
        <table class="grid">
            <tr>
                <td class="lbl">Full Name</td>
                <td class="val" colspan="3">{{ trim(($application['first_name'] ?? '') . ' ' . ($application['middle_name'] ?? '') . ' ' . ($application['surname'] ?? '')) }}</td>
            </tr>
            <tr>
                <td class="lbl">National ID</td>
                <td class="val">{{ $application['national_id'] ?? 'N/A' }}</td>
                <td class="lbl">Date of Birth</td>
                <td class="val">{{ isset($application['date_of_birth']) ? \Carbon\Carbon::parse($application['date_of_birth'])->format('d/m/Y') : 'N/A' }}</td>
            </tr>
            <tr>
                <td class="lbl">Mobile</td>
                <td class="val">{{ $application['mobile_no'] ?? 'N/A' }}</td>
                <td class="lbl">Email</td>
                <td class="val">{{ $application['email_address'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td class="lbl">Address</td>
                <td class="val" colspan="3">{{ $application['residential_address'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td class="lbl">Sex</td>
                <td class="val">{{ ucfirst($application['sex'] ?? 'N/A') }}</td>
                <td class="lbl">Marital Status</td>
                <td class="val">{{ ucfirst($application['marital_status'] ?? 'N/A') }}</td>
            </tr>
            <tr>
                <td class="lbl">Dependents</td>
                <td class="val" colspan="3">Children: {{ $application['dependents_children'] ?? 0 }} | Others: {{ $application['dependents_others'] ?? 0 }}</td>
            </tr>
        </table>
    </div>

    <!-- Employment Details -->
    <div class="section">
        <div class="section-title">EMPLOYMENT DETAILS</div>
        <table class="grid">
            <tr>
                <td class="lbl">Occupation</td>
                <td class="val">{{ ucfirst($application['occupation'] ?? 'N/A') }}</td>
                <td class="lbl">Employer</td>
                <td class="val">{{ $application['employer_business'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td class="lbl">Designation</td>
                <td class="val">{{ $application['designation_department'] ?? 'N/A' }}</td>
                <td class="lbl">Years</td>
                <td class="val">{{ $application['years_in_occupation'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td class="lbl">Employer Address</td>
                <td class="val" colspan="3">{{ $application['employer_address'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td class="lbl">Monthly Salary</td>
                <td class="val">USD ${{ number_format($application['monthly_salary_income'] ?? 0, 2) }}</td>
                <td class="lbl">Other Income</td>
                <td class="val">USD ${{ number_format($application['other_income'] ?? 0, 2) }}</td>
            </tr>
            <tr>
                <td class="lbl">Accommodation</td>
                <td class="val">{{ ucfirst($application['accommodation_status'] ?? 'N/A') }}</td>
                <td class="lbl">Office Phone</td>
                <td class="val">{{ $application['office_phone'] ?? 'N/A' }}</td>
            </tr>
        </table>
    </div>

    <!-- Loan & Banking Details (Combined) -->
    <div class="section">
        <div class="section-title">LOAN & BANKING DETAILS</div>
        <table class="grid">
            <tr>
                <td class="lbl">Loan Amount</td>
                <td class="val"><strong style="color:#e91e63;">USD ${{ number_format($application['loan_amount'] ?? 0, 2) }}</strong></td>
                <td class="lbl">Loan Period</td>
                <td class="val"><strong>{{ $application['loan_period_months'] ?? 'N/A' }} months</strong></td>
            </tr>
            <tr>
                <td class="lbl">Purpose</td>
                <td class="val" colspan="3">{{ $application['loan_purpose'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td class="lbl">Bank</td>
                <td class="val">{{ $application['bank_name'] ?? 'N/A' }}</td>
                <td class="lbl">Branch</td>
                <td class="val">{{ $application['bank_branch'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td class="lbl">Account No.</td>
                <td class="val" colspan="3">{{ $application['account_number'] ?? 'N/A' }}</td>
            </tr>
        </table>
    </div>

    <!-- Next of Kin (Compact) -->
    <div class="section">
        <div class="section-title">NEXT OF KIN</div>
        <table class="grid">
            <tr>
                <td class="lbl">Kin 1 Name</td>
                <td class="val">{{ $application['kin1_name'] ?? 'N/A' }}</td>
                <td class="lbl">Relationship</td>
                <td class="val">{{ $application['kin1_relationship'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td class="lbl">Contact</td>
                <td class="val">{{ $application['kin1_contact'] ?? 'N/A' }}</td>
                <td class="lbl">Address</td>
                <td class="val">{{ $application['kin1_address'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td class="lbl">Kin 2 Name</td>
                <td class="val">{{ $application['kin2_name'] ?? 'N/A' }}</td>
                <td class="lbl">Relationship</td>
                <td class="val">{{ $application['kin2_relationship'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td class="lbl">Contact</td>
                <td class="val">{{ $application['kin2_contact'] ?? 'N/A' }}</td>
                <td class="lbl">Address</td>
                <td class="val">{{ $application['kin2_address'] ?? 'N/A' }}</td>
            </tr>
        </table>
    </div>

    <!-- Documents Note -->
    <div class="doc-note">
        <strong>ATTACHED DOCUMENTS:</strong> Payslip, National ID, Bank Statement - See email attachments
    </div>

    <!-- Declaration -->
    <div class="declaration">
        <div class="declaration-title">DECLARATION</div>
        <div class="declaration-text">
            I certify that the information above is true and complete. I authorize Payhouse Finance to make enquiries for credit assessment and consent to credit reference searches. I agree to be blacklisted via credit bureaus in case of default.
        </div>
    </div>

    <!-- Signatures -->
    <div class="sig-row">
        <table>
            <tr>
                <td><div class="sig-line">Applicant's Signature</div></td>
                <td><div class="sig-line">Date: {{ isset($application['submitted_at']) ? \Carbon\Carbon::parse($application['submitted_at'])->format('d/m/Y') : date('d/m/Y') }}</div></td>
            </tr>
        </table>
    </div>

    <!-- Footer -->
    <div class="footer">
        <strong>Payhouse Finance</strong> | Harare: Suite EF05-09 Lonrho Building, 90 Nelson Mandela Ave | Tel: +263 777 229 401<br>
        Marondera: 250 Posselt Ave | Chinhoyi: Office 26, White House Mall | Email: info@payhousefinance.com
    </div>
</div>
</body>
</html>
