<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Festival extends Model
{
	protected $guarded = ['id'];

    public function images(){
    	return $this->hasMany(FestivalImage::class);
    }
}
