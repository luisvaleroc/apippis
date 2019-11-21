<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{

    protected $fillable = [

        'name', 'status',
    ];
    
    // public function scopeName($query, $name){
    //     if (trim($name) != ""){
    //         $query->where(\DB::raw("CONCAT(name, '', status)"), 'LIKE', "%$name%");
    //        }
    //  }
    
     public function answer()
    {
        return $this->hasMany('App\Answer');
    }
     
}
