<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    public function ac(){
        return $this->hasMany(Ac::class, 'q_id');
    }
}
