<?php

use Illuminate\Support\Facades\Route;
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
Route::post('/apply-for-loan', [LoanApplicationController::class, 'store'])->name('loan.submit');
// Success route no longer needed - using modal instead
// Route::get('/loan-application/success', [LoanApplicationController::class, 'success'])->name('loan.success');

Route::get('/business-loans',[BusinessServicesController::class, 'getBusinessLoanService'])->name('business-loan.page');
Route::get('/personal-loans',[BusinessServicesController::class, 'getPersonalLoanService'])->name('personal-loan.page');

Route::get('reboot',function(){
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('key:generate');
    dd('system rebooted!');
});
