<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Doctor extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'doctor';

    protected $fillable = [
        'name',
        'mobile',
        'email',
        'password',
        'specialist',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $guarded = [];

    public function appointments()
    {
        return $this->hasMany('App\\UserAppointment', 'specialist');
    }
    
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

}
