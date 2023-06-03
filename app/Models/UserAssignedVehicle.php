<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAssignedVehicle extends Model
{
    use HasFactory;

    public function requestHistories(): HasMany
    {
        return $this->hasMany(Request_History::class);
    }

    public function assignmentStatus(): BelongsTo
    {
        return $this->belongsTo(AssignmentStatus::class, 'assignment_status_id');
    }

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
