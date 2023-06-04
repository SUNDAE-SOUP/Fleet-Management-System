<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_Of_Request extends Model
{
    use HasFactory;

    protected $table = 'type_of_requests';

    public function requestParticulars(): HasMany
    {
        return $this->hasMany(RequestParticular::class);
    }

    public function modeOfTransaction(): BelongsTo
    {
        return $this->belongsTo(Mode_Of_Transaction::class, 'mode_of_transaction_id');
    }

    public function thirdRequestCategories(): HasMany
    {
        return $this->hasMany(Third_Request_Category::class);
    }

}
