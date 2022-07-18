<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nation extends Model
{
    public function Athletes() {
        return $this->hasMany('App\Athlete');
    }
}
