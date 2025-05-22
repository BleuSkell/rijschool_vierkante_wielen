<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/autos', [CarController::class, 'index'])->name('autos');
Route::get('/autos/create', [CarController::class, 'create'])->name('autos.create');
Route::post('/autos', [CarController::class, 'store'])->name('autos.store');