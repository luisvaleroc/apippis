<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class solidwaste extends Model
{
    protected $fillable = [
        'paper', 'paperboard', 'plastic', 'pvc', 'scrap', 'glass', 'food', 'ordinary', 'store_id', 'observation',
    ];

    public function Store()
    {
        return $this->belongsTo('App\Store');
    }

    public function scopeName($query, $name){
        if (trim($name) != ""){
        // $query->where('name', "LIKE",  "%$name%");
        $query->where(\DB::raw("CONCAT(paper, ' ', paperboard)"),  "LIKE", "%$name%" );
        }
     }
}
