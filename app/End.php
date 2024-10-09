<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class End extends Model
{
    protected $fillable=[
        'sports_id','coaches_id','members_id','modalmembers_id'
    ];

    public function sports(){
        return $this->belongsTo(Sport::class);
    }
    public function members(){
        return $this->belongsTo(Member::class);
    }

    public function modalmmbers(){
        return $this->belongsTo(Modalmember::class);
    }

    public function coaches(){
        return $this->belongsTo(Coach::class);
    }

}
