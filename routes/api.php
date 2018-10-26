<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post("/store","UserController@store");
Route::post("/log","UserController@log");

Route::post("/activite/add","ActiviteController@add");

Route::post("/enfant/add","EnfantController@add");

Route::get("/proposition/random","PropositionController@randomOne");
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
