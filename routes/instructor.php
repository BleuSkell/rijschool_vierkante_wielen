<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructorController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsInstructor;

Route::resource('instructors', InstructorController::class)
    ->middleware([IsAdmin::class, IsInstructor::class, 'auth']);
