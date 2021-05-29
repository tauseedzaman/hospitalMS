<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requestedAppointment extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'email',
        'phone',
        'doctor',
        'message',
        'stime',
    ];
}
