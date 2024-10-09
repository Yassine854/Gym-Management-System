<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['sports_id', 'coaches_id', 'start','end','day'];




    public function sports(){
        return $this->belongsTo(Sport::class);
    }
    public function coaches(){
        return $this->belongsTo(Coach::class);
    }

}
