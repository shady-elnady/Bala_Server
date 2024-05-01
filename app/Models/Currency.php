<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Currency extends Model
{
    use HasFactory;

    /**
     * hasMany
     */
    public function shipment(): HasMany
    {
        return $this->hasMany(Shipment::class);
    }

    public function costs(): HasMany
    {
        return $this->hasMany(Cost::class);
    }
}
