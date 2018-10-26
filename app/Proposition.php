<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposition extends Model
{
    //
    public function activite() {
        return $this->hasMany('App\Activite');
    }
}
