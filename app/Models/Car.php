<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DrivingLesson;

class Car extends Model
{
    protected $table = 'cars';

    protected $fillable = [
        'brand',
        'model',
        'licensePlate',
        'fuelType',
    ];

    public function drivingLesson()
    {
        return $this->hasMany(DrivingLesson::class);
    }
}
