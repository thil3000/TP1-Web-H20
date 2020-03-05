<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Actor_Film extends Pivot
{
    protected $filable = ['actor_id','film_id'];
    
     public function film(){
        return $this->belongsToMany('App\Film');
    }
    
    public function actors(){
        return $this->belongsToMany('App\Actor');
    }
}
