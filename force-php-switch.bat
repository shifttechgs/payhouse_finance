@echo off
echo ========================================
echo FORCE PHP 8.3.14 Switch for Apache
echo ========================================
echo.

echo This will:
echo 1. Stop all WAMP services
echo 2. Clear Apache cache
echo 3. Restart WAMP with PHP 8.3.14
echo.
echo Press Ctrl+C to cancel, or
pause

echo.
echo [1/4] Stopping WAMP services...
net stop wampapache64 2>nul
net stop wampmysqld64 2>nul
timeout /t 2 >nul

echo [2/4] Clearing Apache cache...
del /F /Q "C:\wamp64_3.3.4\bin\apache\apache2.4.62.1\logs\*" 2>nul
timeout /t 1 >nul

echo [3/4] Starting WAMP services...
net start wampapache64
if %ERRORLEVEL% NEQ 0 (
    echo.
    echo ERROR: Apache failed to start!
    echo.
    echo Please do this manually:
    echo 1. Right-click WAMP tray icon
    echo 2. Select "Restart All Services"
    echo 3. Wait until icon turns GREEN
    echo 4. Then run check-apache-php.bat
    echo.
    pause
    exit /b 1
)

net start wampmysqld64 2>nul
timeout /t 3 >nul

echo [4/4] Verifying PHP version...
echo.
start http://localhost:8000/version.php

echo.
echo ========================================
echo Check the browser window!
echo ========================================
echo.
echo If you STILL see PHP 8.4.1:
echo.
echo You MUST use WAMP Manager:
echo 1. LEFT-CLICK the WAMP icon (in system tray)
echo 2. PHP -^> Version -^> 8.3.14
echo 3. Wait for green icon
echo 4. Refresh version.php page
echo.
echo ========================================
pause
