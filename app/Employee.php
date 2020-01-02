<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name', 'rut',
    ];


    public function Store()
    {
        return $this->belongsTo('App\Store');
    }

    public function Cleaning()
    {

       return $this->hasMany('App\Cleaning');
    }

    

    public function scopeName($query, $name){
        if (trim($name) != ""){
        // $query->where('name', "LIKE",  "%$name%");
        $query->where(\DB::raw("CONCAT(name, ' ', rut)"),  "LIKE", "%$name%" );
        }
     }

}
