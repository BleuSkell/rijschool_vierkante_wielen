<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InstructorController extends Controller
{
    /**
     * Display a listing of instructors.
     */
    public function index()
    {
            $instructors = DB::select('CALL sp_get_all_instructors()');
            
            // Add debug logging
            \Log::info('Instructors retrieved:', ['count' => count($instructors)]);
            
            return view('instructors.index', compact('instructors'));
    }

    /**
     * Show the form for creating a new instructor.
     */
    public function create()
    {
        try {
            $users = User::all();
            $result = DB::select('CALL sp_get_next_instructor_number()');
            $nextNumber = $result[0]->next_number;

            return view('instructors.create', compact('users', 'nextNumber'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Unable to load instructor creation form: ' . $e->getMessage());
        }
    }



    /**
     * Store a newly created instructor in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'userId' => 'required|exists:users,id',
                'number' => 'required|string|max:50|unique:instructors,number',
                'isActive' => 'boolean',
                'note' => 'nullable|string|max:255',
            ]);

            DB::select('CALL sp_create_instructor(?, ?, ?, ?)', [
                $validated['userId'],
                $validated['number'],
                $validated['isActive'] ?? true,
                $validated['note']
            ]);

            return redirect()->route('instructors.index')->with('success', 'Instructor created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Unable to create instructor: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified instructor.
     */
    public function show($id)
    {
        try {
            $result = DB::select('CALL sp_get_instructor_by_id(?)', [$id]);
            if (empty($result)) {
                abort(404);
            }
            return view('instructors.show', ['instructor' => $result[0]]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Unable to retrieve instructor: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified instructor.
     */
    public function edit($id)
    {
        try {
            $result = DB::select('CALL sp_get_instructor_by_id(?)', [$id]);
            if (empty($result)) {
                abort(404);
            }
            return view('instructors.edit', ['instructor' => $result[0]]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Unable to load instructor edit form: ' . $e->getMessage());
        }
    }

    /**
     * Update the specified instructor in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $validated = $request->validate([
                'userId' => 'sometimes|exists:users,id',    
                'number' => 'sometimes|string|max:50',
                'isActive' => 'sometimes|boolean',
                'note' => 'nullable|string|max:255',
            ]);

            DB::select('CALL sp_update_instructor(?, ?, ?, ?)', [
                $id,
                $validated['number'],
                $validated['isActive'] ?? true,
                $validated['note']
            ]);

            return redirect()->route('instructors.index')->with('success', 'Instructor updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Unable to update instructor: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified instructor from storage.
     */
    public function destroy($id)
    {
        try {
            DB::select('CALL sp_delete_instructor(?)', [$id]);
            return redirect()->route('instructors.index')->with('success', 'Instructor deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Unable to delete instructor: ' . $e->getMessage());
        }
    }
}
