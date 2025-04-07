<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ServicesController;
use App\http\Controllers\MISCController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('services', [ServicesController::class, 'index'])->name('services.index');
Route::get('services/{slug}', [ServicesController::class, 'show'])->name('services.show');
Route::get('terms-of-services', [MISCController::class, 'termsOfServices'])->name('terms-of-service');
Route::get('/privacy-policy', [MISCController::class, 'privacyPolicy'])->name('privacy-policy');