<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsInstructor;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware([IsAdmin::class, 'auth'])->group(function () {
    // Profile index (list all users — usually admin-only)
    Route::get('/profiles', [ProfileController::class, 'index'])
        ->name('profile.index');

    // Show profile edit form
    Route::get('/profile/edit', [ProfileController::class, 'edit'])
        ->middleware('auth')
        ->name('profile.edit');

    // Update profile
    Route::patch('/profile', [ProfileController::class, 'update'])
        ->middleware('auth')
        ->name('profile.update');

    // Delete profile
    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->middleware('auth')
        ->name('profile.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->middleware('auth')
        ->name('profile.show');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/account.php';
require __DIR__ . '/car.php';
require __DIR__ . '/drivelesson.php';
require __DIR__ . '/instructor.php';
require __DIR__ . '/invoice.php';
require __DIR__ . '/notification.php';
require __DIR__ . '/package.php';
require __DIR__ . '/payment.php';
require __DIR__ . '/student.php';
