# Payhouse Finance - Client Quick Start Guide

**For:** Business Owners & Administrators
**Date:** November 25, 2025

---

## Welcome to Your New Loan Application System! 🎉

This guide will help you get started with managing your loan application website.

---

## Quick Overview

Your website now has a **professional 5-step loan application form** that:

✅ Collects all necessary applicant information
✅ Securely uploads required documents (PDF files)
✅ Sends you email notifications with all details
✅ Stores everything in a database for easy access
✅ Works perfectly on mobile, tablet, and desktop

---

## How It Works (Simple Explanation)

### 1. **Customer Visits Website**
- Goes to: `yourwebsite.com/apply-for-loan`
- Sees professional, easy-to-use form

### 2. **Customer Fills 5 Steps**
1. Personal details (name, ID, contact info)
2. Employment & loan details
3. Banking information
4. Next of kin contacts
5. Upload documents (payslip, ID, bank statement)

### 3. **Customer Submits**
- System validates everything automatically
- Files are uploaded securely
- Unique reference number generated (e.g., LA-20251125-ABC12345)

### 4. **You Receive Email**
📧 Email arrives at: **sales@shifttechgs.com**

Email contains:
- Complete application summary (PDF)
- Payslip (PDF attachment)
- ID document (PDF attachment)
- Bank statement (PDF attachment)
- All applicant details

### 5. **You Review & Decide**
- Open email and review documents
- Check database for full details
- Contact applicant with decision

---

## Checking Applications in Database

### Quick Method (Recommended for Non-Technical Users)

**Ask your IT person or developer to:**
1. Create a simple admin dashboard (future enhancement)
2. Export applications to Excel for review
3. Set up automated reports

### For Technical Users

**Connect to database:**
```bash
mysql -u root -p
use payhouse;
```

**View recent applications:**
```sql
SELECT
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

**View specific application:**
```sql
SELECT * FROM loan_applications
WHERE reference_id = 'LA-20251125-ABC12345';
```

---

## Managing Application Status

**Update status when you make a decision:**

```sql
-- Mark as processing
UPDATE loan_applications
SET status = 'processing'
WHERE reference_id = 'LA-20251125-ABC12345';

-- Approve application
UPDATE loan_applications
SET status = 'approved',
    admin_notes = 'Approved $5000 for 12 months'
WHERE reference_id = 'LA-20251125-ABC12345';

-- Reject application
UPDATE loan_applications
SET status = 'rejected',
    admin_notes = 'Insufficient income'
