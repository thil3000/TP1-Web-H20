<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $filable = ['id','last_name','first_name','birthdate'];
}
