<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car_Status extends Model
{
    use HasFactory;
    
    protected $table = 'car_statuses';

    public function vehicles(): HasMany
    {
        return $this->hasMany(Vehicle::class);
    }
}
