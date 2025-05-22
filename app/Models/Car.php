<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DrivingLesson;

class Car extends Model
{
    protected $table = 'cars';

    public $timestamps = true;
    const CREATED_AT = 'dateCreated';
    const UPDATED_AT = 'dateModified';

    protected $fillable = [
        'brand',
        'model',
        'licensePlate',
        'fuelType',
        'isActive',
        'note',
    ];

    public function drivingLesson()
    {
        return $this->hasMany(DrivingLesson::class);
    }
}
