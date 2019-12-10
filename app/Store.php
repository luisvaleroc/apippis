<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name', 'address', 'brand_id',
    ];
    public function Brand()
    {
        return $this->belongsTo('App\Brand');
    }
    
    
    public function Solidwaste()
     {

        return $this->hasMany('App\Solidwaste');
     }
}
