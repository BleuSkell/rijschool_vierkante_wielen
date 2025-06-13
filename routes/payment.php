<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

Route::get('/betalingen', [PaymentController::class, 'index'])->name('payments.index');
Route::get('/betalingen/aanmaken/{id}', [PaymentController::class, 'create'])->name('payments.create');
Route::post('/betalingen/aanmaken', [PaymentController::class, 'store'])->name('payments.store');