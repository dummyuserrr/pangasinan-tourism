<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CafeAndRestaurant extends Model
{
    protected $guarded = ['id'];

    public function images(){
    	return $this->hasMany(CafeAndRestaurantImage::class);
    }
}
