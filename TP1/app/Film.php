<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Actor_Film;

class Film extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['title','release_year','length','description','rating','language_id','special_features','image'];
    
    public function actors(){
        return $this->hasMany('App\Actor_Film');
    }
    
    public function critic(){
        return $this->hasMany('App\Critic');
    }
}

