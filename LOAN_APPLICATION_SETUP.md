# Loan Application System - Setup Guide

## Overview
A professional, production-ready loan application system with PDF generation and email notifications for Payhouse Finance.

## Features
- ✅ Multi-step responsive form with validation
- ✅ PDF generation matching the original form design
- ✅ Automatic email notification to admin with PDF attachment
- ✅ Complete database storage of all application data
- ✅ Application tracking and status management
- ✅ Professional UI matching Payhouse Finance branding
- ✅ Mobile-responsive design

## Installation Steps

### 1. Install Dependencies

Run the following command in your project directory:

```bash
composer install
```

This will install the required `barryvdh/laravel-dompdf` package for PDF generation.

### 2. Run Database Migration

Execute the migration to create the `loan_applications` table:

```bash
php artisan migrate
```

This creates a table with all necessary fields for storing loan application data.

### 3. Configure Email Settings

Add the following to your `.env` file:

```env
# Email Configuration
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@payhousefinance.com
MAIL_FROM_NAME="Payhouse Finance"

# Admin Email (where loan applications will be sent)
ADMIN_EMAIL=info@payhousefinance.com
```

**For Gmail:**
- Use an App Password instead of your regular password
- Enable 2-Factor Authentication
- Generate App Password: Google Account → Security → 2-Step Verification → App Passwords

### 4. Configure Storage

Create a symbolic link for public storage:

```bash
php artisan storage:link
```

This allows PDF files to be stored and accessed properly.

### 5. Set Permissions

Ensure the storage directory is writable:

```bash
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

### 6. Clear Cache

Clear all caches to ensure changes take effect:

```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
```

## File Structure

```
app/
├── Http/Controllers/
│   └── LoanApplicationController.php    # Main controller
├── Models/
│   └── LoanApplication.php              # Eloquent model
database/
└── migrations/
    └── 2025_11_11_141200_create_loan_applications_table.php
resources/
└── views/
    ├── loan-application/
    │   ├── index.blade.php              # Main application form
    │   ├── success.blade.php            # Success page
    │   └── pdf.blade.php                # PDF template
    └── emails/
        └── loan-application.blade.php    # Email template
routes/
└── web.php                               # Route definitions
```

## Usage

### Accessing the Form

Navigate to: `http://your-domain.com/apply-for-loan`

### Form Flow

1. **Step 1: Personal Details**
   - Name, address, contact info
   - Date of birth, marital status
   - Dependents information

2. **Step 2: Employment & Loan Details**
   - Employment information
   - Income details
   - Loan amount, period, and purpose

3. **Step 3: Banking Details**
   - Bank name and branch
   - Account number

4. **Step 4: Next of Kin**
   - Two next of kin contacts with full details

5. **Submission**
   - Form validates all required fields
   - Creates database record
   - Generates PDF
   - Sends email to admin
   - Redirects to success page

### What Happens After Submission

1. ✅ Application saved to database with status "pending"
2. ✅ PDF generated and stored in `storage/app/public/loan-applications/`
3. ✅ Email sent to admin with PDF attachment
4. ✅ User redirected to success page

## Admin Panel (Optional Enhancement)

You can create an admin panel to:
- View all loan applications
- Update application status (pending/approved/rejected)
- Add admin notes
- Filter and search applications
- Export applications

## API Endpoints

### Routes

```php
GET  /apply-for-loan              # Display application form
POST /apply-for-loan              # Submit application
GET  /loan-application/success    # Success page
```

### POST Request Format

Content-Type: `application/json`

