<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $fillable = [
        'name',
    ];


     public function Brand(){
        return $this->hasMany('App\Brand');
    }


}
