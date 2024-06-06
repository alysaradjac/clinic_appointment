<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAppointment extends Model
{
    use HasFactory;
    
    protected $table = 'user_appointment';

    protected $fillable = [
        'fname',
        'lname',
        'date',
        'time',
        'specialist',
        'symptoms',
        'user_id',
    ];

    protected $hidden = [
        'user_id',
    ];
}
