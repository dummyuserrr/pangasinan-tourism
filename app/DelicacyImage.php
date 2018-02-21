<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DelicacyImage extends Model
{
    public function delicacy(){
    	return $this->belongsTo(Delicacy::class);
    }
}
