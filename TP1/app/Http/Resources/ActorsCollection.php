<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Actor;

class ActorsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       $actors = [];
        foreach ($this->collection as $actor) {
            array_push($actors,new ActorResource($actor));
        }
        return $actors;
    }
}
