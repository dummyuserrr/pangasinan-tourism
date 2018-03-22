<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citymun extends Model
{
    protected $guarded = ['id'];

    public function images(){
    	return $this->hasMany(CitymunImage::class);
    }
}
