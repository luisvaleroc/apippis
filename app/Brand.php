<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name', 'sector_id',
    ];

    public function Store()
     {

        return $this->hasMany('App\Store');
     }

    //  public function User()
    //  {
    //      return $this->belongsTo('App\User');
    //  }

     public function user(){
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

     public function Roles()
     {
         return $this->hasManyThrough('Caffeinated\Shinobi\Models\Role', 'App\User');
     }

     public function Sector(){
        return $this->belongsTo('App\Sector');
    }

   
}


