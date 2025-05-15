<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DrivingLesson;
use App\Models\PickupAddress;

class DrivingLessonPickupAddress extends Model
{
    protected $table = 'driving_lesson_pickup_addresses';

    protected $fillable = [
        'drivingLessonId',
        'pickupAddressId',
    ];

    public function drivingLesson()
    {
        return $this->belongsTo(DrivingLesson::class);
    }

    public function pickupAddress()
    {
        return $this->belongsTo(PickupAddress::class);
    }
}
