<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;

Route::get('/facturen', [InvoiceController::class, 'index'])->name('invoices.index');
Route::get('/facturen/aanmaken', [InvoiceController::class, 'create'])->name('invoices.create');
Route::post('/facturen/opslaan', [InvoiceController::class, 'store'])->name('invoices.store');
Route::get('/facturen/{id}', [InvoiceController::class, 'show'])->name('invoices.show');

Route::get('/student-details/{id}', [InvoiceController::class, 'getStudentDetails']);