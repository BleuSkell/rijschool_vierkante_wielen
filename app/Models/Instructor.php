<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Instructor extends Model
{
    use HasFactory;

    protected $table = 'instructors';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'userId',
        'number',
        'isActive',
        'note',
        'dateCreated',
        'dateModified',
    ];

    protected $casts = [
        'isActive' => 'boolean',
        'dateCreated' => 'datetime',
        'dateModified' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }
}
