<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class patient extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        'name',
        'email',
        'phone',
        'address',
        'gender',
        'age',
        'bloodgroup',
        'photo_path',
    ];
}
