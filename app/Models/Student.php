<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Enrollment;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'userId',
        'relationNumber',
        'note',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function enrollment()
    {
        return $this->hasOne(Enrollment::class, 'studentId');
    }
}
