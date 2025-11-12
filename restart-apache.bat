@echo off
echo ========================================
echo Restarting Apache with PHP 8.3.14
echo ========================================
echo.

echo Stopping Apache...
net stop wampapache64 >nul 2>&1
timeout /t 2 >nul

echo Starting Apache...
net start wampapache64 >nul 2>&1
if %ERRORLEVEL% EQU 0 (
    echo Apache restarted successfully!
) else (
    echo.
    echo Apache service restart failed!
    echo.
    echo Please restart Apache manually:
    echo 1. Right-click WAMP icon in system tray
    echo 2. Click "Restart All Services"
    echo    OR
    echo 3. Apache -^> Service administration -^> Restart Service
)

echo.
echo Waiting 3 seconds...
timeout /t 3 >nul

echo.
echo Opening version check...
start http://localhost:8000/version.php

echo.
echo ========================================
echo Check the browser window!
echo ========================================
echo.
echo You should now see:
echo   PHP Version: 8.3.14
echo   pdo_sqlsrv: LOADED
echo   sqlsrv: LOADED
echo.
echo If drivers are LOADED, test the form at:
echo   http://localhost:8000/apply-for-loan
echo.
echo ========================================
echo.

pause
