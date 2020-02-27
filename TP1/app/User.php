<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['id', 'login', 'password','email','last_name','frist_name','role_id'];

}
