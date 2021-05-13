<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class general_settings extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        'title',
        'description',
        'logo_path',
        'favicon_path',
        'icon_logo_path',
        'business_phone',
        'business_email',
        'address',
        'working_horse',
    ];
}
