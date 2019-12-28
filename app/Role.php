<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    

    public function scopeName($query, $name){
        if (trim($name) != ""){
         $query->where('name', "LIKE",  "%$name%");
        }
     }
 
}
