<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignmentStatus extends Model
{
    use HasFactory;

    protected $table = 'assignment_statuses';

    public function userAssignedVehicles(): HasMany
    {
        return $this->hasMany(userAssignedVehicle::class);
    }
}
