<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MostVisited;
use App\MostVisitedImage;

class MostVisitedController extends Controller
{
    public function store(Request $r){
    	$this->validate($r, [
    		'name' => 'required',
            'description' => 'required',
    		'category' => 'required',
    		'image' => 'sometimes',
            'image.*' => 'mimes:jpeg,bmp,png|max:7048',
    	]);

    	$d = new MostVisited;
    	$d->name = $r->name;
        $d->category = $r->category;
    	$d->description = $r->description;
    	$d->save();

    	foreach($r->image as $i){
    		$image = $i->store('/uploads/images');
    		$di = new MostVisitedImage;
    		$di->path = $image;
    		$di->most_visited_id = $d->id;
    		$di->save();
    	}

    	session()->flash('action', 'added');
    	return redirect('/admin-panel/most-visiteds');
    }

    public function patch(MostVisited $item, Request $r){
        $this->validate($r, [
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'image' => 'sometimes',
            'image.*' => 'mimes:jpeg,bmp,png|max:7048',
        ]);

        $item->update([
            'name' => $r->name,
            'description' => $r->description,
            'category' => $r->category
        ]);

        if($r->image){
            foreach($r->image as $i){
                $image = $i->store('/uploads/images');
                $di = new MostVisitedImage;
                $di->path = $image;
                $di->most_visited_id = $item->id;
                $di->save();
            }
        }

        session()->flash('action', 'updated');
        return back();
    }

    public function destroy(MostVisited $item){
    	$item->images()->delete();
    	$item->delete();
    	session()->flash('action', 'deleted');
    	return back();
    }

    public function image_destroy(MostVisitedImage $item){
        $item->delete();
        session()->flash('action', 'deleted');
        return back();
    }

    public function fetch(MostVisited $item){
        $delicacy = $item;
        return view('includes.delicacies-modal', compact('delicacy'));
    }
}
