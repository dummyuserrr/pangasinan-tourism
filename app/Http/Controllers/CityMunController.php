<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CityMun;
use App\CityMunImage;

class CityMunController extends Controller
{
    public function store(Request $r){
    	$this->validate($r, [
    		'name' => 'required',
            'description' => 'required',
    		'images' => 'required',
            'images.*' => 'mimes:jpeg,bmp,png|max:7000',
    	]);

    	$c = new CityMun;
    	$c->name = $r->name;
    	$c->description = $r->description;
    	$c->save();

        foreach($r->images as $i){
            $image = $i->store('/uploads/cities-and-municipalities');
            $cmi = new CityMunImage;
            $cmi->path = $image;
            $cmi->citymun_id = $c->id;
            $cmi->save();
        }

    	session()->flash('action', 'added');
    	return back();
    }

    public function patch(CityMun $item, Request $r){
    	$this->validate($r, [
    		'name' => 'required',
    		'description' => 'required',
    	]);

    	$item->update([
    		'name' => $r->name,
    		'description' => $r->description,
    	]);

    	session()->flash('action', 'updated');
    	return back();
    }

    public function destroy(CityMun $item){
    	$item->delete();

    	session()->flash('action', 'deleted');
    	return back();
    }
}
