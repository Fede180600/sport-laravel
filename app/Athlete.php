<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    public function Nation() {
        return $this->belongsTo('App\Nation');
    }

    public function Categories() {
        return $this->belongsToMany('App\Category');
    }
}
