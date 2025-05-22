<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrivingLessonController;



Route::middleware(['auth', ])->group(function () {
    Route::get('/rijlessen', [DrivingLessonController::class, 'index'])->name('drivinglessons.index');
});