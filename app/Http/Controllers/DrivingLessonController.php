<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DrivingLesson;
use Illuminate\Support\Facades\Auth;

class DrivingLessonController extends Controller
{
    public function index()
    {
        // Assuming student is related through enrollment
        $studentId = Auth::user()->student->id ?? null;

        if (!$studentId) {
            return redirect()->back()->with('error', 'Geen toegang tot rijlessen.');
        }

        $drivingLessons = DrivingLesson::whereHas('enrollment', function ($query) use ($studentId) {
            $query->where('studentId', $studentId);
        })->where('isActive', true)
          ->orderBy('startDate', 'asc')
          ->paginate(5);

        return view('driving_lessons.index', compact('drivingLessons'));
    }
}

