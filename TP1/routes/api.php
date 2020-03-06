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

Route::get('films','FilmsController@index');                                                            //Currently working
Route::get('film/{film}','FilmsController@show');                                                       //Currently working
Route::post('films/search','FilmsController@search');                                                   //Currently working
Route::get('film/{film}/actors','FilmsController@showActors');                                          //Currently working

Route::post('film/add','FilmsController@store');//->middleware('Auth:api');                             //Currently working        401,403,422
Route::put('film/{film}','FilmsController@update');//->middleware('Auth:api');                          //Currently working        401,403,422
Route::delete('film/{film}','FilmsController@destroy');//->middleware('Auth:api');                      //Currently working        401,403

//Critics
Route::post('critic/add','CriticsController@store');//->middleware('Auth:api');                         //Currently working        401,422

//Users
Route::get('user/{user}','UserController@show');//->middleware('Auth:api');                             //Currently working
Route::post('user/add','UserController@store');                                                          //Currently working        422
Route::put('user/{user}','UserController@update');//->middleware('Auth:api');                           //Currently working        401,422