<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsInstructor;

Route::get('/autos', [CarController::class, 'index'])
    ->middleware(['auth'])
    ->name('autos');
Route::get('/autos/create', [CarController::class, 'create'])
    ->middleware([IsInstructor::class, 'auth'])
    ->name('autos.create');
Route::post('/autos', [CarController::class, 'store'])
    ->middleware([IsInstructor::class, 'auth'])
    ->name('autos.store');