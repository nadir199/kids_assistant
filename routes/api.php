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

Route::get("/enfant/add","EnfantController@add");
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
