<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'photo_path',
        'employee_id', //head of department
    ];

    public function rooms()
    {
        return $this->hasMany(rooms::class);
    }

}
