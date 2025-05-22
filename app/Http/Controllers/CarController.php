<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('autos.index', compact('cars'));
    }

    public function create()
    {
        return view('autos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'licensePlate' => 'required|string|max:255',
            'fuelType' => 'required|string|max:255',
            'isActive' => 'required|in:0,1',
            'note' => 'nullable|string|max:255',
        ]);

        $validated['isActive'] = $request->isActive ? 1 : 0;

        Car::create($validated);

        return redirect()->route('autos')->with('success', 'Auto succesvol toegevoegd!');
    }
}
