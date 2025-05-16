<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

Route::get('/autos', function () {
    return view('autos.index');
})->name('autos');