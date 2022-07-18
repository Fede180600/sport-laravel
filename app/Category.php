<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Athletes () {
        return $this->belongsToMany('App\Athlete');
    }
}
