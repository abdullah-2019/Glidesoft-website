<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ServicesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('services', [ServicesController::class, 'index'])->name('services.index');
Route::get('services/{slug}', [ServicesController::class, 'show'])->name('services.show');