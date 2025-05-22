<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsInstructor;

Route::get('/autos', [CarController::class, 'index'])
    ->name('autos');
Route::get('/autos/create', [CarController::class, 'create'])
    ->middleware([IsAdmin::class, 'auth'])
    ->name('autos.create');
Route::post('/autos', [CarController::class, 'store'])
    ->middleware([IsAdmin::class, 'auth'])
    ->name('autos.store');