<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $fillable = [
        'userId',
        'streetName',
        'houseNumber',
        'addition',
        'postalCode',
        'city',
        'mobile',
        'email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
