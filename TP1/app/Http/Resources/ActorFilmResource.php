<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use \App\Film;
use \App\Actor;


class ActorFilmResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'actor_id' => Actor::all()->where('film_name',$this->name)   //marche mais pas bien... envoy tout les actor a place de juste eux dans le film
            ];
    }
}
