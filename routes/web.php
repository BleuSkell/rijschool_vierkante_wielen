<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/account.php';
require __DIR__.'/car.php';
require __DIR__.'/drivelesson.php';
require __DIR__.'/instructor.php';
require __DIR__.'/invoice.php';
require __DIR__.'/notification.php';
require __DIR__.'/package.php';
require __DIR__.'/payment.php';
require __DIR__.'/student.php';

