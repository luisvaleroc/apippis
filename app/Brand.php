<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name', 'sector',
    ];

    public function Store()
     {

        return $this->hasMany('App\Store');
     }

     public function User()
     {
         return $this->belongsTo('App\User');
     }
     
}
