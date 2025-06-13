<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Enrollment;
use App\Models\Payment;

class Invoice extends Model
{   
    public $timestamps = false;

    public $table = 'invoices';

    protected $fillable = [
        'enrollmentId',
        'invoiceNumber',
        'invoiceDate',
        'amountExcBtw',
        'btw',
        'amountIncBtw',
        'invoiceStatus',
        'note',
        'isActive',
        'dateCreated',
        'dateUpdated',
    ];

    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
