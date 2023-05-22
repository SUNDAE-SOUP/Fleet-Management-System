<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mode_Of_Payment extends Model
{
    use HasFactory;

    public function requestHistories(): HasMany
    {
        return $this->hasMany(Request_History::class);
    }
}
