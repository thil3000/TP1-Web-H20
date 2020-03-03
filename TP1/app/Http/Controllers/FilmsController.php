<?php

namespace App\Http\Controllers;

use App\Film;
use App\Http\Resources\FilmResource;
use Illuminate\Http\Request;
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
        $objet = Film::create([
        'title' => $request->title,
        'release_year' => $request->release_year,
        'length' => $request->length,
        'description' => $request->description,
        'rating' => $request->rating,
        'language_id' => $request->language_id,
        'special_features' => $request->special_features,
        'image' => $request->image,
        ]);
        
//         $donnees = $request->validated();
//         $film = new Film();
//         $film->timestamps = false;
//         $film->id = $request->id;
//         $film->title = $request->title;
//         $film->release_year = $request->release_year;
//         $film->length = $request->length;
//         $film->description = $request->description;
//         $film->rating = $request->rating;                                //A REVOIR POUR QUE TRANSFERT SE FASSE DANS BD
//         $film->language_id = $request->language_id;
//         $film->special_features = $request->special_features;
//         $film->image = $request->image;
//         $film->save();

        return "Marche";//view('filmAddedConfirmation', compact('film'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $filmid)
    {
        return new FilmResource($filmid);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        //
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
