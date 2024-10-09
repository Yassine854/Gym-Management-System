<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Member extends Authenticatable
{

    protected $fillable=[
     'fname', 'lname','gender','address','birth',
     'tel','email','password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
