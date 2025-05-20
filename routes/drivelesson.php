<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\drivelessonController;

Route::middleware(['auth'])->group(function () {
    Route::get('/driving-lessons', [DrivingLessonController::class, 'index'])->name('driving-lessons.index');
});