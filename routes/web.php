<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoftwareDevController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/software-development', [SoftwareDevController::class, 'index'])->name('software-dev.index');
Route::get('/software-development/{slug}', [SoftwareDevController::class, 'show'])->name('software-dev.show');