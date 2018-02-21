<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delicacy extends Model
{
	protected $guarded = [];

    public function images(){
    	return $this->hasMany(DelicacyImage::class);
    }
}
