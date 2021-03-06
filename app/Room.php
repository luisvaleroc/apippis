<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    protected $fillable = [
        'name', 'description', 'store_id',
    ];

    public function Store()
    {
        return $this->belongsTo('App\Store');
        
    }

    public function Plant()
    {

       return $this->hasMany('App\Plant');
       //return $this->belongsTo('App\Plant');
    }

    public function scopeName($query, $name){
        if (trim($name) != ""){
        $query->where('name', "LIKE",  "%$name%");
       
        }
     }
}
