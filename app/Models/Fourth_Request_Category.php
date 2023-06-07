<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fourth_Request_Category extends Model
{
    use HasFactory;
    
    protected $table = '4th_request_categories';

    public function requestParticulars(): HasMany
    {
        return $this->hasMany(RequestParticular::class);
    }

    public function thirdRequestCategory(): BelongsTo
    {
        return $this->belongsTo(Third_Request_Category::class, '3rd_request_category_id');
    }

}
