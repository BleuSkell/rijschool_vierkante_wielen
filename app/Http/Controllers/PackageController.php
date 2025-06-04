<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    public function index()
    {
        return view('rijlespakket.index');
    }

    public function show($id)
    {
        $package = Package::findOrFail($id);
        return view('rijlespakket.show', compact('package'));
    }

    public function create()
    {
        return view('rijlespakket.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|string|max:50',
            'numberOfLessons' => 'required|integer|min:1',
            'pricePerLesson' => 'required|numeric|min:0',
            'isActive' => 'required|in:0,1',
            'note' => 'nullable|string|max:255',
        ]);

        $validated['isActive'] = $request->isActive ? 1 : 0;

        Package::create($validated);

        return redirect()->route('rijlespakket.index')->with('success', 'Pakket succesvol toegevoegd!');
    }
}
