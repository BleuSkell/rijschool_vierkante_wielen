<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Enrollment;
use App\Models\Instructor;

class Exam extends Model
{
    protected $table = 'exams';

    protected $fillable = [
        'enrollmentId',
        'instructorId',
        'startDate',
        'startTime',
        'endDate',
        'endTime',
        'location',
        'result',
        'note',
    ];

    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class, 'enrollmentId');
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'instructorId');
    }
}
