<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\LoanApplicationController;
use App\Http\Controllers\BusinessServicesController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact',[ContactsController::class, 'index'])->name('contact.page');
Route::post('/contact', [ContactsController::class, 'submitForm']);

Route::get('/application',[ApplicationsController::class, 'index'])->name('application.page');
Route::post('/application', [ApplicationsController::class, 'submitApplication']);

// Loan Application Routes
Route::get('/apply-for-loan', [LoanApplicationController::class, 'index'])->name('loan.apply');
Route::post('/apply-for-loan', [LoanApplicationController::class, 'store'])
    ->middleware('throttle:5,60') // Rate limit: 5 requests per minute per IP
    ->name('loan.submit');
// Success route no longer needed - using modal instead
// Route::get('/loan-application/success', [LoanApplicationController::class, 'success'])->name('loan.success');

Route::get('/business-loans',[BusinessServicesController::class, 'getBusinessLoanService'])->name('business-loan.page');
Route::get('/personal-loans',[BusinessServicesController::class, 'getPersonalLoanService'])->name('personal-loan.page');

Route::get('reboot', function() {
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    return '✅ Caches cleared!';
});

Route::get('/clear-logs', function() {
    $logFile = storage_path('logs/laravel.log');
    if (file_exists($logFile)) {
        file_put_contents($logFile, '');
    }
    return '✅ Laravel log cleared!';
});

