<?php

namespace App\Http\Controllers;

use App\Proposition;
use Illuminate\Http\Request;

class PropositionController extends Controller
{
    //
    function randomOne(){
        return Proposition::inRandomOrder()->first();
    }
}
