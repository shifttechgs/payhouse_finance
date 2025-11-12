@echo off
echo ========================================
echo PayHouse Finance - Database Setup
echo ========================================
echo.

REM Step 1: Clear config cache
echo [1/3] Clearing configuration cache...
php artisan config:clear
if %ERRORLEVEL% NEQ 0 (
    echo ERROR: Failed to clear config cache
    pause
    exit /b 1
)
echo Success!
echo.

REM Step 2: Test database connection
echo [2/3] Testing SQL Server connection...
php artisan migrate:status
if %ERRORLEVEL% NEQ 0 (
    echo.
    echo ERROR: Cannot connect to SQL Server database!
    echo.
    echo Please check:
    echo 1. SQL Server drivers are enabled in php.ini
    echo    - pdo_sqlsrv
    echo    - sqlsrv
    echo.
    echo 2. Connection details in .env file:
    echo    - DB_HOST=95.217.134.215
    echo    - DB_PORT=1433
    echo    - DB_DATABASE=payhouse_dev
    echo    - DB_USERNAME=sa
    echo.
    echo 3. SQL Server is accessible from this machine
    echo.
    pause
    exit /b 1
)
echo Database connection successful!
echo.

REM Step 3: Run migrations
echo [3/3] Running database migrations...
php artisan migrate --force
if %ERRORLEVEL% NEQ 0 (
    echo ERROR: Migration failed!
    pause
    exit /b 1
)
echo Migrations completed successfully!
echo.

echo ========================================
echo Database setup completed!
echo You can now submit loan applications.
echo ========================================
echo.

pause
