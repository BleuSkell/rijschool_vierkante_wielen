<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Package;
use App\Models\Exam;
use App\Models\Invoice;
use App\Models\DrivingLesson;

class Enrollment extends Model
{
    protected $table = 'enrollments';

    protected $fillable = [
        'studentId',
        'packageId',
        'startDate',
        'endDate',
        'note',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'studentId');
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function exam()
    {
        return $this->hasOne(Exam::class);
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }

    public function drivingLesson()
    {
        return $this->hasOne(DrivingLesson::class);
    }
}
