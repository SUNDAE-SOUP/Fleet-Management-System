<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request_History extends Model
{
    use HasFactory;

    public function userAssignedVehicle(): BelongsTo
    {
        return $this->belongsTo(UserAssignedVehicle::class, 'user_assigned_vehicle_id');
    }

    public function requestParticular(): BelongsTo
    {
        return $this->belongsTo(RequestParticular::class, 'request_particular_id');
    }

    //disabled due to ERD revision
    /* public function typeOfRequest(): BelongsTo
    {
        return $this->belongsTo(Type_Of_Request::class, '');
    } */

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
}

