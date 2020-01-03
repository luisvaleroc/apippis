<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cleaning extends Model
{
    protected $fillable = [
        'mask', 'wound', 'makeup', 'jewelry', 'ear', 'shoe', 'hair', 'nail', 'uniform', 'employee_id', 'store_id', 'observation',
    ];



    public function Store()
    {
        return $this->belongsTo('App\Store');
    }
    public function Employee()
    {
        return $this->belongsTo('App\Employee');
    }


    


    public function scopeName($query, $name){
        if (trim($name) != ""){
        // $query->where('name', "LIKE",  "%$name%");
        $query->where(\DB::raw("CONCAT(name, ' ', rut)"),  "LIKE", "%$name%" );
        }
     }

}
