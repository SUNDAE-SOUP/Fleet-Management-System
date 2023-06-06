<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestParticular extends Model
{
    use HasFactory;

    protected $table = 'request_particulars';

    public function requestHistories(): HasMany
    {
        return $this->hasMany(Request_History::class);
    }

    public function modeOfTransaction(): BelongsTo
    {
        return $this->belongsTo(Mode_Of_Payment::class, 'mode_of_transaction_id');
    }

    public function typeOfRequest(): BelongsTo
    {
        return $this->belongsTo(Type_Of_Request::class, 'type_of_request_id');
    }

    public function thirdRequestCategory(): BelongsTo
    {
        return $this->belongsTo(Third_Request_Category::class, '3rd_request_category_id');
    }

    public function fourthRequestCategory(): BelongsTo
    {
        return $this->belongsTo(Fourth_Request_Category::class, '4th_request_category_id');
    }
}
