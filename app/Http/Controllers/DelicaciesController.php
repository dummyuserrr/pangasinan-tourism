<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delicacy;
use App\DelicacyImage;

class DelicaciesController extends Controller
{
    public function store(Request $r){
    	$this->validate($r, [
    		'name' => 'required',
    		'description' => 'required',
    		'image' => 'sometimes',
            'image.*' => 'mimes:jpeg,bmp,png|max:7048',
    	]);

    	$d = new Delicacy;
    	$d->name = $r->name;
    	$d->description = $r->description;
    	$d->save();

    	foreach($r->image as $i){
    		$image = $i->store('/uploads/images');
    		$di = new DelicacyImage;
    		$di->path = $image;
    		$di->delicacies_id = $d->id;
    		$di->save();
    	}

    	session()->flash('action', 'added');
    	return back();
    }
}
