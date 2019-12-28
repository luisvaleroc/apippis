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

    //  public function User()
    //  {
    //      return $this->belongsTo('App\User');
    //  }

     public function users(){
        return $this->hasMany('App\User');
    }


     public function Solidwaste()
     {
         return $this->belongsTo('App\Solidwaste');
     }

     public function scopeName($query, $name){
        if (trim($name) != ""){
        // $query->where('name', "LIKE",  "%$name%");
        $query->where(\DB::raw("CONCAT(name, ' ', sector)"),  "LIKE", "%$name%" );
        }
     }

}


