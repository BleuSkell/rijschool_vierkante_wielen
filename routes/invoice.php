<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsInstructor;

Route::get('/facturen', [InvoiceController::class, 'index'])
    ->middleware([IsAdmin::class, 'auth'])
    ->name('invoices.index');

Route::get('/facturen/{id}', [InvoiceController::class, 'show'])
    ->middleware([IsAdmin::class, 'auth'])
    ->name('invoices.show');