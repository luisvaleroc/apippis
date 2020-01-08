<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    protected $fillable = [
        'equip1', 'equip2', 'equip3', 'floor', 'wall', 'dump', 'action', 'room_id', 'observation'
    ];

    public function Room()
    {
        return $this->belongsTo('App\Room');
        //return $this->hasMany('App\Room');
    }

    public function scopeName($query, $name){
        if (trim($name) != ""){
         $query->where('create_at', "LIKE",  "%$name%");
        
        }
     }
}
