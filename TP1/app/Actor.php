<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $filable = ['last_name','first_name','birthdate'];
    
     public function films(){
            return $this->hasMany('App\Actor_Film');
        }

}
