<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TouristAttraction extends Model
{
    protected $guarded = ['id'];

    public function images(){
    	return $this->hasMany(TouristAttractionImage::class);
    }
}
