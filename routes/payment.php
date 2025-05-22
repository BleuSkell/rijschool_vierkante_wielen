<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

Route::get('/betalingen', [PaymentController::class, 'index'])->name('payments.index');