```json
{
    "first_name": "John",
    "middle_name": "Doe",
    "surname": "Smith",
    "residential_address": "123 Main Street",
    "national_id": "12-345678-X-12",
    "date_of_birth": "1990-01-01",
    "mobile_no": "+263777123456",
    "email_address": "john@example.com",
    "sex": "male",
    "marital_status": "married",
    "dependents_children": 2,
    "dependents_others": 0,
    "occupation": "employed",
    "employer_business": "ABC Company",
    "employer_address": "456 Business Ave",
    "designation_department": "Manager",
    "years_in_occupation": 5,
    "office_phone": "+263242123456",
    "monthly_salary_income": 1500.00,
    "other_income": 200.00,
    "accommodation_status": "owned",
    "loan_amount": 5000.00,
    "loan_period_months": 12,
    "loan_purpose": "Home improvement",
    "bank_name": "CBZ Bank",
    "bank_branch": "Harare Main",
    "account_number": "1234567890",
    "kin1_name": "Jane Smith",
    "kin1_relationship": "Spouse",
    "kin1_contact": "+263777654321",
    "kin1_address": "Same as applicant",
    "kin2_name": "Bob Smith",
    "kin2_relationship": "Brother",
    "kin2_contact": "+263777111222",
    "kin2_address": "789 Other Street"
}
```

## Database Schema

The `loan_applications` table includes:

- Personal details (name, address, ID, DOB)
- Contact information (mobile, email)
- Employment details (employer, salary, occupation)
- Loan details (amount, period, purpose)
- Banking information (bank, branch, account)
- Next of kin details (2 contacts)
- Status tracking (pending/approved/rejected)
- Metadata (IP address, timestamps, PDF path)

## Validation Rules

All required fields are validated on the frontend and backend:
- Email format validation
- Date validation (must be in the past)
- Numeric validation for amounts and periods
- Required field validation
- Minimum/maximum value constraints

## Security Features

- ✅ CSRF protection
- ✅ Input validation and sanitization
- ✅ SQL injection protection (Eloquent ORM)
- ✅ XSS protection
- ✅ IP address tracking
- ✅ Secure file storage

## Testing

### Test the Form Submission

1. Navigate to `/apply-for-loan`
2. Fill in all required fields
3. Submit the form
4. Check:
   - Database for new record
   - Storage folder for PDF
   - Admin email inbox for notification

### Test Email Functionality

```bash
php artisan tinker
```

```php
Mail::raw('Test email', function ($message) {
    $message->to(env('ADMIN_EMAIL'))
            ->subject('Test Email');
});
```

## Troubleshooting

### PDF Not Generating
- Check storage permissions: `chmod -R 775 storage`
- Verify `storage:link` was run
- Check logs: `storage/logs/laravel.log`

### Email Not Sending
- Verify `.env` email configuration
- Check spam folder
- Test SMTP connection
- Enable less secure apps (Gmail)
- Use App Password for Gmail

### Form Not Submitting
- Check browser console for JavaScript errors
- Verify CSRF token is present
- Check server error logs
- Ensure all routes are registered

### Database Errors
- Run migration: `php artisan migrate`
- Check database connection in `.env`
- Verify table exists: `php artisan db:show`

## Customization

### Change Email Template
Edit: `resources/views/emails/loan-application.blade.php`

### Change PDF Design
Edit: `resources/views/loan-application/pdf.blade.php`

### Change Form Fields
1. Update migration
2. Update model fillable array
3. Update controller validation
4. Update form view
5. Update PDF template

### Change Form Styling
Edit the `<style>` section in `resources/views/loan-application/index.blade.php`

## Production Checklist

- [ ] Set `APP_ENV=production` in `.env`
- [ ] Set `APP_DEBUG=false` in `.env`
- [ ] Configure proper SMTP server
- [ ] Set correct `ADMIN_EMAIL`
- [ ] Test email delivery
- [ ] Test PDF generation
- [ ] Optimize autoloader: `composer install --optimize-autoloader --no-dev`
- [ ] Cache configuration: `php artisan config:cache`
- [ ] Cache routes: `php artisan route:cache`
- [ ] Set up database backups
- [ ] Configure file backup for PDFs
- [ ] Set up SSL certificate
- [ ] Test on mobile devices
- [ ] Set up monitoring/logging

## Support

For issues or questions:
- Email: info@payhousefinance.com
- Phone: +263 777 229 401

## Version History

- **v1.0.0** (2025-11-11)
  - Initial release
  - Multi-step form with validation
  - PDF generation
  - Email notifications
  - Complete database integration

---

**Generated for Payhouse Finance**
*Instant Cash Loans*
