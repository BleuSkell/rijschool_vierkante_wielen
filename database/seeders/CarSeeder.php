<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cars')->insert([
            [
                'brand' => 'Toyota',
                'model' => 'Corolla',
                'licensePlate' => 'ABC-123',
                'fuelType' => 'Petrol',
                'isActive' => true,
                'note' => 'Company car',
                'dateCreated' => now(),
                'dateModified' => now(),
            ],
            [
                'brand' => 'Honda',
                'model' => 'Civic',
                'licensePlate' => 'DEF-456',
                'fuelType' => 'Diesel',
                'isActive' => true,
                'note' => 'Company car',
                'dateCreated' => now(),
                'dateModified' => now(),
            ],
            [
                'brand' => 'Ford',
                'model' => 'Focus',
                'licensePlate' => 'GHI-789',
                'fuelType' => 'Electric',
                'isActive' => true,
                'note' => 'Company car',
                'dateCreated' => now(),
                'dateModified' => now(),
            ],
            [
                'brand' => 'BMW',
                'model' => '3 Series',
                'licensePlate' => 'JKL-012',
                'fuelType' => 'Hybrid',
                'isActive' => true,
                'note' => 'Company car',
                'dateCreated' => now(),
                'dateModified' => now(),
            ],
            [
                'brand' => 'Audi',
                'model' => 'A4',
                'licensePlate' => 'MNO-345',
                'fuelType' => 'Petrol',
                'isActive' => true,
                'note' => 'Company car',
                'dateCreated' => now(),
                'dateModified' => now(),
            ],
        ]);
    }
}
