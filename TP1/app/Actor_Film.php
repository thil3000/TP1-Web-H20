<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Actor_Film extends Pivot
{
    protected $filable = ['actor_id','film_id'];
}
