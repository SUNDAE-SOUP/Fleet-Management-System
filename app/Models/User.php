<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'employee_code',
        'email',
        'password',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //disabled due to ERD revision
    /* public function requestHistories(): HasMany
    {
        return $this->hasMany(Request_History::class);
    } */

    /* public function vehicle(): HasOne
    {
        return $this->hasOne(Vehicle::class);
    } */

    public function userAssignedVehicles(): HasMany
    {
        return $this->hasMany(UserAssignedVehicle::Class);
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function buDept(): BelongsTo
    {
        return $this->belongsTo(BU_Dept::class, 'bu_dept_id');
    }    

    
}
