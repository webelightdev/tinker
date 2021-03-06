<?php

namespace App;

use App\BaseModel;




class Lookup extends BaseModel
{
   protected $fillable = [
       	'type_id', 'name'
    ];

    public function types()
    {
    	return $this->belongsTo('\App\Type','type_id');

    }
}
