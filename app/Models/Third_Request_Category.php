<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Third_Request_Category extends Model
{
    use HasFactory;

    protected $table = '3rd_request_categories';

    public function requestParticulars(): HasMany
    {
        return $this->hasMany(RequestParticular::class);
    }

    public function typeOfRequest(): BelongsTo
    {
        return $this->belongsTo(Type_Of_Request::class, 'type_of_request_id');
    }

    public function fourthRequestCategories(): HasMany
    {
        return $this->hasMany(Fourth_Request_Category::class);
    }
}
