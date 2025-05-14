<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of instructors.
     */
    public function index()
    {
        $instructors = Instructor::all();
        return view('instructors.index', compact('instructors'));
    }

    /**
     * Show the form for creating a new instructor.
     */
    public function create()
    {
        return view('instructors.create');
    }

    /**
     * Store a newly created instructor in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'userId' => 'required|exists:users,id',
            'number' => 'required|string|max:50',
            'isActive' => 'boolean',
            'note' => 'nullable|string|max:255',
            'dateCreated' => 'nullable|date',
            'dateModified' => 'nullable|date',
        ]);

        Instructor::create($validated);

        return redirect()->route('instructors.index')->with('success', 'Instructor created successfully.');
    }

    /**
     * Display the specified instructor.
     */
    public function show($id)
    {
        $instructor = Instructor::findOrFail($id);
        return view('instructors.show', compact('instructor'));
    }

    /**
     * Show the form for editing the specified instructor.
     */
    public function edit($id)
    {
        $instructor = Instructor::findOrFail($id);
        return view('instructors.edit', compact('instructor'));
    }

    /**
     * Update the specified instructor in storage.
     */
    public function update(Request $request, $id)
    {
        $instructor = Instructor::findOrFail($id);

        $validated = $request->validate([
            'userId' => 'sometimes|exists:users,id',
            'number' => 'sometimes|string|max:50',
            'isActive' => 'sometimes|boolean',
            'note' => 'nullable|string|max:255',
            'dateCreated' => 'nullable|date',
            'dateModified' => 'nullable|date',
        ]);

        $instructor->update($validated);

        return redirect()->route('instructors.index')->with('success', 'Instructor updated successfully.');
    }

    /**
     * Remove the specified instructor from storage.
     */
    public function destroy($id)
    {
        $instructor = Instructor::findOrFail($id);
        $instructor->delete();

        return redirect()->route('instructors.index')->with('success', 'Instructor deleted successfully.');
    }
}
