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
Route::get('token','FilmsController@createToken');                          //Currently working
Route::get('film/{film}','FilmsController@show');                            //Currently working
Route::get('film/{film}/actors','FilmsController@showActors');               //Currently working

Route::middleware('Auth:api')->post('film/add','FilmsController@store');     //Currently working        401,403,422
Route::put('film/{film}','FilmsController@update');                          //Currently working        401,403,422
Route::delete('film/{film}','FilmsController@destroy');                      //Currently working        401,403

//Critics

Route::post('critic/add','CriticsController@store');                         //Currently working        422

//Users
Route::get('user/{user}','UserController@show');                             //Currently working
Route::post('user/add','UserController@store');                              //Currently working        422
Route::put('user/{user}','UserController@update');                           //Currently working        401,422

