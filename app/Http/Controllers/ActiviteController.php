<?php

namespace App\Http\Controllers;

use App\Activite;
use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    //
    function add(Request $request){
        $actType=$request->input("actType");
        $idProp=0;
        $descr="Aucune description";
        $categorie="Autre";
        $actName="N/A";
        if($actType==0){ //Case app added by recommendation
            $idProp=$request->input("idProp");
        }
        else{ //Case app added manually
            $descr = $request->input("descr");
            $categorie = $request->input("categorie");
            $actName=$request->input("actName") ;
        }

        $idEnfant=$request->input("idEnfant");
        $dateDebut=$request->input("dateDebut");
        $dateFin=$request->input("dateFin");

        $activite=new Activite;
        $activite->nom=$actName;
        $activite->description=$descr;
        $activite->categorie=$categorie;
        $activite->dateDebut=$dateDebut;
        $activite->dateFin=$dateFin;
        $activite->enfant_id=$idEnfant;
        $activite->proposition_id=$idProp;



        return response()->json([
            "error"=> !$activite->save()
        ]);
    }
}
