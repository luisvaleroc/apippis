<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name', 'email', 'company', 'funding', 'newsletter'
    ];


    public function scopeName($query, $name){
        if (trim($name) != ""){
         $query->where(\DB::raw("CONCAT(name, '', email, company, ' ', funding, '', newsletter)"), 'LIKE', "%$name%");
        }
     }
}
