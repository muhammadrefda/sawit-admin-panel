<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'first_name',
        'last_name',
        'email',
        'password',
        'phone',
        'candidate_status',
        'bank_name',
        'bank_branch',
        'bank_account_name',
        'bank_account_number',
        'ktp',
        'npwp',
        'foto_close_up',
        'is_admin',
        'is_farmer',
        'is_driver',
        'is_pic_fabric',
        'girik',
        'farmer_address',
        'farmer_garden_address',
        'sim_b1',
        'stnk',
        'driver_address',
        'pic_fabric_address',
        'siup',
        'npwp_fabric',
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
        'password' => 'hashed',
    ];
}
