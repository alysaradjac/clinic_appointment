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
        'name', 'password', 'email', 'bdate', 'contact', 'caddress', 'haddress', 'fname', 'mname', 'sname', 'guardian', 'emergency', 'history', 'health_problems', 'surgery', 'bcg', 'opv', 'dpt', 'hepb', 'measles', 'first_dose', 'second_dose', 'booster1', 'booster2', 'others', 'contactF', 'contactM', 'contactS', 'contactG', 'contactP', 'food', 'drug', 'insect', 'pollen', 'seasonal', 'environment', 'allergies_others', 'asthma', 'hyper', 'diabetes', 'heart', 'kidney', 'cancer', 'tuberculosis', 'family_others'
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
