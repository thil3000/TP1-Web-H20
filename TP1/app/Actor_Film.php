<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor_Film extends Model
{
    protected $filable = ['actor_id','film_id'];
}
