<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BU_Dept extends Model
{
    use HasFactory;
    
    protected $table = "bu_depts";

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
