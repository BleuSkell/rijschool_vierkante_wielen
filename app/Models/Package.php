<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Enrollment;

class Package extends Model
{
    protected $table = 'packages';

    protected $fillable = [
        'type',
        'numberOfLessons',
        'pricePerLesson',
        'note',
    ];

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}
