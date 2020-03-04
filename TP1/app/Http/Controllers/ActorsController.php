<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor_Film;
use App\Actor;
use App\Http\Resources\ActorResource;
use App\Http\Resources\ActorsCollection;

class ActorsController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Film  $filmid
     * @return \Illuminate\Http\Response
     */
    public function showActors(int $filmid)
    {
        $flim_actor = Actor_Film::all()->where('film_id',$filmid);
        $actors=[];
        foreach ($flim_actor as $entry) {
            array_push($actors,Actor::find($entry->actor_id));
        }
    
        return new ActorsCollection($actors);
    }
}
