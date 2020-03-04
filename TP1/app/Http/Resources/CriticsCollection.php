<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\CriticResource;
use App\Critic;

class CriticsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {           
        $criticsResourced = [];
        foreach ($this->collection as $critic) {
            array_push($criticsResourced, new CriticResource(Critic::find($critic->id)));
        }
        return $criticsResourced;
    }
}
