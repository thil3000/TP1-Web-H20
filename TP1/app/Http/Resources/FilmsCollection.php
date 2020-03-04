<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class FilmsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {  
        $filmResourced = [];
        foreach ($this->collection as $film) {
            array_push($filmResourced, new FilmResource($film));
        }
        return $filmResourced;
    }
}
