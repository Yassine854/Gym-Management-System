<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    protected $fillable=[
        'name','hour','description','cost'
    ];
}
