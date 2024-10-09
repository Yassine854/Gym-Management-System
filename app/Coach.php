<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Coach extends Authenticatable
{
    protected $fillable=[
        'cin', 'fname','lname','gender','scontract','econtract','sports_id','address','height','weight','tel','birth','email','job','password','image'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sports(){
        return $this->belongsTo(Sport::class);
    }
}
