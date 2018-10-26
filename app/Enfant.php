<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfant extends Model
{
    //
    public function user() {
        return $this->belongsTo('App\User');
    }
	public function activite() {
        return $this->hasMany('App\Activite');
    }
}
