<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    
    use HasApiTokens, Notifiable;
    
    public $timestamps = false;
    protected $fillable = ['login', 'password','email','last_name','first_name','role_id'];

}
