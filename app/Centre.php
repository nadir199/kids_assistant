<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{
    //
    public function enfants()
    {
        return $this->belongsToMany('App\Enfant');
    }
}
