<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'login', 'password','email','last_name','frist_name','role_id'];

}
