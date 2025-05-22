<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsInstructor;

Route::get('/betalingen', [PaymentController::class, 'index'])
    ->middleware([IsAdmin::class, 'auth'])
    ->name('payments.index');