<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Invoice;

class Payment extends Model
{   
    public $timestamps = false;

    protected $table = 'payments';

    protected $fillable = [
        'invoiceId',
        'date',
        'status',
        'note',
        'isActive',
        'dateCreated',
        'dateModified',
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
