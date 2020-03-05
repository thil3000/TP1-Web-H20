<?php

namespace App\Http\Controllers;

use App\Film;
use App\Language;
use App\Critic;
use App\Actor;
use App\Actor_Film;


use App\Http\Resources\FilmResource;
use App\Http\Resources\FilmsCollection;
use App\Http\Resources\ActorResource;
use App\Http\Resources\ActorsCollection;

use Illuminate\Http\Request;
use App\Http\Requests\CreateFilmRequest;
use App\Http\Requests\UpdateFilmRequest;

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

            return "Film added " . $data['title'];
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
    
    
    public function showActors(Film $film)
    {
        $actors_film = $film->actors()->get();
        
        $actorsResource = [];
        foreach ($actors_film as $actor_entry) {
            array_push($actorsResource,new ActorResource(Actor::find($actor_entry->actor_id)));
        }
        
        return $actorsResource;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFilmRequest $request, Film $film)
    {
        $data = $request->validated();
        $film->update([
            'title' => $data['title'],
            'release_year' => $data['release_year'],
            'length' => $data['length'],
            'description' => $data['description'],
            'rating' => $data['rating'],
            'language_id' => Language::where('id',$data['language_id'])->firstOrFail(),
            'special_features' => $data['special_features'],
            'image' => $data['image']
        ]);

        return "Sucess updating film: " . $film->title;    
    }

    /**
     * Remove the specified resource from storage.
     *
     * 
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        Actor_Film::where('film_id',$film->id)->delete();
        Critic::where('film_id',$film->id)->delete();
            
        $film->delete();
        return "Sucess deleting film: " . $film->title;
    }

      /**
     * search the keyword in storage.
     *
     * 
     * @param  \App\keyword  $keyword
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request, String $keyword)
    {
        //  $data = $request->get('keyword');

         $film = Film::where('title', 'like', "%$keyword%")
                 ->orWhere('release_year', 'like', "%$keyword%")
                 ->orWhere('length', 'like', "%$keyword%")
                 ->orWhere('rating', 'like', "%$keyword%")
                 ->paginate(20);
                
                return new FilmsCollection($film);
    }
    
}
