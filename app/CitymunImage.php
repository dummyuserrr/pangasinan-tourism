<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CitymunImage extends Model
{
    public function citymun(){
    	return $this->belongsTo(Citymun::class);
    }
}
