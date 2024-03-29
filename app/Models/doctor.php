<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class doctor extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'employee_id',
    ];

    /**
     * Get the employ that owns the doctor
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employ(): BelongsTo
    {
        return $this->belongsTo(employee::class,'employee_id','id');
    }
}
