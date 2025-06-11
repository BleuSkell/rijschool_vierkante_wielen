<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Toon het overzicht van alle auto's.
     */
    public function index()
    {
        $cars = Car::all();
        return view('autos.index', compact('cars'));
    }

    /**
     * Toon het formulier om een nieuwe auto toe te voegen.
     */
    public function create()
    {
        return view('autos.create');
    }

    /**
     * Sla een nieuwe auto op in de database.
     */
    public function store(Request $request)
    {
        // Valideer de invoer
        $validated = $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'licensePlate' => 'required|string|max:255|unique:cars,licensePlate',
            'fuelType' => 'required|string|max:255',
            'isActive' => 'required|in:0,1',
            'note' => 'nullable|string|max:255',
        ]);

        // Zet isActive om naar integer (1 of 0)
        $validated['isActive'] = $request->isActive ? 1 : 0;

        // Maak de auto aan in de database
        Car::create($validated);

        // Redirect terug naar het overzicht met een succesmelding
        return redirect()->route('autos')->with('success', 'Auto succesvol toegevoegd!');
    }
}
