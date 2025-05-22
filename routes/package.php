<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;

Route::get('/rijlespakket', [PackageController::class, 'index'])->name('rijlespakket.index');