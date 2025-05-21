<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DrivingLesson;

class DrivingLessonController extends Controller
{
    /**
     * Display a list of all available driving lessons.
     */
    public function index()
    {
        // Fetch all active driving lessons
        $lessons = DrivingLesson::with(['enrollment', 'instructor', 'car'])
                                ->where('isActive', true)
                                ->orderBy('startDate', 'desc')
                                ->paginate(5);

        // Scenario: Administrator ziet geen meldingen
        if ($lessons->isEmpty()) {
            session()->flash('message', 'Geen meldingen gevonden');
        }

        // Scenario: Administrator bekijkt beschikbare meldingen
        return view('drivinglessons.index', compact('lessons'));
    }
}