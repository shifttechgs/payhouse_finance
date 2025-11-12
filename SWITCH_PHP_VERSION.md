# How to Switch WAMP to PHP 8.3.14

## ⚠️ IMPORTANT: You Are Still Using PHP 8.4.1 in Apache

The error "could not find driver" means Apache is still using PHP 8.4.1 which doesn't have SQL Server drivers.

## Step-by-Step Instructions:

### Step 1: Find WAMP Icon
Look in your **Windows System Tray** (bottom-right corner of screen, near the clock).
- You'll see a green "W" icon (if WAMP is running) or red/yellow if there are issues

### Step 2: Switch PHP Version for Apache

1. **LEFT-CLICK** (not right-click) the WAMP icon
2. A menu will appear
3. Hover over **"PHP"**
4. Hover over **"Version"**
5. You'll see a list of PHP versions with checkmarks:
   ```
   □ 7.4.33
   □ 8.0.30
   □ 8.1.31
   □ 8.2.26
   □ 8.3.14    ← SELECT THIS ONE
   ✓ 8.4.1     ← Currently selected (has checkmark)
   ```
6. **Click on "8.3.14"**
7. WAMP will restart Apache automatically
8. Wait 10-15 seconds for restart to complete

### Step 3: Verify the Change

Open your browser and go to:
```
http://localhost:8000/version.php
```

You should see:
```
PHP Version: 8.3.14
pdo_sqlsrv: LOADED
sqlsrv: LOADED
```

If you still see **8.4.1** or **NOT LOADED**, the switch didn't work.

### Step 4: Alternative Method (If menu method doesn't work)

1. Stop WAMP completely (right-click WAMP icon → Exit)
2. Navigate to: `C:\wamp64_3.3.4\bin\apache\apache2.4.62\bin\`
3. Edit `httpd.conf` file (search for LoadModule php_module)
4. Change the path from `php8.4.1` to `php8.3.14`
5. Save and restart WAMP

### Step 5: After Switching

Once you see PHP 8.3.14 with SQL Server drivers LOADED:

1. Clear Laravel cache:
   ```
   php artisan config:clear
   ```

2. Test the application:
   - Go to: http://localhost:8000/apply-for-loan
   - Fill out and submit the form
   - It should work now!

## Troubleshooting

### WAMP Won't Switch?
- Make sure all WAMP services are running (icon should be green)
- Try restarting WAMP completely
- Check if multiple PHP versions are installed

### Still Getting "could not find driver"?
This means Apache is still using PHP 8.4.1. Double-check:
1. Visit http://localhost:8000/version.php
2. Confirm it shows 8.3.14
3. Confirm drivers show "LOADED"

### The version.php page shows 8.3.14 but form still fails?
1. Clear browser cache (Ctrl+Shift+Delete)
2. Restart WAMP services
3. Run: `php artisan config:clear`

## Need More Help?

If you're stuck, take a screenshot of:
1. The WAMP PHP menu (showing which version has the checkmark)
2. The output of http://localhost:8000/version.php
3. The error you're getting in the browser console
