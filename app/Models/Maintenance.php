<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Maintenance extends Model
{
    protected $fillable = [
        'car_id',
        'service_date',
        'workshop',
        'mileage',
        'service_type',
        'cost',
        'notes',
    ];
    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
    //
}
