<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor_Film;
use App\Actor;
use App\Http\Resources\ActorResource;

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
        $flim_actor_entries = Actor_Film::all()->where('film_id',$filmid);
        $actors=[];
        foreach ($flim_actor_entries as $entry) {
            array_push($actors,Actor::find($entry->actor_id));
        }
    
        return new ActorsCollection($actors);
    }
}
