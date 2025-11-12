# SQL Server Setup Instructions for PayHouse Finance

## What Has Been Configured

✅ **Database Configuration Updated**
- `.env` file configured with SQL Server connection details
- `config/database.php` updated to support encryption settings
- Controller fixed (removed `dd()` statements)

## Required: Enable SQL Server Drivers in PHP

Since you're using WAMP, you need to enable SQL Server PDO drivers in your `php.ini` file.

### Step 1: Locate php.ini File

Your WAMP PHP versions are in: `C:\wamp64_3.3.4\bin\php\`

Based on your composer.json (requires PHP ^8.2), you should use: `C:\wamp64_3.3.4\bin\php\php8.2.26\php.ini`

### Step 2: Enable SQL Server Extensions

1. Open `php.ini` in a text editor (as Administrator)
2. Find these lines and **remove the semicolon** (;) to uncomment them:

```ini
;extension=pdo_sqlsrv
;extension=sqlsrv
```

Change to:

```ini
extension=pdo_sqlsrv
extension=sqlsrv
```

3. If those lines don't exist, add them in the extensions section

### Step 3: Download Microsoft SQL Server Drivers for PHP

If the drivers are not already in your PHP ext folder, download them:

1. Go to: https://learn.microsoft.com/en-us/sql/connect/php/download-drivers-php-sql-server
2. Download the appropriate version for **PHP 8.2** on **Windows**
3. Extract the `.dll` files to: `C:\wamp64_3.3.4\bin\php\php8.2.26\ext\`
   - You need: `php_pdo_sqlsrv_82_ts_x64.dll` and `php_sqlsrv_82_ts_x64.dll`
   - Rename them to: `php_pdo_sqlsrv.dll` and `php_sqlsrv.dll`

### Step 4: Download Microsoft ODBC Driver

SQL Server PHP drivers require Microsoft ODBC Driver:

1. Download from: https://learn.microsoft.com/en-us/sql/connect/odbc/download-odbc-driver-for-sql-server
2. Install **ODBC Driver 18 for SQL Server** on your Windows machine

### Step 5: Restart WAMP

After making these changes:
1. Stop all WAMP services
2. Restart WAMP
3. Verify PHP loaded the extensions:
   - Create a file: `phpinfo.php` with content: `<?php phpinfo(); ?>`
   - Access it in browser: `http://localhost/phpinfo.php`
   - Search for "sqlsrv" - you should see the SQL Server section

## Step 6: Run Database Setup

Once SQL Server drivers are enabled, run the setup batch file:

```batch
setup-database.bat
```

This will:
1. Clear Laravel config cache
2. Test SQL Server connection
3. Run database migrations to create the `loan_applications` table

## Connection Details (Already Configured)

```
Server: 95.217.134.215:1433
Database: payhouse_dev
User: sa
Password: Briannacharity@2025
Encryption: Disabled
```

## Troubleshooting

### Error: "could not find driver"
- SQL Server PDO drivers are not enabled in php.ini
- Follow steps 1-5 above

### Error: "SQLSTATE[08001] Login timeout expired"
- Check firewall settings
- Ensure SQL Server allows remote connections
- Verify server IP and port are correct

### Error: "SQLSTATE[28000] Login failed for user 'sa'"
- Verify password in .env file
- Check SQL Server authentication mode (should allow SQL Server authentication, not just Windows auth)

### Error: "SSL Provider: The certificate chain was issued by an authority that is not trusted"
- Already handled with `DB_TRUST_SERVER_CERTIFICATE=true` in .env

## Testing the Application

After successful database setup:

1. Navigate to: http://localhost:8000/apply-for-loan
2. Fill out the loan application form (all 4 steps)
3. Submit the application
4. You should be redirected to the success page
5. Check:
   - Database: The application should be saved in `loan_applications` table
   - Logs: Check `storage/logs/laravel.log` for the submission log
   - Email: Admin should receive an email with PDF attachment

## PDF Generation

The application automatically generates a PDF for each submission using DomPDF (already installed in composer.json).

PDFs are stored in: `storage/app/public/loan-applications/`

## Admin Email

Admin notifications are sent to: `sales@shifttechgs.com` (configured in controller)

You can change this by setting `ADMIN_EMAIL` in your `.env` file:

```
ADMIN_EMAIL=youremail@example.com
```

## Next Steps

1. Enable SQL Server drivers (Steps 1-5)
2. Run `setup-database.bat`
3. Test the loan application form
4. Monitor `storage/logs/laravel.log` for any errors

## Need Help?

If you encounter issues, check the Laravel log file:
`storage/logs/laravel.log`

This will show detailed error messages including SQL Server connection errors.
