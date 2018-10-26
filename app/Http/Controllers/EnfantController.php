<?php

namespace App\Http\Controllers;

use App\Centre_Enfant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnfantController extends Controller
{
    //
    function add(Request $request){
        $nom=$request->input("nom");
        $prenom=$request->input("prenom");
        $dateNaiss=$request->input("dateDeNaissance");
        $sexe=$request->input("sexe");
        $taille=$request->input("taille");
        $poids=$request->input("poids");

        $userID=$request->input("user_id");
        $centres=$request->input("centres");

        DB::transaction(function () use ($nom,$prenom,$dateNaiss,$sexe,$taille,$poids,$userID,$centres) {
            $enfantId= DB::table('enfants')
                        ->insertGetId([
                            "nom"=>$nom,
                            "prenom"=>$prenom,
                            "dateDeNaissance"=>$dateNaiss,
                            "sexe"=>$sexe,
                            "taille"=>$taille,
                            "poids"=>$poids,
                            "user_id"=>$userID
                        ]);
            foreach($centres as $c){
                $centre_enfant=new Centre_Enfant;
                $centre_enfant->enfant_id=$enfantId;
                $centre_enfant->centre_id=$c;
                $centre_enfant->save();
            }
        }, 3);

        


    }
}
