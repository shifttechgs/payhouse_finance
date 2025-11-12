@echo off
echo ========================================
echo Verifying PHP Version and Drivers
echo ========================================
echo.

echo Current PHP Version:
php -v
echo.

echo Checking for SQL Server drivers...
php -m | findstr /i sqlsrv
if %ERRORLEVEL% NEQ 0 (
    echo ERROR: SQL Server drivers not loaded!
    echo Please make sure you switched WAMP to PHP 8.3.14
    pause
    exit /b 1
)
echo SQL Server drivers found!
echo.

echo ========================================
echo Running Database Migration
echo ========================================
echo.

php artisan config:clear
php artisan migrate --force

echo.
echo ========================================
echo Setup Complete!
echo ========================================
pause
