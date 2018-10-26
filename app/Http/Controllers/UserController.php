<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function store(Request $request){
        $name=$request->input("name");
        $prenom=$request->input("prenom");
        $dateDeNaissance=$request->input("dateDeNaissance");
        $email=$request->input("email");
        $password=$request->input("password");
        $token=sha1(time());
        User::create([
            "name"=>$name,
            "prenom"=> $prenom,
            "dateDeNaissance"=>$dateDeNaissance,
            "email"=>$email,
            "password"=>sha1($password),
            "token"=> $token
        ]);
        return response()->json([
           "token"=> $token
        ]);
    }

    public function log(Request $request){
        $email=$request->input("email");
        $password=$request->input("password");
        $data= User::where("email","=",$email)
                ->where("password","=",sha1($password))
                ->count();
        $token=sha1(time());
        if($data){
            User::where("email","=",$email)
                ->update(["token"=> $token]);
            return response()->json([
                "token"=> $token
            ]);
        }
        else
            return response()->json([
                "error"=>1
            ]);
    }
}
