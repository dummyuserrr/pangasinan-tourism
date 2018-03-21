<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CafeAndRestaurant;
use App\CafeAndRestaurantImage;

class CafeAndRestaurantsController extends Controller
{
    public function store(Request $r){
    	$this->validate($r, [
    		'name' => 'required',
    		'description' => 'required',
    		'image' => 'sometimes',
            'image.*' => 'mimes:jpeg,bmp,png|max:7048',
    	]);

    	$d = new CafeAndRestaurant;
    	$d->name = $r->name;
    	$d->description = $r->description;
    	$d->save();

    	foreach($r->image as $i){
    		$image = $i->store('/uploads/images');
    		$di = new CafeAndRestaurantImage;
    		$di->path = $image;
    		$di->cafe_and_restaurant_id = $d->id;
    		$di->save();
    	}

    	session()->flash('action', 'added');
    	return redirect('/admin-panel/tourism/cafe-and-restaurants');
    }

    public function patch(CafeAndRestaurant $item, Request $r){
        $this->validate($r, [
            'name' => 'required',
            'description' => 'required',
            'image' => 'sometimes',
            'image.*' => 'mimes:jpeg,bmp,png|max:7048',
        ]);

        $item->update([
            'name' => $r->name,
            'description' => $r->description,
        ]);

        if($r->image){
            foreach($r->image as $i){
                $image = $i->store('/uploads/images');
                $di = new CafeAndRestaurantImage;
                $di->path = $image;
                $di->cafe_and_restaurant_id = $item->id;
                $di->save();
            }
        }

        session()->flash('action', 'updated');
        return back();
    }

    public function destroy(CafeAndRestaurant $item){
    	$item->images()->delete();
    	$item->delete();
    	session()->flash('action', 'deleted');
    	return back();
    }

    public function image_destroy(CafeAndRestaurantImage $item){
        $item->delete();
        session()->flash('action', 'deleted');
        return back();
    }

    public function fetch(CafeAndRestaurant $item){
        $delicacy = $item;
        return view('includes.delicacies-modal', compact('delicacy'));
    }
}
