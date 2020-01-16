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

     public function Room()
     {

        return $this->hasMany('App\Room');
     }

     public function Employee()
     {

        return $this->hasMany('App\Employee');
     }

     public function Cleaning()
     {

        return $this->hasMany('App\Cleaning');
     }

     public function users(){
      return $this->hasMany('App\User');
  }

     public function scopeName($query, $name){
        if (trim($name) != ""){
        // $query->where('name', "LIKE",  "%$name%");
        $query->where(\DB::raw("CONCAT(name, ' ', address)"),  "LIKE", "%$name%" );
        }
     }
}
