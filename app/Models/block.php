<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class block extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable=[
        'blockname',
        'blockcode'
    ];
        /**
         * Get all of the departments for the block
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function departments()
        {
            return $this->hasMany(department::class);
        }
}
