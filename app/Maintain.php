<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintain extends Model
{
    public function ac(){
        return $this->belongsTo(Ac::class, 'ac_id');
    }
}
