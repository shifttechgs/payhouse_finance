# Payhouse Finance - Website Documentation

**Version:** 1.0
**Date:** November 25, 2025
**Prepared for:** Payhouse Finance Client

---

## Table of Contents

1. [Executive Summary](#executive-summary)
2. [System Overview](#system-overview)
3. [Features & Capabilities](#features--capabilities)
4. [Loan Application Process](#loan-application-process)
5. [Technical Specifications](#technical-specifications)
6. [User Guide](#user-guide)
7. [Administrator Guide](#administrator-guide)
8. [Security & Compliance](#security--compliance)
9. [Maintenance & Support](#maintenance--support)
10. [Troubleshooting](#troubleshooting)

---

## Executive Summary

The Payhouse Finance website is a professional, secure loan application platform designed to streamline the loan application process for both applicants and administrators. The system features a modern, user-friendly interface with comprehensive validation, secure file uploads, and automated email notifications.

### Key Highlights

✅ **5-Step Application Process** - Intuitive multi-step form with progress tracking
✅ **Secure Document Upload** - PDF file upload with validation (max 5MB per file)
✅ **Real-time Validation** - Instant feedback on form inputs
✅ **Email Notifications** - Automated email alerts to administrators
✅ **Database Storage** - All applications securely stored in MySQL database
✅ **Mobile Responsive** - Works seamlessly on all devices

---

## System Overview

### Purpose

The Payhouse Finance website serves as the primary digital platform for:
- Accepting loan applications from potential borrowers
- Collecting required documentation (payslips, ID documents, bank statements)
- Storing applicant information securely
- Notifying administrators of new applications
- Providing professional online presence for the business

### Core Functionality

1. **Public Website** - Professional landing pages showcasing loan products
2. **Application Portal** - Secure multi-step loan application form
3. **Document Management** - Secure storage of applicant documents
4. **Email System** - Automated notifications with document attachments
5. **Contact Forms** - Additional communication channels for inquiries

---

## Features & Capabilities

### 1. Multi-Step Application Form

**5-Step Process:**
- **Step 1:** Personal & Contact Details
- **Step 2:** Employment & Loan Information
- **Step 3:** Banking Details
- **Step 4:** Next of Kin Information
- **Step 5:** Document Upload

**Features:**
- Visual progress indicator
- Step-by-step navigation (Next/Previous buttons)
- Form data persistence between steps
- Auto-save functionality

### 2. Comprehensive Validation

**Frontend Validation:**
- Required field validation
- Age verification (18+ years old)
- Email format validation
- Phone number format validation (Zimbabwe numbers)
- File type validation (PDF only)
- File size validation (max 5MB per file)
- Real-time error feedback with toastr notifications

**Backend Validation:**
- Duplicate validation rules
- Database-level constraints
- Secure data sanitization
- SQL injection prevention

### 3. Secure File Upload System

**Supported Documents:**
- Payslip (latest 3 months)
- ID Document (National ID or Passport)
- Bank Statement (latest 3 months)

**Security Features:**
- PDF-only file type restriction
- File size limits (5MB max per file)
- Magic byte verification (prevents file type spoofing)
- Secure storage in private directory
- Unique reference ID-based folder structure

**Storage Path:**
```
storage/app/private/loan-applications/[REFERENCE-ID]/
├── payslip-[REFERENCE-ID].pdf
├── id_document-[REFERENCE-ID].pdf
└── bank_statement-[REFERENCE-ID].pdf
```

### 4. Email Notification System

**Admin Email Notifications Include:**
- Complete application details in PDF format
- All uploaded documents as attachments
- Applicant reference number
- Application timestamp
- IP address for security tracking

**Email Configuration:**
- SMTP Server: aab.managing.services
- Port: 465 (TLS encryption)
- From: sales@shifttechgs.com

### 5. Database Management

**Application Data Stored:**
- Personal information (name, DOB, address, national ID)
- Contact details (phone, email)
- Employment information (occupation, employer, income)
- Loan requirements (amount, period, purpose)
- Banking details (bank name, branch, account number)
- Next of kin information (2 contacts)
- Document file paths
- Application status (pending/approved/rejected/processing)
- Unique reference ID (format: LA-YYYYMMDD-XXXXXXXX)

---

## Loan Application Process

### Step-by-Step Guide for Applicants

#### **Step 1: Personal & Contact Details** (2-3 minutes)

1. Navigate to the website: `http://localhost/apply-for-loan` (or production URL)
2. Click "Apply for Loan" button on the homepage
3. Fill in the following information:

**Required Information:**
- First Name
- Surname
- Residential Address
- National ID Number
- Date of Birth (must be 18+ years old)
- Mobile Number (Zimbabwe format: +263 or 07...)
- Email Address
- Sex (Male/Female)
- Marital Status (Single/Married/Separated)
- Number of Dependent Children
- Number of Other Dependents

**What Happens:**
- Real-time validation checks your inputs
- Age verification ensures you're 18+
- Phone and email formats are validated
- Red borders appear on invalid fields
- Toastr notifications show specific errors

**Tips for Success:**
✅ Use a valid Zimbabwe phone number
✅ Ensure you're 18 years or older
✅ Provide a working email address
✅ Double-check your National ID number

4. Click **"Next"** to proceed to Step 2

---

#### **Step 2: Employment & Loan Information** (3-4 minutes)

1. Complete employment details:

**Employment Information:**
- Occupation (Employed/Self-Employed)
- Employer/Business Name
- Employer Address
- Designation/Department
- Years in Current Occupation
- Office Phone Number
- Monthly Salary/Income (USD)
- Other Income (if applicable)
- Accommodation Status (Owned/Rented/Parents)

2. Specify loan requirements:

**Loan Details:**
- Loan Amount (USD)
- Loan Period (1-60 months)
- Loan Purpose (detailed description, min 10 characters)

**What Happens:**
- Income fields validate numeric input
- Loan period limited to 1-60 months
- Loan purpose requires detailed explanation

**Tips for Success:**
✅ Be honest about your income
✅ Choose a realistic loan period
✅ Provide detailed loan purpose (helps approval)
✅ Include contact details for employer verification

3. Click **"Next"** to proceed to Step 3

---

#### **Step 3: Banking Details** (1-2 minutes)

1. Provide your banking information:

**Banking Information:**
- Bank Name (select from dropdown)
  - CBZ Bank
  - Stanbic Bank
  - ZB Bank
  - Steward Bank
  - FBC Bank
  - CABS
  - NMB Bank
  - Nedbank
  - Ecobank
  - Other
- Bank Branch
- Account Number (6-20 digits)

**What Happens:**
- Account number validates numeric format
- Ensures proper bank selection
- Verifies branch information

**Tips for Success:**
✅ Use the account where you want loan disbursement
✅ Double-check account number (no spaces or dashes)
✅ Ensure account is active and in good standing

2. Click **"Next"** to proceed to Step 4

---

#### **Step 4: Next of Kin Details** (3-5 minutes)

1. Provide details for **TWO** next of kin contacts:

**First Next of Kin:**
- Full Name
- Relationship (e.g., Spouse, Parent, Sibling)
- Contact Number (Zimbabwe format)
- Physical Address

**Second Next of Kin:**
- Full Name
- Relationship
- Contact Number
- Physical Address

**What Happens:**
- Validates both contacts are complete
- Ensures phone numbers are valid Zimbabwe numbers
- Checks addresses are detailed (min 10 characters)

**Declaration:**
At the bottom of this step, you'll see a declaration stating:
> "I declare that all the particulars and information given in this application form are true and correct. I authorize Payhouse Finance to make any enquiries necessary for credit assessment."

**Tips for Success:**
✅ Use reliable contacts who can be reached
✅ Provide different people (not same person twice)
✅ Use close family members or trusted friends
✅ Ensure addresses are complete and accurate

2. Click **"Next"** to proceed to Step 5

---

#### **Step 5: Document Upload** (5-10 minutes)

This is the final and most important step!

1. Prepare your documents:

**Required Documents (PDF format only, max 5MB each):**

📄 **Payslip** (Latest 3 months)
- Scan or take clear photo of your payslip
- Convert to PDF format
- Ensure all text is legible
- File size must be under 5MB

📄 **ID Document** (National ID or Passport)
- Scan both sides of your National ID
- Or passport bio page
- Convert to PDF format
- Ensure photo and details are clear

📄 **Bank Statement** (Latest 3 months)
- Download from online banking (preferred)
- Or scan paper statement
- Must show recent transactions
- PDF format, under 5MB

2. Upload each document:

**Upload Process:**
- Click "Choose File" for each document
- Select your PDF file from your device
- File validation happens automatically
- Green checkmark appears when valid

**What Happens:**
- Automatic file type check (PDF only)
- File size validation (max 5MB)
- Toastr notification if file is invalid
- Red border appears on invalid uploads

**Common Upload Errors:**

❌ **"File too large"**
- Solution: Compress your PDF using online tools
- Recommended: smallpdf.com, ilovepdf.com

❌ **"Must be PDF file"**
- Solution: Convert images to PDF
- Tools: Microsoft Word, online converters

❌ **"Please select a file"**
- Solution: Click "Choose File" and select document

**Tips for Success:**
✅ Use official bank statements (not screenshots)
✅ Ensure payslip shows employer name clearly
✅ ID document must be current (not expired)
✅ All documents must be in PDF format
✅ Compress large files before uploading
✅ Check file preview before uploading

3. Review all documents are uploaded
4. Click **"Submit Application"** button

---

#### **Step 6: Submission & Confirmation** (Immediate)

**What Happens After Submission:**

1. **Processing** (2-5 seconds)
   - Form validates all 5 steps
   - Files are uploaded to secure server
   - Unique reference ID is generated (format: LA-YYYYMMDD-XXXXXXXX)
   - Application is saved to database
   - Email is sent to administrators

2. **Success Modal** appears with:
   - ✅ Confirmation message
   - Reference number (save this!)
   - What happens next information

3. **Email Notifications**
   - You receive confirmation email with reference number
   - Admin receives your application with all documents attached

**Success Modal Information:**

✅ **You will receive:**
- Confirmation email with your reference number

✅ **Timeline:**
- Application reviewed within 24-48 hours
- Contact via phone/email for additional info if needed

✅ **Next Steps:**
- Wait for our team to contact you
- Keep your phone accessible
- Check your email regularly

**After Submission:**
- Save your reference number
- Return to home page by clicking "Return to Home"
- Check email for confirmation

---

### Application Status Tracking

**Application Statuses:**
- **Pending** - Application received, awaiting review
- **Processing** - Under review by loan officers
- **Approved** - Application approved (you'll be contacted)
- **Rejected** - Application declined (you'll be notified with reason)

**Note:** Currently, status tracking is handled internally. Applicants are contacted directly via phone or email.

---

### What Happens Behind the Scenes

**Administrator Workflow:**

1. **Notification Received**
   - Email alert sent immediately upon submission
   - Contains complete application PDF
   - All documents attached (payslip, ID, bank statement)

2. **Application Review**
   - Admin opens database to view application
   - Reviews all provided information
   - Verifies documents are complete and legible
   - Checks employment and income details

3. **Credit Assessment**
   - Income verification with employer
   - Bank statement analysis
   - Credit history check
   - Next of kin verification (if needed)

4. **Decision**
   - Approve: Contact applicant with loan offer
   - Reject: Contact applicant with reason
   - Processing: Request additional information

5. **Communication**
   - Phone call to applicant
   - Email with decision details
   - Schedule for signing (if approved)

**Average Processing Time:**
- Initial review: 24-48 hours
- Complete assessment: 3-5 business days
- Final decision: 5-7 business days

---

## Technical Specifications

### Server Requirements

**Web Server:**
- Apache 2.4+ or Nginx 1.18+
- PHP 8.3.14
- MySQL 9.1.0 or MariaDB 10.5+

**PHP Requirements:**
- PHP Version: 8.3.14 or higher
- Extensions Required:
  - OpenSSL
  - PDO
  - Mbstring
  - Tokenizer
  - XML
  - Ctype
  - JSON
  - BCMath
  - Fileinfo
  - GD (for PDF generation)

**PHP Configuration:**
```ini
upload_max_filesize = 6M
post_max_size = 20M
max_file_uploads = 20
memory_limit = 256M
max_execution_time = 300
```

### Framework & Dependencies

**Laravel Framework:**
- Version: 11.x
- PHP Version: ^8.2

**Composer Dependencies:**
```json
{
  "laravel/framework": "^11.0",
  "barryvdh/laravel-dompdf": "^3.0",
  "laravel/sanctum": "^4.0",
  "laravel/tinker": "^2.9"
}
```

### Database Schema

**Table: `loan_applications`**

| Column | Type | Constraints | Description |
|--------|------|-------------|-------------|
| id | bigint unsigned | PRIMARY KEY, AUTO_INCREMENT | Unique record ID |
| reference_id | varchar(191) | UNIQUE, NOT NULL | Application reference (LA-YYYYMMDD-XXXXXXXX) |
| first_name | varchar(191) | NOT NULL | Applicant first name |
| middle_name | varchar(191) | NULLABLE | Applicant middle name |
| surname | varchar(191) | NOT NULL | Applicant surname |
| residential_address | text | NOT NULL | Full residential address |
| national_id | varchar(191) | NOT NULL, INDEXED | National ID number |
| date_of_birth | date | NOT NULL | Date of birth |
| mobile_no | varchar(191) | NOT NULL | Mobile phone number |
| email_address | varchar(191) | NOT NULL, INDEXED | Email address |
| sex | enum('male','female') | NOT NULL | Gender |
| marital_status | enum('single','married','separated') | NOT NULL | Marital status |
| dependents_children | int | DEFAULT 0 | Number of dependent children |
| dependents_others | int | DEFAULT 0 | Number of other dependents |
| occupation | enum('employed','self-employed') | NOT NULL | Employment type |
| employer_business | varchar(191) | NULLABLE | Employer/Business name |
| employer_address | text | NULLABLE | Employer address |
| designation_department | varchar(191) | NULLABLE | Job title/Department |
| years_in_occupation | int | NULLABLE | Years in current job |
| office_phone | varchar(191) | NULLABLE | Office phone number |
| monthly_salary_income | decimal(12,2) | NOT NULL | Monthly salary in USD |
| other_income | decimal(12,2) | NULLABLE | Other income sources |
| accommodation_status | enum('owned','rented','parents') | NOT NULL | Housing status |
| loan_amount | decimal(12,2) | NOT NULL | Requested loan amount |
| loan_period_months | int | NOT NULL | Loan period (1-60 months) |
| loan_purpose | text | NOT NULL | Purpose of loan |
| bank_name | varchar(191) | NOT NULL | Bank name |
| bank_branch | varchar(191) | NOT NULL | Bank branch |
| account_number | varchar(191) | NOT NULL | Bank account number |
| kin1_name | varchar(191) | NOT NULL | First next of kin name |
| kin1_relationship | varchar(191) | NOT NULL | Relationship to applicant |
| kin1_contact | varchar(191) | NOT NULL | Contact number |
| kin1_address | text | NOT NULL | Physical address |
| kin2_name | varchar(191) | NOT NULL | Second next of kin name |
| kin2_relationship | varchar(191) | NOT NULL | Relationship to applicant |
| kin2_contact | varchar(191) | NOT NULL | Contact number |
| kin2_address | text | NOT NULL | Physical address |
| status | enum('pending','approved','rejected','processing') | DEFAULT 'pending', INDEXED | Application status |
| admin_notes | text | NULLABLE | Internal notes |
| pdf_path | varchar(191) | NULLABLE | Path to application PDF |
| payslip_path | varchar(500) | NULLABLE | Path to payslip file |
| id_document_path | varchar(500) | NULLABLE | Path to ID document |
| bank_statement_path | varchar(500) | NULLABLE | Path to bank statement |
| ip_address | varchar(45) | NULLABLE | Applicant IP address |
| created_at | timestamp | NULLABLE, INDEXED | Application submission time |
| updated_at | timestamp | NULLABLE | Last update time |

**Indexes:**
- PRIMARY KEY (`id`)
- UNIQUE KEY (`reference_id`)
- INDEX (`status`)
- INDEX (`created_at`)
- INDEX (`national_id`)
- INDEX (`email_address`)

### File Storage

**Directory Structure:**
```
payhouse_finance/
├── storage/
│   ├── app/
│   │   ├── private/
│   │   │   └── loan-applications/
│   │   │       └── LA-20251125-ABC12345/
│   │   │           ├── payslip-LA-20251125-ABC12345.pdf
│   │   │           ├── id_document-LA-20251125-ABC12345.pdf
│   │   │           ├── bank_statement-LA-20251125-ABC12345.pdf
│   │   │           └── loan-application-LA-20251125-ABC12345.pdf
│   │   └── public/
│   └── logs/
│       └── laravel.log
```

**Storage Configuration:**
- Local disk: `storage/app/private`
- Disk driver: local
- Visibility: private (not web-accessible)
- File permissions: 0644
- Directory permissions: 0755

### Email Configuration

**SMTP Settings:**
```env
MAIL_MAILER=smtp
MAIL_HOST=aab.managing.services
MAIL_PORT=465
MAIL_USERNAME=sales@shifttechgs.com
MAIL_PASSWORD=[configured]
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=sales@shifttechgs.com
MAIL_FROM_NAME=PayhouseFinance
CONTACT_EMAIL=sales@shifttechgs.com
MAIL_TIMEOUT=60
```

**Email Features:**
- Automatic email notifications
- PDF attachments (application summary + 3 documents)
- HTML formatted emails
- Retry mechanism on failure
- Logging of email status

### Security Features

**Data Protection:**
- CSRF protection on all forms
- SQL injection prevention (parameterized queries)
- XSS protection (input sanitization)
- File upload validation (magic bytes check)
- Rate limiting (5 requests per minute per IP)
- Secure password hashing (bcrypt)
- HTTPS recommended for production

**File Upload Security:**
- PDF-only restriction
- File size limits
- MIME type validation
- Magic byte verification
- Private storage (not web-accessible)
- Unique filename generation
- Virus scanning recommended

---

## User Guide

### For Applicants

#### Before You Start

**Required Information:**
- [ ] National ID number
- [ ] Contact details (phone & email)
- [ ] Employment information
- [ ] Banking details
- [ ] Two next of kin contacts

**Required Documents (PDF format):**
- [ ] Payslip (latest 3 months)
- [ ] ID Document (National ID or Passport)
- [ ] Bank Statement (latest 3 months)

#### Application Tips

**Best Practices:**
1. Use a desktop/laptop for better experience
2. Have all documents ready before starting
3. Use clear, high-quality scans
4. Ensure all information is accurate
5. Double-check before submitting
6. Save your reference number

**Common Mistakes to Avoid:**
- ❌ Using incorrect phone number format
- ❌ Uploading images instead of PDFs
- ❌ Providing incomplete addresses
- ❌ Using expired ID documents
- ❌ Uploading blurry/unclear scans
- ❌ Providing wrong bank account numbers

### For Website Visitors

#### Navigation

**Main Pages:**
- **Home** (`/`) - Landing page
- **Contact** (`/contact`) - Contact form
- **Business Loans** (`/business-loans`) - Business loan information
- **Personal Loans** (`/personal-loans`) - Personal loan information
- **Apply for Loan** (`/apply-for-loan`) - Application form

#### Contact Options

**Get in Touch:**
- **Phone:** +263 777 229 401
- **Email:** sales@shifttechgs.com
- **WhatsApp:** Click WhatsApp button on website
- **Contact Form:** Fill form on contact page

---

## Administrator Guide

### Accessing Applications

**Database Access:**

Connect to MySQL database:
```bash
mysql -u root -p
use payhouse;
```

**View Recent Applications:**
```sql
SELECT
    id,
    reference_id,
    first_name,
    surname,
    email_address,
    mobile_no,
    loan_amount,
    status,
    created_at
FROM loan_applications
ORDER BY created_at DESC
LIMIT 10;
```

**View Specific Application:**
```sql
SELECT * FROM loan_applications
WHERE reference_id = 'LA-20251125-ABC12345';
```

**Filter by Status:**
```sql
-- Pending applications
SELECT * FROM loan_applications WHERE status = 'pending' ORDER BY created_at DESC;

-- Approved applications
SELECT * FROM loan_applications WHERE status = 'approved' ORDER BY created_at DESC;

-- Rejected applications
SELECT * FROM loan_applications WHERE status = 'rejected' ORDER BY created_at DESC;
```

### Managing Applications

**Update Application Status:**
```sql
-- Set to processing
UPDATE loan_applications
SET status = 'processing',
    admin_notes = 'Under review by loan officer'
WHERE reference_id = 'LA-20251125-ABC12345';

-- Approve application
UPDATE loan_applications
SET status = 'approved',
    admin_notes = 'Approved - $5000 for 12 months at 15% interest'
WHERE reference_id = 'LA-20251125-ABC12345';

-- Reject application
UPDATE loan_applications
SET status = 'rejected',
    admin_notes = 'Insufficient income verification'
WHERE reference_id = 'LA-20251125-ABC12345';
```

**Add Notes:**
```sql
UPDATE loan_applications
SET admin_notes = 'Called applicant - requested additional payslips'
WHERE reference_id = 'LA-20251125-ABC12345';
```

### Accessing Uploaded Documents

**Document Locations:**
```bash
# Navigate to application folder
cd /path/to/payhouse_finance/storage/app/private/loan-applications/LA-20251125-ABC12345/

# List all files
ls -lah

# View specific document
# Copy to desktop or open with PDF viewer
```

**Document Files:**
- `payslip-[REFERENCE-ID].pdf` - Applicant's payslip
- `id_document-[REFERENCE-ID].pdf` - ID document
- `bank_statement-[REFERENCE-ID].pdf` - Bank statement
- `loan-application-[REFERENCE-ID].pdf` - Application summary PDF

### Email Management

**Check Email Logs:**
```bash
# View recent email logs
tail -100 /path/to/payhouse_finance/storage/logs/laravel.log | grep "email"

# View specific application email
grep "LA-20251125-ABC12345" /path/to/payhouse_finance/storage/logs/laravel.log
```

**Email Contains:**
1. Application summary PDF
2. Payslip attachment
3. ID document attachment
4. Bank statement attachment
5. Applicant details in email body

### Reporting & Analytics

**Application Statistics:**
```sql
-- Total applications
SELECT COUNT(*) as total_applications FROM loan_applications;

-- Applications by status
SELECT status, COUNT(*) as count
FROM loan_applications
GROUP BY status;

-- Applications this month
SELECT COUNT(*) as this_month
FROM loan_applications
WHERE MONTH(created_at) = MONTH(CURRENT_DATE())
AND YEAR(created_at) = YEAR(CURRENT_DATE());

-- Average loan amount
SELECT AVG(loan_amount) as avg_loan_amount
FROM loan_applications;

-- Total loan amount requested
SELECT SUM(loan_amount) as total_requested
FROM loan_applications
WHERE status = 'pending';

-- Applications by loan period
SELECT loan_period_months, COUNT(*) as count
FROM loan_applications
GROUP BY loan_period_months
ORDER BY loan_period_months;
```

### Backup Procedures

**Database Backup:**
```bash
# Create backup
mysqldump -u root -p payhouse > backup_$(date +%Y%m%d_%H%M%S).sql

# Restore from backup
mysql -u root -p payhouse < backup_20251125_120000.sql
```

**File Backup:**
```bash
# Backup all uploaded documents
tar -czf documents_backup_$(date +%Y%m%d).tar.gz storage/app/private/loan-applications/

# Restore documents
tar -xzf documents_backup_20251125.tar.gz -C /path/to/restore/
```

---

## Security & Compliance

### Data Protection

**Personal Data Handling:**
- All personal data encrypted in transit (HTTPS recommended)
- Database credentials stored in `.env` file (not in version control)
- File uploads stored in private directory (not web-accessible)
- IP addresses logged for security tracking
- CSRF tokens prevent form forgery

**GDPR/Privacy Considerations:**
- Collect only necessary information
- Applicants consent via declaration checkbox
- Data used only for loan assessment
- Implement data retention policy
- Provide data deletion mechanism (upon request)

### File Upload Security

**Validation Layers:**
1. Client-side: JavaScript file type/size check
2. Server-side: Laravel validation rules
3. MIME type verification
4. Magic byte inspection (prevents spoofing)
5. File size limits (5MB max)
6. Storage in private directory

**Recommendations:**
- Implement virus scanning (ClamAV)
- Regular security audits
- Monitor upload patterns
- Set up intrusion detection

### Authentication (Future Enhancement)

**Recommended for Production:**
- Admin dashboard with login
- Role-based access control (RBAC)
- Two-factor authentication (2FA)
- Session management
- Audit logs for admin actions

---

## Maintenance & Support

### Regular Maintenance Tasks

**Daily:**
- [ ] Monitor email delivery logs
- [ ] Check for new applications
- [ ] Verify disk space availability

**Weekly:**
- [ ] Review error logs
- [ ] Database performance check
- [ ] Backup verification
- [ ] Security updates check

**Monthly:**
- [ ] Full database backup
- [ ] Archive old applications
- [ ] Performance optimization
- [ ] Security audit
- [ ] Update dependencies

### System Monitoring

**Key Metrics to Monitor:**
- Application submission rate
- Email delivery success rate
- Disk space usage
- Database size
- Error rate
- Page load times

**Log Files:**
```bash
# Laravel application logs
tail -f storage/logs/laravel.log

# Apache error logs
tail -f /var/log/apache2/error.log

# Apache access logs
tail -f /var/log/apache2/access.log
```

### Performance Optimization

**Recommended Optimizations:**

1. **Enable Caching:**
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

2. **Database Optimization:**
```sql
-- Analyze tables
ANALYZE TABLE loan_applications;

-- Optimize tables
OPTIMIZE TABLE loan_applications;
```

3. **File Cleanup:**
```bash
# Clear old temporary files
php artisan cache:clear
php artisan view:clear

# Clean old logs (keep last 30 days)
find storage/logs/ -name "*.log" -mtime +30 -delete
```

### Updating the System

**Before Updating:**
1. Create full backup (database + files)
2. Test in staging environment
3. Review changelog
4. Schedule maintenance window

**Update Process:**
```bash
# Pull latest code
git pull origin main

# Update dependencies
composer install --no-dev --optimize-autoloader

# Run migrations
php artisan migrate --force

# Clear caches
php artisan config:clear
php artisan cache:clear
php artisan view:clear

# Rebuild caches
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---

## Troubleshooting

### Common Issues & Solutions

#### Issue 1: Application Not Submitting

**Symptoms:**
- Form shows error
- Submit button doesn't respond
- Validation errors appear

**Solutions:**

1. **Check Browser Console:**
   - Press F12 → Console tab
   - Look for JavaScript errors
   - Check Network tab for failed requests

2. **Verify File Uploads:**
   - Ensure files are PDF format
   - Check file size is under 5MB
   - Re-upload if necessary

3. **Check PHP Settings:**
```bash
php -i | grep upload_max_filesize
php -i | grep post_max_size
```
Should show:
- `upload_max_filesize = 6M`
- `post_max_size = 20M`

4. **Check Laravel Logs:**
```bash
tail -50 storage/logs/laravel.log
```

#### Issue 2: Email Not Received

**Symptoms:**
- Application submitted successfully
- No email received by admin

**Solutions:**

1. **Check Email Logs:**
```bash
grep "email" storage/logs/laravel.log | tail -20
```

2. **Verify SMTP Settings:**
```bash
# Check .env file
cat .env | grep MAIL
```

3. **Test Email Manually:**
```bash
php artisan tinker
Mail::raw('Test email', function($msg) {
    $msg->to('sales@shifttechgs.com')->subject('Test');
});
```

4. **Check Spam Folder:**
- Look in spam/junk folder
- Add sender to safe list

5. **Verify SMTP Connection:**
```bash
telnet aab.managing.services 465
```

#### Issue 3: File Upload Fails

**Symptoms:**
- "File too large" error
- "Invalid file type" error
- Upload progress stuck

**Solutions:**

1. **Check File Size:**
   - Max 5MB per file
   - Compress PDF if too large
   - Use online PDF compressor

2. **Verify File Type:**
   - Must be PDF format
   - Not image files (JPG, PNG)
   - Convert to PDF if needed

3. **Check PHP Upload Limits:**
```ini
# Edit php.ini
upload_max_filesize = 6M
post_max_size = 20M
max_file_uploads = 20
```

4. **Restart Web Server:**
```bash
# Apache
sudo systemctl restart apache2

# Or on Windows WAMP
# Right-click WAMP icon → Restart All Services
```

#### Issue 4: Age Validation Not Working

**Symptoms:**
- Can select age under 18
- No error shown
- Form proceeds to next step

**Solutions:**

1. **Clear Browser Cache:**
   - Press Ctrl+Shift+Delete
   - Clear cached files
   - Reload page with Ctrl+F5

2. **Check JavaScript Console:**
   - Press F12 → Console
   - Look for JavaScript errors
   - Check if toastr is loaded

3. **Verify View Cache:**
```bash
php artisan view:clear
```

4. **Test Validation:**
   - Select date of birth: 2010-01-01 (14 years old)
   - Should show toastr: "You must be at least 18 years old"
   - Field should be cleared

#### Issue 5: Database Connection Error

**Symptoms:**
- "SQLSTATE[HY000] [2002]" error
- "Connection refused" message
- Application won't load

**Solutions:**

1. **Check MySQL Service:**
```bash
# Check if MySQL is running
sudo systemctl status mysql

# Or on Windows WAMP
# Check WAMP tray icon - MySQL should be green
```

2. **Verify Database Credentials:**
```bash
cat .env | grep DB_
```

3. **Test Database Connection:**
```bash
mysql -u root -p
# Enter password when prompted
```

4. **Check Database Exists:**
```sql
SHOW DATABASES;
USE payhouse;
```

#### Issue 6: Permission Errors

**Symptoms:**
- "Permission denied" errors
- Can't write to storage
- File upload fails

**Solutions:**

1. **Set Correct Permissions:**
```bash
# Linux
chmod -R 775 storage
chmod -R 775 bootstrap/cache
chown -R www-data:www-data storage
chown -R www-data:www-data bootstrap/cache

# Check current permissions
ls -la storage/
```

2. **On Windows:**
   - Right-click storage folder → Properties
   - Security tab → Edit
   - Give "Full Control" to IIS_IUSRS or IUSR

---

### Error Messages Reference

| Error Message | Cause | Solution |
|--------------|-------|----------|
| "You must be at least 18 years old" | Age under 18 | Select valid date (18+ years) |
| "File too large" | File exceeds 5MB | Compress PDF file |
| "Must be PDF file" | Wrong file format | Convert to PDF |
| "Validation failed" | Invalid form data | Check all fields for errors |
| "Connection refused" | Database not running | Start MySQL/MariaDB service |
| "CSRF token mismatch" | Expired session | Refresh page and resubmit |
| "Email failed" | SMTP issue | Check email configuration |
| "Permission denied" | File permissions | Set correct directory permissions |

---

### Getting Help

**Support Contacts:**

**Developer Support:**
- Email: developer@shifttechgs.com
- Phone: +263 777 229 401

**For Technical Issues:**
1. Check this documentation first
2. Review error logs
3. Try troubleshooting steps
4. Contact developer with:
   - Error message
   - Steps to reproduce
   - Browser/system info
   - Screenshots if applicable

**For Business Questions:**
- Email: sales@shifttechgs.com
- Phone: +263 777 229 401

---

## Appendix

### A. System URLs

**Development:**
- Base URL: `http://localhost`
- Application Form: `http://localhost/apply-for-loan`
- Contact Page: `http://localhost/contact`

**Production:**
- Update with actual domain after deployment

### B. File Formats

**Accepted File Types:**
- PDF only (.pdf)
- Max size: 5MB per file
- Multiple files: Yes (3 required)

**Image to PDF Conversion:**
- Online tools: smallpdf.com, ilovepdf.com
- Microsoft Word: Insert → Picture → Save as PDF
- Scan apps: Adobe Scan, CamScanner

### C. Browser Compatibility

**Supported Browsers:**
- ✅ Chrome 90+
- ✅ Firefox 88+
- ✅ Safari 14+
- ✅ Edge 90+
- ⚠️ Internet Explorer 11 (limited support)

**Recommended:**
- Use latest Chrome or Firefox
- Enable JavaScript
- Allow cookies
- Stable internet connection

### D. Mobile Responsiveness

**Supported Devices:**
- ✅ Desktop (1920×1080 and up)
- ✅ Laptop (1366×768 and up)
- ✅ Tablet (768×1024)
- ✅ Mobile (375×667 and up)

**Mobile Tips:**
- Use landscape for better experience
- Ensure good internet connection
- Use mobile browser (Chrome/Safari)
- Take clear document photos

### E. Reference ID Format

**Structure:** `LA-YYYYMMDD-XXXXXXXX`

**Example:** `LA-20251125-ABC12345`

**Components:**
- `LA` = Loan Application
- `YYYYMMDD` = Date (2025-11-25)
- `XXXXXXXX` = Random 8-character code

**Uses:**
- Unique identifier for each application
- Reference in emails
- File naming
- Database queries
- Customer communication

### F. Validation Rules Summary

| Field | Rules |
|-------|-------|
| Name fields | Letters, spaces, hyphens, apostrophes only |
| Email | Valid format, RFC compliant |
| Phone | Zimbabwe format: +263 or 07... |
| Date of Birth | 18-100 years old |
| National ID | Max 50 characters |
| Addresses | Min 10 characters |
| Income | Numeric, min $1 |
| Loan Amount | Numeric, min $1, max $999,999,999.99 |
| Loan Period | 1-60 months |
| Loan Purpose | Min 10 characters |
| Account Number | 6-20 digits |
| Files | PDF, max 5MB each |

---

## Document Version History

| Version | Date | Changes | Author |
|---------|------|---------|--------|
| 1.0 | 2025-11-25 | Initial documentation | Development Team |

---

## Conclusion

This documentation provides comprehensive information about the Payhouse Finance loan application system. For additional support or questions not covered in this guide, please contact the development team.

**Thank you for using Payhouse Finance!**

---

*End of Documentation*
