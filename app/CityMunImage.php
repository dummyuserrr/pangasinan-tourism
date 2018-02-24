<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CityMunImage extends Model
{
    public function citymun(){
    	return $this->belongsTo(CityMun::class);
    }
}
