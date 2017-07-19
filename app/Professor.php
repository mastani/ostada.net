<?php

namespace ostada;

use Illuminate\Database\Eloquent\Model;

/**
 * ostada\Prof
 *
 * @mixin \Eloquent
 */
class Professor extends Model {
    protected $table = 'professor';

    public function university() {
        return $this->hasOne(University::class, 'id', 'university');
    }
}
