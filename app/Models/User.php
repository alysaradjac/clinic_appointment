<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'role_id',
        'bdate', 'contact', 'caddress', 'haddress', 'fname', 'mname', 'guardian', 'emergency', 'history', 'health_problems', 'surgery',
        'school_id', 'dept', 'course', 'age', 'sex', 'civil_status', 'religion', 'height', 'weight',
        'contactF', 'contactM', 'contactG', 'contactP',
        // JSON columns
        'immunization', 'vaccine', 'allergies', 'medical_history', 'paternal', 'maternal',
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function role() {
        return $this->belongsTo(Role::class);
    }
}
