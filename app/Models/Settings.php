<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class settings extends Model
{   
    use HasFactory,SoftDeletes;
    protected $table='settings';
    protected $fillable=[
        'key',
        'value',
    ];
}
