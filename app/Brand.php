<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name', 'sector',
    ];

    public function store()
     {

        return $this->hasMany('App\Store');
     }
}
