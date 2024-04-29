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
        'name', 'password', 'email', 'bdate', 'contact', 'caddress', 'haddress', 'fname', 'mname', 'guardian', 'emergency', 'history', 'health_problems', 'surgery',
        'id', 'dept', 'course', 'age', 'sex', 'civil_status', 'religion', 'height', 'weight',
        'contactF', 'contactM', 'contactG', 'contactP', 'others',
    // checkbox fields here
        'bcg', 'opv', 'dpt', 'hepb', 'measles', '1st', '2nd', 'booster1', 'booster2',
        'asthma', 'paternal1', 'maternal1', 'hyper', 'paternal2', 'maternal2', 'diabetes', 'paternal3', 'maternal3', 'heart', 'paternal4', 'maternal4', 'kidney', 'paternal5', 'maternal5', 'cancer', 'paternal6', 'maternal6', 'tuberculosis', 'paternal7', 'maternal7', 'others', 'paternal8', 'maternal8',
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
};
