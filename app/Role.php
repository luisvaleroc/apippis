<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function scopeName($query, $name){
        $query->where('name', $name);
    }
}
