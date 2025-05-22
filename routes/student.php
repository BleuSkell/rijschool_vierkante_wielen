<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsInstructor;

Route::resource('students', StudentController::class)
    ->middleware([IsAdmin::class, 'auth']);
