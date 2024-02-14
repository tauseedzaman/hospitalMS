<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beds extends Model
{
    use HasFactory;
    protected $fillable=[
        'room_id',
        'patient_id',
        'status',
    ];

    public function room()
    {
        return $this->belongsTo(rooms::class);
    }
}
