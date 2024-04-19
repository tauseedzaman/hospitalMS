<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class rooms extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        'department_id',
        'type',
        'status'
];

    public function department()
    {
        return $this->belongsTo(department::class);
    }

    public function beds()
    {
        return $this->hasMany(beds::class);
    }
}
