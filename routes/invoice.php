<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;

Route::get('/facturen', [InvoiceController::class, 'index'])->name('invoices.index');
Route::get('/facturen/{id}', [InvoiceController::class, 'show'])->name('invoices.show');