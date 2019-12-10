<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class solidwaste extends Model
{
    protected $fillable = [
        'paper', 'paperboard', 'plastic', 'pvc', 'scrap', 'glass', 'food', 'ordinary', 'store_id'
    ];

    public function Store()
    {
        return $this->belongsTo('App\Store');
    }
}
