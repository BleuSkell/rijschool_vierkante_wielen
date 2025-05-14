<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Enrollment;
use App\Models\Instructor;
use App\Models\Car;
use App\Models\DrivingLessonPickupAddress;

class DrivingLesson extends Model
{
    protected $table = 'driving_lessons';

    protected $fillable = [
        'enrollmentId',
        'instructorId',
        'carId',
        'startDate',
        'endDate',
        'endTime',
        'lessonStatus',
        'goal',
        'note',
    ];

    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function drivingLessonPickupAdress()
    {
        return $this->hasMany(DrivingLessonPickupAddress::class);
    }
}
