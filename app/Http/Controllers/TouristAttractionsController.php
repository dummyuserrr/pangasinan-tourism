<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TouristAttraction;
use App\TouristAttractionImage;

class TouristAttractionsController extends Controller
{
    public function store(Request $r){
    	$this->validate($r, [
    		'name' => 'required',
    		'description' => 'required',
    		'image' => 'sometimes',
            'image.*' => 'mimes:jpeg,bmp,png|max:7048',
    	]);

    	$d = new TouristAttraction;
    	$d->name = $r->name;
    	$d->description = $r->description;
    	$d->save();

    	foreach($r->image as $i){
    		$image = $i->store('/uploads/images');
    		$di = new TouristAttractionImage;
    		$di->path = $image;
    		$di->tourist_attraction_id = $d->id;
    		$di->save();
    	}

    	session()->flash('action', 'added');
    	return redirect('/admin-panel/tourism/tourist-attractions');
    }

    public function patch(Delicacy $item, Request $r){
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
                $di = new DelicacyImage;
                $di->path = $image;
                $di->delicacy_id = $item->id;
                $di->save();
            }
        }

        session()->flash('action', 'updated');
        return back();
    }

    public function destroy(TouristAttraction $item){
    	$item->images()->delete();
    	$item->delete();
    	session()->flash('action', 'deleted');
    	return back();
    }

    public function image_destroy(DelicacyImage $item){
        $item->delete();
        session()->flash('action', 'deleted');
        return back();
    }

    public function fetch(TouristAttraction $item){
        $delicacy = $item;
        return view('includes.delicacies-modal', compact('delicacy'));
    }
}
