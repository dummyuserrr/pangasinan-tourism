<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MostVisited extends Model
{
    protected $guarded = ['id'];

    public function images(){
    	return $this->hasMany(MostVisitedImage::class);
    }
}
