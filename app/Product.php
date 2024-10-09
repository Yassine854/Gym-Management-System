<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
        'name', 'qte','modal_id','pay','image'
    ];

    public function modalproducts(){
        return $this->belongsTo(Modalproduct::class);
    }
}
