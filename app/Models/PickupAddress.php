<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DrivingLessonPickupAddress;

class PickupAddres extends Model
{
    protected $table = 'pickup_addresses';

    protected $fillable = [
        'streetName',
        'houseNumber',
        'addition',
        'postalCode',
        'place',
    ];

    public function drivingLessonPickupAddresses()
    {
        return $this->hasMany(DrivingLessonPickupAddress::class);
    }
}
