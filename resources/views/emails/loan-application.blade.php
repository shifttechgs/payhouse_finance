<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Loan Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .email-header {
            background: linear-gradient(135deg, #0c3a30 0%, #1a5447 100%);
            color: #ffffff;
            padding: 30px;
            text-align: center;
        }
        .email-header h1 {
            margin: 0;
            font-size: 24px;
        }
        .email-header p {
            margin: 10px 0 0;
            font-size: 14px;
            color: #d0d0d0;
        }
        .email-body {
            padding: 30px;
        }
        .alert-box {
            background-color: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }
        .alert-box strong {
            color: #856404;
        }
        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .info-table td {
            padding: 10px;
            border-bottom: 1px solid #e9ecef;
        }
        .info-table td:first-child {
            font-weight: bold;
            color: #0c3a30;
            width: 40%;
        }
        .section-title {
            background-color: #0c3a30;
            color: #ffffff;
            padding: 10px 15px;
            margin: 25px 0 15px;
            font-size: 14px;
            font-weight: bold;
            border-radius: 4px;
        }
        .highlight {
            background-color: #9edd05;
            color: #0c3a30;
            padding: 2px 8px;
            border-radius: 3px;
            font-weight: bold;
        }
        .email-footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #6c757d;
        }
        .btn {
            display: inline-block;
            padding: 12px 25px;
            background-color: #9edd05;
            color: #0c3a30;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <h1>New Loan Application Received</h1>
            <p>Reference ID: {{ $application['reference_id'] ?? 'N/A' }}</p>
        </div>

        <!-- Body -->
        <div class="email-body">
            <div class="alert-box">
                <strong>Action Required:</strong> A new loan application has been submitted and requires your review.
            </div>

            <p>Hello Admin,</p>
            <p>A new loan application has been submitted on <strong>{{ \Carbon\Carbon::parse($application['submitted_at'])->format('d M Y \a\t H:i') }}</strong>.</p>

            <!-- Applicant Information -->
            <div class="section-title">APPLICANT INFORMATION</div>
            <table class="info-table">
                <tr>
                    <td>Full Name:</td>
                    <td><strong>{{ trim(($application['first_name'] ?? '') . ' ' . ($application['middle_name'] ?? '') . ' ' . ($application['surname'] ?? '')) }}</strong></td>
                </tr>
                <tr>
                    <td>National ID:</td>
                    <td>{{ $application['national_id'] ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <td>Mobile Number:</td>
                    <td>{{ $application['mobile_no'] ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <td>Email Address:</td>
                    <td>{{ $application['email_address'] ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <td>Residential Address:</td>
                    <td>{{ $application['residential_address'] ?? 'N/A' }}</td>
                </tr>
            </table>

            <!-- Loan Details -->
            <div class="section-title">LOAN DETAILS</div>
            <table class="info-table">
                <tr>
                    <td>Loan Amount:</td>
                    <td><span class="highlight">USD ${{ number_format($application['loan_amount'] ?? 0, 2) }}</span></td>
                </tr>
                <tr>
                    <td>Loan Period:</td>
                    <td>{{ $application['loan_period_months'] ?? 'N/A' }} months</td>
                </tr>
                <tr>
                    <td>Loan Purpose:</td>
                    <td>{{ $application['loan_purpose'] ?? 'N/A' }}</td>
                </tr>
            </table>

            <!-- Employment Information -->
            <div class="section-title">EMPLOYMENT INFORMATION</div>
            <table class="info-table">
                <tr>
                    <td>Occupation:</td>
                    <td>{{ ucfirst($application['occupation'] ?? 'N/A') }}</td>
                </tr>
                <tr>
                    <td>Employer/Business:</td>
                    <td>{{ $application['employer_business'] ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <td>Monthly Salary:</td>
                    <td>USD ${{ number_format($application['monthly_salary_income'] ?? 0, 2) }}</td>
                </tr>
                <tr>
                    <td>Other Income:</td>
                    <td>USD ${{ number_format($application['other_income'] ?? 0, 2) }}</td>
                </tr>
                <tr>
                    <td>Total Monthly Income:</td>
                    <td><strong>USD ${{ number_format(($application['monthly_salary_income'] ?? 0) + ($application['other_income'] ?? 0), 2) }}</strong></td>
                </tr>
            </table>

            <!-- Banking Details -->
            <div class="section-title">BANKING DETAILS</div>
            <table class="info-table">
                <tr>
                    <td>Bank Name:</td>
                    <td>{{ $application['bank_name'] ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <td>Branch:</td>
                    <td>{{ $application['bank_branch'] ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <td>Account Number:</td>
                    <td>{{ $application['account_number'] ?? 'N/A' }}</td>
                </tr>
            </table>

            <!-- Next of Kin -->
            <div class="section-title">NEXT OF KIN CONTACTS</div>
            <table class="info-table">
                <tr>
                    <td>First Contact:</td>
                    <td>{{ $application['kin1_name'] ?? 'N/A' }} ({{ $application['kin1_relationship'] ?? 'N/A' }})<br>
                        Tel: {{ $application['kin1_contact'] ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <td>Second Contact:</td>
                    <td>{{ $application['kin2_name'] ?? 'N/A' }} ({{ $application['kin2_relationship'] ?? 'N/A' }})<br>
                        Tel: {{ $application['kin2_contact'] ?? 'N/A' }}</td>
                </tr>
            </table>

            <div style="background: #e7f3ff; border: 1px solid #2196F3; padding: 15px; margin-top: 30px; border-radius: 4px;">
                <p style="margin: 0; color: #1565C0;">
                    <strong>📎 Attachments:</strong> This email includes the following documents:
                </p>
                <ul style="margin: 10px 0; padding-left: 20px; color: #1565C0;">
                    <li>Complete Application Form (PDF)</li>
                    <li>Applicant's Payslip (PDF)</li>
                    <li>National ID Document (PDF)</li>
                    <li>Bank Statement (PDF)</li>
                </ul>
            </div>

            <p style="margin-top: 20px;">Please review the application and all supporting documents. Contact the applicant at your earliest convenience.</p>
        </div>

        <!-- Footer -->
        <div class="email-footer">
            <p><strong>Payhouse Finance</strong> - Instant Cash Loans</p>
            <p>This is an automated notification from the Payhouse Finance loan application system.</p>
            <p style="margin-top: 10px;">
                <small>© {{ date('Y') }} Payhouse Finance. All rights reserved.</small>
            </p>
        </div>
    </div>
</body>
</html>
