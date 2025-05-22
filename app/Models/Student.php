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
        'isActive',
        'note',
        'dateCreated',
        'dateModified',
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function enrollment()
    {
        return $this->hasOne(Enrollment::class);
    }
}
