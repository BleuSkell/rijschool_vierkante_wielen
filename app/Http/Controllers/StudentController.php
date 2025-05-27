<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Display a listing of the students
    public function index()
    {
        try {
            $students = Student::with('user')->get();
            return view('students.index', compact('students'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Unable to retrieve students: ' . $e->getMessage());
        }
    }

    // Show the form for creating a new student
    public function create()
    {
        $users = User::all();
        
        $existingNumbers = Student::pluck('relationNumber')->toArray();
        
        // Extract numeric parts and find the lowest available slot
        $existingInts = array_map(function ($number) {
            return (int) str_replace('STU-', '', $number);
        }, $existingNumbers);
        
        $lowest = 1;
        while (in_array($lowest, $existingInts)) {
            $lowest++;
        }
        
        $nextNumber = 'STU-' . str_pad($lowest, 3, '0', STR_PAD_LEFT);
        
        return view('students.create', compact('users', 'nextNumber'));
    }

    // Store a newly created student in storage
    public function store(Request $request)
    {
        $validated = $request->validate([
            'userId' => 'required|exists:users,id',
            'relationNumber' => 'required|string|max:50|unique:students,relationNumber|regex:/^STU-\d{3}$/',
            'isActive' => 'boolean',
            'note' => 'nullable|string|max:255',
        ]);

        $validated['dateCreated'] = now();
        $validated['dateModified'] = now();

        Student::create($validated);

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    // Display the specified student
    public function show($id)
    {
        $student = Student::with('user')->findOrFail($id);
        return view('students.show', compact('student'));
    }

    // Show the form for editing the specified student
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $users = User::all();
        return view('students.edit', compact('student', 'users'));
    }

    // Update the specified student in storage
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $validated = $request->validate([
            'userId' => 'sometimes|exists:users,id',
            'relationNumber' => [
                'sometimes',
                'string',
                'max:50',
                'regex:/^STU-\d{3}$/',
                'unique:students,relationNumber,' . $id
            ],
            'isActive' => 'boolean',
            'note' => 'nullable|string|max:255',
        ]);

        $validated['dateModified'] = now();

        $student->update($validated);

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    // Remove the specified student from storage
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
