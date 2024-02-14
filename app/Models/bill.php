<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    use HasFactory;
    protected $fillable=[
        'patients_id',
        'status',
    ];

    public function patient(){
        return $this->belongsTo(patient::class);
    }
}
