<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;


Route::middleware(['auth'])->group(function () {
    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
});