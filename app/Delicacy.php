<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delicacy extends Model
{
    public function images(){
    	return $this->hasMany(DelicacyImage::class);
    }
}
