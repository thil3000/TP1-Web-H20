<?php

namespace App\Http\Controllers;

use App\Film;
use App\Http\Resources\FilmResource;
use App\Http\Resources\ActorsCollection;
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
            $data = $request->validated();
            $film = Film::create([
            'title' => $data['title'],
            'release_year' => $data['release_year'],
            'length' => $data['length'],
            'description' => $data['description'],
            'rating' => $data['rating'],
            'language_id' => $data['language_id'],
            'special_features' => $data['special_features'],
            'image' => $data['image']
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
        
        
        $film->title = $request->input('title');
        $film->release_year = $request->input('release_year');
        $film->length = $request->input('length');
        $film->description = $request->input('description');
        $film->rating = $request->input('rating');
        $film->language_id = $request->input('language_id');
        $film->special_features = $request->input('special_features');
        $film->image = $request->input('image');
        $film->save();

        return "Sucess updating film: " . $film->title;    
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
