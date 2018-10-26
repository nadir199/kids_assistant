<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    //
    public function enfant() {
        return $this->belongsTo('App\Enfant');
    }
}
