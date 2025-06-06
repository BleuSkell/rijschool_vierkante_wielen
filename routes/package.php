<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;

// Overzicht van pakketten
Route::get('/rijlespakket', [PackageController::class, 'index'])->name('rijlespakket.index');

// Nieuw pakket aanmaken
Route::get('/rijlespakket/create', [PackageController::class, 'create'])->name('packages.create');

// Pakket opslaan
Route::post('/rijlespakket', [PackageController::class, 'store'])->name('packages.store');

// Pakket tonen (detailpagina)
Route::get('/rijlespakket/{package}', [PackageController::class, 'show'])->name('packages.show');