<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\Hashable;

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


    public function getImmunizationAttribute($value = null, $attributes = [])
    {
        if ($this->immunization['bcg']?? null) {
            $this->immunization = array_merge($this->immunization, ['bcg' => 'yourValue']);
        }
        if ($this->immunization['opv']?? null) {
            $this->immunization = array_merge($this->immunization, ['opv' => 'yourValue']);
        }
        if ($this->immunization['dpt']?? null) {
            $this->immunization = array_merge($this->immunization, ['dpt' => 'yourValue']);
        }
        if ($this->immunization['hepb']?? null) {
            $this->immunization = array_merge($this->immunization, ['hepb' => 'yourValue']);
        }
        if ($this->immunization['measles']?? null) {
            $this->immunization = array_merge($this->immunization, ['measles' => 'yourValue']);
        }
        return $this->immunization;
    }

    public function getVaccineAttribute($value = null, $attributes = [])
    {
        if ($this->vaccine['first_dose']?? null) {
            $this->vaccine = array_merge($this->vaccine, ['first_dose' => 'yourValue']);
        }
        if ($this->vaccine['second_dose']?? null) {
            $this->vaccine = array_merge($this->vaccine, ['second_dose' => 'yourValue']);
        }
        if ($this->vaccine['booster1']?? null) {
            $this->vaccine = array_merge($this->vaccine, ['booster1' => 'yourValue']);
        }
        if ($this->vaccine['booster2']?? null) {
            $this->vaccine = array_merge($this->vaccine, ['booster2' => 'yourValue']);
        }
        if ($this->vaccine['others']?? null) {
            $this->vaccine = array_merge($this->vaccine, ['others' => 'yourValue']);
        }
        return $this->vaccine;
    }

    public function getAllergiesAttribute($value = null, $attributes = [])
{
    if ($this->allergies['food']?? null) {
        $this->allergies = array_merge($this->allergies, ['food' => 'yourValue']);
    }
    if ($this->allergies['drug']?? null) {
        $this->allergies = array_merge($this->allergies, ['drug' => 'yourValue']);
    }
    if ($this->allergies['insect']?? null) {
        $this->allergies = array_merge($this->allergies, ['insect' => 'yourValue']);
    }
    if ($this->allergies['environment']?? null) {
        $this->allergies = array_merge($this->allergies, ['environment' => 'yourValue']);
    }
    if ($this->allergies['allergies_others']?? null) {
        $this->allergies = array_merge($this->allergies, ['allergies_others' => 'yourValue']);
    }
    return $this->allergies;
}

public function getMedicalHistoryAttribute($value = null, $attributes = [])
{
    if ($this->medical_history['asthma']?? null) {
        $this->medical_history = array_merge($this->medical_history, ['asthma' => 'yourValue']);
    }
    if ($this->medical_history['hyper']?? null) {
        $this->medical_history = array_merge($this->medical_history, ['hyper' => 'yourValue']);
    }
    if ($this->medical_history['diabetes']?? null) {
        $this->medical_history = array_merge($this->medical_history, ['diabetes' => 'yourValue']);
    }
    if ($this->medical_history['heart']?? null) {
        $this->medical_history = array_merge($this->medical_history, ['heart' => 'yourValue']);
    }
    if ($this->medical_history['kidney']?? null) {
        $this->medical_history = array_merge($this->medical_history, ['kidney' => 'yourValue']);
    }
    if ($this->medical_history['tuberculosis']?? null) {
        $this->medical_history = array_merge($this->medical_history, ['tuberculosis' => 'yourValue']);
    }
    if ($this->medical_history['medical_others']?? null) {
        $this->medical_history = array_merge($this->medical_history, ['medical_others' => 'yourValue']);
    }
    return $this->medical_history;
}

public function getPaternalAttribute($value = null, $attributes = [])
{
    if ($this->paternal['paternal1']?? null) {
        $this->paternal = array_merge($this->paternal, ['paternal1' => 'yourValue']);
    }
    if ($this->paternal['paternal2']?? null) {
        $this->paternal = array_merge($this->paternal, ['paternal2' => 'yourValue']);
    }
    if ($this->paternal['paternal3']?? null) {
        $this->paternal = array_merge($this->paternal, ['paternal3' => 'yourValue']);
    }
    if ($this->paternal['paternal4']?? null) {
        $this->paternal = array_merge($this->paternal, ['paternal4' => 'yourValue']);
    }
    if ($this->paternal['paternal5']?? null) {
        $this->paternal = array_merge($this->paternal, ['paternal5' => 'yourValue']);
    }
    if ($this->paternal['paternal6']?? null) {
        $this->paternal = array_merge($this->paternal, ['paternal6' => 'yourValue']);
    }
    if ($this->paternal['paternal7']?? null) {
        $this->paternal = array_merge($this->paternal, ['paternal7' => 'yourValue']);
    }
    if ($this->paternal['paternal8']?? null) {
        $this->paternal = array_merge($this->paternal, ['paternal8' => 'yourValue']);
    }
    return $this->paternal;
}

public function getMaternalAttribute($value = null, $attributes = [])
{
    if ($this->maternal['maternal1']?? null) {
        $this->maternal = array_merge($this->maternal, ['maternal1' => 'yourValue']);
    }
    if ($this->maternal['maternal2']?? null) {
        $this->maternal = array_merge($this->maternal, ['maternal2' => 'yourValue']);
    }
    if ($this->maternal['maternal3']?? null) {
        $this->maternal = array_merge($this->maternal, ['maternal3' => 'yourValue']);
    }
    if ($this->maternal['maternal4']?? null) {
        $this->maternal = array_merge($this->maternal, ['maternal4' => 'yourValue']);
    }
    if ($this->maternal['maternal5']?? null) {
        $this->maternal = array_merge($this->maternal, ['maternal5' => 'yourValue']);
    }
    if ($this->maternal['maternal6']?? null) {
        $this->maternal = array_merge($this->maternal, ['maternal6' => 'yourValue']);
    }
    if ($this->maternal['maternal7']?? null) {
        $this->maternal = array_merge($this->maternal, ['maternal7' => 'yourValue']);
    }
    if ($this->maternal['maternal8']?? null) {
        $this->maternal = array_merge($this->maternal, ['maternal8' => 'yourValue']);
    }
    return $this->maternal;
}

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function getAuthPasswordAttribute($value = null, $attributes = [])
    {
        return null;
    }
}
