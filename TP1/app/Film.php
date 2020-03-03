<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $filable = ['id','title','release_year','length','description','rating','langage_id','special_features','image','created_at'];
    
}

