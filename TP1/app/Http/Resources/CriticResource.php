<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\User;
use App\Http\Resources\UserNameResource;

class CriticResource extends JsonResource
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
        'user' => new UserNameResource(User::find($this->user_id)),
        'score' => $this->score,
        'comment' => $this->comment,
        'created at' => $this->created_at,
        'updated at' => $this->updated_at
        ];

    }
}
