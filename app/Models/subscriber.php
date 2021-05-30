<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class subscriber extends Model
{
    use HasFactory,softDeletes;
    protected $fillable=[
        'email'
    ];
}
