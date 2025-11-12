@echo off
echo ========================================
echo Checking Apache PHP Configuration
echo ========================================
echo.

echo Opening version check in your browser...
echo.
start http://localhost:8000/version.php
timeout /t 3 >nul

echo.
echo ========================================
echo What do you see in the browser?
echo ========================================
echo.
echo If you see:
echo   PHP Version: 8.3.14
echo   pdo_sqlsrv: LOADED
echo   sqlsrv: LOADED
echo.
echo Then you're good to go! Test the form at:
echo   http://localhost:8000/apply-for-loan
echo.
echo ----------------------------------------
echo.
echo If you see:
echo   PHP Version: 8.4.1
echo   OR drivers say "NOT LOADED"
echo.
echo Then you need to switch WAMP to PHP 8.3.14
echo.
echo How to switch:
echo 1. Find WAMP icon in system tray (near clock)
echo 2. LEFT-CLICK the icon
echo 3. PHP -^> Version -^> 8.3.14
echo 4. Wait for Apache to restart
echo 5. Run this script again to verify
echo.
echo ========================================
echo.

pause
