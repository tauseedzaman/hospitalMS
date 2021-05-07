<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class operationreport extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        'patient',
        'description',
        'doctor',
        'time',
    ];
}
