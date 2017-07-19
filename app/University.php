<?php

namespace ostada;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $table = 'university';

    public function city() {
        return $this->hasOne(City::class, 'id', 'city');
    }

    public function professor() {
        return $this->belongsTo(Professor::class);
    }
}
