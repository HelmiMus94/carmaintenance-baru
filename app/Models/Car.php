<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Car extends Model
{
    protected $fillable = [
        'plate_number',
        'model',
    ];

    public function maintenances(): HasMany
    {
        return $this->hasMany(Maintenance::class);
    }
    public function summons(): HasMany
    {
        return $this->hasMany(Summon::class);
    }
    //
}
