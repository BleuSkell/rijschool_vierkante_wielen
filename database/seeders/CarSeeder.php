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
                'licensePlate' => '30-JL-JR',
                'fuelType' => 'Petrol',
                'isActive' => true,
                'note' => 'Company car',
                'dateCreated' => now(),
                'dateModified' => now(),
            ],
            [
                'brand' => 'Honda',
                'model' => 'Civic',
                'licensePlate' => '59-HJ-LR',
                'fuelType' => 'Diesel',
                'isActive' => true,
                'note' => 'Company car',
                'dateCreated' => now(),
                'dateModified' => now(),
            ],
            [
                'brand' => 'Ford',
                'model' => 'Focus',
                'licensePlate' => '63-TH-BR',
                'fuelType' => 'Electric',
                'isActive' => true,
                'note' => 'Company car',
                'dateCreated' => now(),
                'dateModified' => now(),
            ],
            [
                'brand' => 'BMW',
                'model' => '3 Series',
                'licensePlate' => '58-NF-KS',
                'fuelType' => 'Hybrid',
                'isActive' => true,
                'note' => 'Company car',
                'dateCreated' => now(),
                'dateModified' => now(),
            ],
            [
                'brand' => 'Audi',
                'model' => 'A4',
                'licensePlate' => 'TN-FR-90',
                'fuelType' => 'Petrol',
                'isActive' => true,
                'note' => 'Company car',
                'dateCreated' => now(),
                'dateModified' => now(),
            ],
            [
                'brand' => 'Mercedes',
                'model' => 'C-Class',
                'licensePlate' => 'PR-DR-80',
                'fuelType' => 'Diesel',
                'isActive' => true,
                'note' => 'Company car',
                'dateCreated' => now(),
                'dateModified' => now(),
            ],
            [
                'brand' => 'Volkswagen',
                'model' => 'Golf',
                'licensePlate' => '43-TJ-LK',
                'fuelType' => 'Electric',
                'isActive' => true,
                'note' => 'Company car',
                'dateCreated' => now(),
                'dateModified' => now(),
            ],
            [
                'brand' => 'Tesla',
                'model' => 'Model 3',
                'licensePlate' => '56-TM-EO',
                'fuelType' => 'Electric',
                'isActive' => true,
                'note' => 'Company car',
                'dateCreated' => now(),
                'dateModified' => now(),
            ],
            [
                'brand' => 'Hyundai',
                'model' => 'Elantra',
                'licensePlate' => '24-HE-KH',
                'fuelType' => 'Petrol',
                'isActive' => true,
                'note' => 'Company car',
                'dateCreated' => now(),
                'dateModified' => now(),
            ],
            [
                'brand' => 'Kia',
                'model' => 'Optima',
                'licensePlate' => '36-KO-OA',
                'fuelType' => 'Diesel',
                'isActive' => true,
                'note' => 'Company car',
                'dateCreated' => now(),
                'dateModified' => now(),
            ],
        ]);
    }
}
