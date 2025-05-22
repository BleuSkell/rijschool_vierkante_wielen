<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsInstructor;

Route::get('/rijlespakket', [PackageController::class, 'index'])
    ->name('rijlespakket.index');