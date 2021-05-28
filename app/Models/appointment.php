<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class appointment extends Model
{
    use HasFactory;
    protected $fillable=[
        'patient_id',
        'nurse_id',
        'doctor_id',
        'intime',
        'outtime',
    ];

}
