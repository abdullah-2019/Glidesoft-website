<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ServicesController;
use App\http\Controllers\MISCController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('services/software-dev', [ServicesController::class, 'softwareDevService'])->name('services.software-dev');
Route::get('services/mobile-app-dev-service', [ServicesController::class, 'mobileAppDevService'])->name('services.mobile-app-dev-service');
Route::get('services/web-dev-service', [ServicesController::class, 'webDevService'])->name('service.web-dev');
Route::get('services/web-hosting', [ServicesController::class, 'webHostingService'])->name('service.web-hosting');
Route::get('/services/graphic-design', [ServicesController::class, 'graphicDesign'])->name('service.graphic-design');
Route::get('services/{slug}', [ServicesController::class, 'show'])->name('services.show');
Route::get('terms-of-services', [MISCController::class, 'termsOfServices'])->name('terms-of-service');
Route::get('/privacy-policy', [MISCController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/cookie-policy', [MISCController::class, 'cookiePolicy'])->name('cookie-policy');