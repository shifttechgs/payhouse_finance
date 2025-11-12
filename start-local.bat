@echo off
echo Starting PayHouse Finance locally...
echo.

REM Clear all Laravel caches
echo [1/5] Clearing configuration cache...
php artisan config:clear

echo [2/5] Clearing route cache...
php artisan route:clear

echo [3/5] Clearing view cache...
php artisan view:clear

echo [4/5] Clearing application cache...
php artisan cache:clear

echo [5/5] Optimizing configuration...
php artisan config:cache

echo.
echo ========================================
echo Server starting at http://localhost:8000
echo Press Ctrl+C to stop the server
echo ========================================
echo.

REM Start the development server
php artisan serve

pause
