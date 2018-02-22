<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TouristAttractionImage extends Model
{
    public function touristAttraction(){
    	return $this->belongsTo(TouristAttraction::class);
    }
}
