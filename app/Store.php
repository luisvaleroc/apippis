<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name', 'address',
    ];
    public function Brand()
    {
        return $this->belongsTo('App\Brand');
    }
    
}
