<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructorController;

Route::resource('instructors', InstructorController::class);
