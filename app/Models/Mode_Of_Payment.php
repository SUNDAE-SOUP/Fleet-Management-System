<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mode_Of_Payment extends Model
{
    use HasFactory;

    protected $table = "mode_of_transactions";

    public function requestParticulars(): HasMany
    {
        return $this->hasMany(RequestParticular::class);
    }

    public function typeOfRequests(): HasMany
    {
        return $this->hasMany(Type_Of_Request::class);
    }
}
