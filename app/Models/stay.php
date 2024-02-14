<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stay extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'room_id',
        'start_time',
        'end_time',
        'status',
        'amount',
        'discount',
        'total',
    ];

    public function patient()
    {
        return $this->belongsTo(patient::class);
    }

    public function room()
    {
        return $this->belongsTo(rooms::class);
    }
}
