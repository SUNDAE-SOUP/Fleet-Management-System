<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request_History extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function modeOfPayment(): BelongsTo
    {
        return $this->belongsTo(Mode_Of_Payment::class);
    }

    public function typeOfRequest(): BelongsTo
    {
        return $this->belongsTo(Type_Of_Request::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
}

