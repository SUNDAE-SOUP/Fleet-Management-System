<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car_Model extends Model
{
    use HasFactory;

    public function carBrand(): BelongsTo
    {
        return $this->belongsTo(Car_Brand::class, 'car_brand_id');
    }

    public function vehicles(): HasMany
    {
        return $this->hasMany(Vehicle::class);
    }
}
