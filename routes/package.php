<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Packagecontroller;

Route::get('/rijlespakket', [Packagecontroller::class, 'index'])->name('rijlespakket.index');