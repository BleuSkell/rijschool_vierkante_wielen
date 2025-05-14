<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Notification extends Model
{
    protected $table = 'notifications';

    protected $fillable = [
        'userId',
        'targetGroup',
        'message',
        'notificationType',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
