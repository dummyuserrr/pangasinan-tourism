<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MostVisitedImage extends Model
{
    public function mostVisited(){
    	return $this->belongsTo(MostVisited::class);
    }
}
