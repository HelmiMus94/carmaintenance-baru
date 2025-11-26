<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongTo;
class Summon extends Model
{
    protected $fillable = [
        'car_id',
        'summmon_date',
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
