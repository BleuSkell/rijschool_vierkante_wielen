<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DrivingLesson;

class Car extends Model
{
    // Koppeling met de juiste tabelnaam
    protected $table = 'cars';

    // Gebruik aangepaste timestamp kolommen
    public $timestamps = true;
    const CREATED_AT = 'dateCreated';
    const UPDATED_AT = 'dateModified';

    // Velden die massaal ingevuld mogen worden
    protected $fillable = [
        'brand',
        'model',
        'licensePlate',
        'fuelType',
        'isActive',
        'note',
    ];

    /**
     * Relatie: Een auto kan meerdere rijlessen hebben.
     */
    public function drivingLesson()
    {
        return $this->hasMany(DrivingLesson::class);
    }
}
