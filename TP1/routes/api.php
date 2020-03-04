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
Route::get('films','FilmsController@index');
Route::post('film/add','FilmsController@store');
Route::put('film/{id}','FilmsController@update');
// Route::delete('film/{id}','FilmsController@destroy');
Route::get('film/{film}','FilmsController@show');

//Actors
Route::get('film/{filmid}/actors','ActorsController@showActors');

//Critics
Route::post('critics/add','CriticsController@store');

//Users
Route::post('user/add','UserController@store');
// Route::put('user/{userid}','UserController@update');
// Route::delete('user/{userid}','UserController@destroy');
Route::get('user/{userid}','UserController@show');