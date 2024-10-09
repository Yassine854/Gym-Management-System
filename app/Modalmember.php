<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modalmember extends Model
{
    protected $fillable=[
        'sub', 'pay','start','sports_id','coaches_id','members_id','image'
    ];


    public function sports(){
        return $this->belongsTo(Sport::class);

    }

    public function coaches(){
        return $this->belongsTo(Coach::class);

    }

    public function members(){
        return $this->belongsTo(Member::class);

    }

}
