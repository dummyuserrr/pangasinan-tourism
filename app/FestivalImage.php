<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FestivalImage extends Model
{
    public function festival(){
    	return $this->belongsTo(Festival::class);
    }
}
