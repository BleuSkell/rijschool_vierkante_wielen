<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Exam;
use App\Models\DrivingLesson;

class Instructor extends Model
{
    protected $table = 'instructors';
    
    public $timestamps = false;

    protected $fillable = [
        'userId',
        'number',
        'isActive',
        'note',
        'dateCreated',
        'dateModified'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
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
