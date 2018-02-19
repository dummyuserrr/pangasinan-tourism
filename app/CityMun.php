<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CityMun extends Model
{
    protected $guarded = ['id'];

    public function images(){
    	return $this->hasMany(CityMunImage::class);
    }
}
