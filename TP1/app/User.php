<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use HasApiTokens, Notifiable;

class User extends Model
{
    public $timestamps = false;
    protected $fillable = ['login', 'password','email','last_name','first_name','role_id'];

}
