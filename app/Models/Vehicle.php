<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    public function userAssignedVehicles(): HasMany
    {
        return $this->hasMany(UserAssignedVehicle::class);
    }

    public function carModel(): BelongsTo
    {
        return $this->belongsTo(Car_Model::class, 'model_id');
    }

    public function carStatus(): BelongsTo
    {
        return $this->belongsTo(Car_Status::class, 'car_status_id');
    }
    
}
