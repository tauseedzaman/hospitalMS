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
        'block_id',
        'hod_id', //head of department
    ];

    public function rooms()
    {
        return $this->hasMany(rooms::class);
    }

    /**
     * Get the block that owns the department
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function block(): BelongsTo
    {
        return $this->belongsTo(blocks::class);
    }

    /**
     * Get the hod associated with the department
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function hod(): HasOne
    {
        return $this->hasOne(hod::class);
    }

}
