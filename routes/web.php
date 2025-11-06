<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact',[ContactsController::class, 'index'])->name('contact.page');;
Route::post('/contact', [ContactsController::class, 'submitForm']);


Route::get('reboot',function(){
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('key:generate');
    dd('system rebooted!');
});
