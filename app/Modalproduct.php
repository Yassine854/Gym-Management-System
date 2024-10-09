<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modalproduct extends Model
{

    protected $fillable = [
        'qte_pay','products_id'
    ];

    public function products(){
        return $this->belongsTo(Product::class);

    }
}
