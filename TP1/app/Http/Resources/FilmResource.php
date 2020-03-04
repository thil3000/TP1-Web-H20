<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use \App\Http\Resources\LanguageResource;
use \App\Http\Resources\CriticsCollection;
use \App\Critic;
use \App\Language;

class FilmResource extends JsonResource
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
        'title' => $this->title,
        'release_year' => $this->release_year,
        'length' => $this->length,
        'description' => $this->description,
        'rating' => $this->rating,
        'language' => new LanguageResource(Language::find($this->language_id)),
        'special_features' => $this->special_features,
        'image' => $this->image,
        'critics' => new CriticsCollection(Critic::all()->where('film_id',$this->id))
        ];
    }
}
