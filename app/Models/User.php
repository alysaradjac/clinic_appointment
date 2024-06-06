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

    protected $fillable = [
        'name', 'password', 'email','bdate', 'contact', 'caddress', 'haddress', 'fname', 'mname', 'guardian', 'emergency', 'history', 'health_problems', 'surgery',
        'school_id', 'dept', 'course', 'age', 'sex', 'civil_status', 'religion', 'height', 'weight',
        'contactF', 'contactM', 'contactG', 'contactP',
        // JSON columns
        'immunization', 'vaccine', 'allergies', 'medical_history', 'paternal', 'maternal',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'immunization' => 'array',
        'vaccine' => 'array',
        'allergies' => 'array',
        'medical_history' => 'array',
        'paternal' => 'array',
        'maternal' => 'array',
    ];
    
}
