<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable=[
        'members_id'
       ];




    public function members(){
        return $this->belongsTo(Member::class);

    }
}
