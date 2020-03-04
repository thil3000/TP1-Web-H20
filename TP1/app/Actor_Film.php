<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor_Film extends Model
{
    public $timestamps = false;
    protected $filable = ['actor_id','film_id','created_at','updated_at'];
}
