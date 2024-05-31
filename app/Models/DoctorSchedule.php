<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'doctor_type',
        'avail1',
        'avail2',
        'avail3',
        'avail4',
        'avail5',
        'avail6',
        'avail7',
        'role_id',
    ];

    protected $table = 'doctor_schedule';
}
