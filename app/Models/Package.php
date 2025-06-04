<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Enrollment;

class Package extends Model
{
    protected $table = 'packages';

    // Gebruik aangepaste timestamp kolommen
    public $timestamps = true;
    const CREATED_AT = 'dateCreated';
    const UPDATED_AT = 'dateModified';

    protected $fillable = [
        'type',
        'numberOfLessons',
        'pricePerLesson',
        'isActive',
        'note',
        'dateCreated',
        'dateModified',
    ];

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}
