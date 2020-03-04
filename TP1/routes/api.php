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
Route::get('films','FilmsController@index');
Route::post('films/add','FilmsController@store');
// Route::put('film/{id}','FilmsController@update');
Route::get('film/{filmid}','FilmsController@show');



Route::post('critics/add','CriticsController@store');


Route::get('users','UserController@index');
Route::post('user/add','UserController@store');
// Route::put('user/{userid}','UserController@update');
Route::get('user/{userid}','UserController@show');


Route::get('actorFilm/{film}','ActorFilmController@show');