<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Summon extends Model
{
    protected $fillable = [
        'car_id',
        'summon_date',
        'location',
        'amount',
        'offence_type',
        'payment_status',
        'paid_by',
        'paid_date',


    ];

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
    //
}
