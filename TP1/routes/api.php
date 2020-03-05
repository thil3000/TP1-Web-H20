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
Route::post('film/add','FilmsController@store');                             //Currently working
Route::put('film/{film}','FilmsController@update');                          //Currently working
Route::delete('film/{film}','FilmsController@destroy');                      //Currently working
Route::get('film/{film}','FilmsController@show');                            //Currently working
Route::get('films/search','FilmsController@search');                          //NEED REVIEW BUT KINDA WORKING   //key->> keyword= ...

//Actors
Route::get('film/{filmid}/actors','ActorsController@showActors');            //Currently working

//Critics
Route::post('critic/add','CriticsController@store');                         //Currently working

//Users
Route::post('user/add','UserController@store');                              //Currently working
Route::put('user/{user}','UserController@update');                           //Currently working
Route::get('user/{user}','UserController@show');                             //Currently working