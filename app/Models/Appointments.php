<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'appointment_no',
        'appointment_date',
        'doctor_id',
        'patient_name',
        'patient_phone',
        'total_fee',
        'paid_amount'
    ];
}
