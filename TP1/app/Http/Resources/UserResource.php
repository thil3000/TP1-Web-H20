<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Role;

class UserResource extends JsonResource
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
            'login' => $this->login,
            'email' => $this->email,
            'last_name' => $this->last_name,
            'frist_name' => $this->frist_name,
            'role_id' => Role::all()->where('role_id',$this->id)
            ];
    }
}
