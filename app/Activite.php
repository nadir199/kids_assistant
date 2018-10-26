<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    protected $fillable = [
        'nom', 'description', 'categorie',"dateDebut", 'dateFin', 'enfant_id','proposition_id'
    ];
    //
    public function enfant() {
        return $this->belongsTo('App\Enfant');
    }
    public function proposition() {
        return $this->belongsTo('App\Proposition');
    }
}