WHERE reference_id = 'LA-20251125-ABC12345';
```

---

## Finding Uploaded Documents

All documents are stored here:
```
C:\wamp64_3.3.4\www\projects\payhouse_finance\storage\app\private\loan-applications\
```

Each application has its own folder:
```
LA-20251125-ABC12345/
├── payslip-LA-20251125-ABC12345.pdf
├── id_document-LA-20251125-ABC12345.pdf
├── bank_statement-LA-20251125-ABC12345.pdf
└── loan-application-LA-20251125-ABC12345.pdf
```

**To view documents:**
1. Navigate to the folder using File Explorer
2. Open the reference ID folder (e.g., LA-20251125-ABC12345)
3. Double-click PDF to open

---

## Daily Operations Checklist

### Every Morning ☀️
- [ ] Check email for new applications
- [ ] Review any overnight submissions
- [ ] Update status of applications in progress

### When Application Arrives 📨
- [ ] Open email and review attachments
- [ ] Verify all documents are clear and complete
- [ ] Check database for full applicant details
- [ ] Set status to "processing"

### During Review 🔍
- [ ] Verify employment details
- [ ] Check income against bank statements
- [ ] Contact employer if needed
- [ ] Contact next of kin if needed
- [ ] Run credit checks (your process)

### Making Decision ✅
- [ ] Update status (approved/rejected)
- [ ] Add notes explaining decision
- [ ] Contact applicant via phone
- [ ] Send official letter/email

---

## Common Questions

### Q: How do I know when a new application arrives?
**A:** You'll receive an email immediately at sales@shifttechgs.com with all the details and attachments.

### Q: Where are the uploaded files stored?
**A:** In a secure, private folder on your server. They're also attached to the email you receive.

### Q: Can applicants check their status online?
**A:** Not currently. This is a future enhancement. For now, you contact them directly.

### Q: What if someone submits twice by mistake?
**A:** Each submission creates a new application with a unique reference number. You can identify duplicates by email address or national ID.

### Q: How do I backup applications?
**A:** Your IT person should:
1. Backup the database weekly
2. Backup the storage/app/private folder weekly
3. Keep backups for at least 1 year

### Q: Can I change the email address that receives applications?
**A:** Yes! Your developer can update this in the configuration file.

### Q: What browsers do applicants need?
**A:** Any modern browser: Chrome, Firefox, Safari, or Edge. Works on phones too!

### Q: How long does the application take?
**A:** About 10-15 minutes if the applicant has all documents ready.

---

## What Applicants Need

Give this checklist to potential applicants:

### Required Information:
- [ ] National ID number
- [ ] Contact details (phone & email)
- [ ] Employment information
- [ ] Banking details
- [ ] Two next of kin contacts

### Required Documents (PDF format only):
- [ ] Payslip (latest 3 months)
- [ ] ID Document (National ID or Passport scan)
- [ ] Bank Statement (latest 3 months)

### Requirements:
- [ ] Must be 18 years or older
- [ ] Must have smartphone or computer
- [ ] Must have internet connection
- [ ] Files must be in PDF format
- [ ] Each file under 5MB

---

## Monthly Maintenance Tasks

### Every Month:
1. **Backup Everything**
   - Database backup
   - Document files backup
   - Store backups securely

2. **Review Statistics**
   - How many applications received?
   - How many approved/rejected?
   - Average loan amount?
   - Most common loan purpose?

3. **Clean Up**
   - Archive old applications (older than 1 year)
   - Delete test/spam applications
   - Update any pending statuses

4. **System Check**
   - Ensure email is working
   - Test the form yourself
   - Check storage space available

---

## Important Contact Information

### For Technical Support:
- **Developer:** developer@shifttechgs.com
- **Phone:** +263 777 229 401

### For Business Support:
- **Email:** sales@shifttechgs.com
- **Phone:** +263 777 229 401

### When to Contact Developer:
- ❌ Email notifications stop working
- ❌ Form won't submit
- ❌ Website is down
- ❌ Need to change settings
- ❌ Want to add new features
- ❌ Database issues

---

## Future Enhancements (Optional)

Consider these upgrades in the future:

### Admin Dashboard 💼
- View all applications in one place
- Filter by status, date, amount
- Export to Excel
- Visual charts and statistics
- One-click status updates

### Applicant Portal 👤
- Check application status online
- Upload additional documents
- Receive automated status updates
- Schedule appointments

### Advanced Features 🚀
- SMS notifications
- Automated credit checks
- Digital signatures
- Payment integration
- Customer chat support

**Ask your developer for quotes on these features!**

---

## Quick Troubleshooting

### Problem: Not receiving emails
**Solution:**
1. Check spam/junk folder
2. Add sales@shifttechgs.com to safe senders
3. Contact your developer to check email settings

### Problem: Applicant says form won't submit
**Solution:**
1. Ask them to check file sizes (max 5MB each)
2. Ensure files are PDF format
3. Try different browser (Chrome recommended)
4. Check internet connection

### Problem: Can't find uploaded documents
**Solution:**
1. Check the email - documents are attached
2. Look in storage/app/private/loan-applications/[reference-id]/
3. Contact developer if folders are missing

---

## Security Best Practices

### Do's ✅
- Change default passwords regularly
- Use strong passwords
- Keep backups in secure location
- Only share access with trusted staff
- Review applications promptly
- Delete test/spam applications

### Don'ts ❌
- Don't share database passwords
- Don't leave computer unlocked
- Don't email passwords
- Don't ignore security updates
- Don't allow public database access

---

## Success Tips

### For Best Results:

1. **Respond Quickly** ⚡
   - Check emails daily
   - Respond to applicants within 24-48 hours
   - Build reputation for fast service

2. **Keep Records** 📁
   - Save all communications
   - Document decisions
   - Track approval rates
   - Maintain audit trail

3. **Communicate Clearly** 💬
   - Use professional language
   - Explain decisions
   - Set expectations
   - Follow up promptly

4. **Monitor Quality** 🎯
   - Check for incomplete applications
   - Verify document quality
   - Contact for clarifications
   - Reduce fraud risk

---

## Getting Started Today

### Step 1: Test the System
1. Visit: yourwebsite.com/apply-for-loan
2. Fill out the form yourself (use fake data)
3. Upload sample PDF files
4. Submit and check if you receive email

### Step 2: Set Up Your Process
1. Create application review checklist
2. Decide who checks emails
3. Set up response templates
4. Create file organization system

### Step 3: Promote Your Service
1. Share application link on social media
2. Add to business cards
3. Include in marketing materials
4. Train staff on new system

---

## Support & Training

### Need Help?
- **Full Documentation:** See WEBSITE_DOCUMENTATION.md
- **Technical Support:** Contact developer
- **Training:** Available upon request

### Want Training?
Ask your developer about:
- Staff training sessions
- Video tutorials
- User manuals
- Admin dashboard demo

---

## Final Notes

**Congratulations on your new loan application system!** 🎊

This system will help you:
- Process applications faster ⚡
- Reduce paperwork 📄
- Improve customer experience 😊
- Track applications better 📊
- Grow your business 📈

**Questions?** Contact us anytime!

---

**Email:** sales@shifttechgs.com
**Phone:** +263 777 229 401
**Website:** yourwebsite.com

---

*End of Quick Start Guide*
