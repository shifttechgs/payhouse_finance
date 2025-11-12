@echo off
SET PHP_PATH=C:\wamp64_3.3.4\bin\php\php8.3.14\php.exe

echo ========================================
echo Using PHP 8.3.14 for Migration
echo ========================================
echo.

echo PHP Version:
"%PHP_PATH%" -v
echo.

echo Checking SQL Server drivers...
"%PHP_PATH%" -m | findstr /i sqlsrv
if %ERRORLEVEL% NEQ 0 (
    echo ERROR: SQL Server drivers not loaded in PHP 8.3.14
    pause
    exit /b 1
)
echo.
echo SQL Server drivers loaded successfully!
echo.

echo Clearing config cache...
"%PHP_PATH%" artisan config:clear
echo.

echo Running migrations...
"%PHP_PATH%" artisan migrate --force
echo.

if %ERRORLEVEL% EQU 0 (
    echo ========================================
    echo Migration completed successfully!
    echo ========================================
) else (
    echo ========================================
    echo Migration failed! Check errors above.
    echo ========================================
)
echo.

pause
