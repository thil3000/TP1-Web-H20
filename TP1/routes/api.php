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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Film

Route::get('films','FilmsController@index');                                 //Currently working
Route::post('film/add','FilmsController@store')-> middleware('auth:api');    //Currently working
Route::put('film/{id}','FilmsController@update')-> middleware('auth:api');
// Route::delete('film/{id}','FilmsController@destroy');
Route::get('film/{film}','FilmsController@show');                            //Currently working

//Actors
Route::get('film/{filmid}/actors','ActorsController@showActors');            //Currently working

//Critics
Route::post('critic/add','CriticsController@store')-> middleware('auth:api');//Currently working

//Users
Route::post('user/add','UserController@store');                              //Currently working
// Route::put('user/{userid}','UserController@update');
// Route::delete('user/{userid}','UserController@destroy');
Route::get('user/{userid}','UserController@show')-> middleware('auth:api');  //Currently working

//Route::middleware('auth')->group( function(){
//     
//}