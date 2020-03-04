<?php

namespace App\Http\Controllers;

use App\Film;
use App\Http\Resources\FilmResource;
use App\Http\Resources\ActorsCollection;
//use Illuminate\Http\Request;
use App\Http\Requests\CreateFilmRequest;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Film::paginate(20);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFilmRequest $request)
    {
            $film = Film::create([
            'title' => $request->title,
            'release_year' => $request->release_year,
            'length' => $request->length,
            'description' => $request->description,
            'rating' => $request->rating,
            'language_id' => $request->language_id,
            'special_features' => $request->special_features,
            'image' => $request->image,
            ]);

            return "Marche";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        return new FilmResource($film);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Film $film)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        //
    }
}
