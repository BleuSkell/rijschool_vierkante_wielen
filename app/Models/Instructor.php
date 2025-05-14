<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Exam;
use App\Models\DrivingLesson;

class Instructor extends Model
{
    protected $table = 'instructors';

    protected $fillable = [
        'userId',
        'number',
        'note',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function exam()
    {
        return $this->hasMany(Exam::class);
    }

    public function drivingLesson()
    {
        return $this->hasMany(DrivingLesson::class);
    }
}
