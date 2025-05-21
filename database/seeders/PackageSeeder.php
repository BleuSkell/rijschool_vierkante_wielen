<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('packages')->insert([
            [
                'type' => 'Standard',
                'numberOfLessons' => 10,
                'pricePerLesson' => 50.00,
                'isActive' => true,
                'note' => 'Standard package',
                'dateCreated' => $now,
                'dateModified' => $now,
            ],
            [
                'type' => 'Premium',
                'numberOfLessons' => 20,
                'pricePerLesson' => 45.00,
                'isActive' => true,
                'note' => 'Premium package',
                'dateCreated' => $now,
                'dateModified' => $now,
            ],
            [
                'type' => 'Basic',
                'numberOfLessons' => 5,
                'pricePerLesson' => 60.00,
                'isActive' => true,
                'note' => 'Basic package',
                'dateCreated' => $now,
                'dateModified' => $now,
            ],
        ]);
    }
}
