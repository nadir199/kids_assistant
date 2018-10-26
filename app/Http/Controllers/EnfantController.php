<?php

namespace App\Http\Controllers;

use App\Centre_Enfant;
use App\Enfant;
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
        $centres=json_decode($request->input("centres"));
        $enfantId=null;
        DB::transaction(function () use ($nom,$prenom,$dateNaiss,$sexe,$taille,$poids,$userID,$centres,&$enfantId) {
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
            foreach($centres as $k=>$c){
                DB::table("centre__enfants")
                    ->insert([
                        "enfant_id"=>$enfantId,
                        "centre_id"=>$c
                    ]);
            }
        }, 3);

        $enfant = Enfant::where('id',$enfantId)->first();
        return response()->json([
            "error"=>is_null($enfant)
        ]);

    }
}
