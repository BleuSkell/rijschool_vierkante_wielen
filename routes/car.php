<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/autos', [CarController::class, 'index'])->name('autos');