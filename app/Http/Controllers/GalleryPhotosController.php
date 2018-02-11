<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GalleryPhoto;

class GalleryPhotosController extends Controller
{
    public function store(Request $r){
    	$this->validate($r, [
    		'name' => 'required',
    		'description' => 'required',
            'image' => 'required|mimes:jpeg,bmp,png,jpg|max:7048',
    	]);

    	$image = $r->file('image')->store('/uploads/photo-gallery');

    	$gp = new GalleryPhoto;
    	$gp->name = $r->name;
    	$gp->description = $r->description;
    	$gp->image = $image;
    	$gp->save();

    	session()->flash('action', 'added');
    	return back();
    }

    public function patch(GalleryPhoto $item, Request $r){
    	$this->validate($r, [
    		'name' => 'required',
    		'description' => 'required',
            'image' => 'sometimes|mimes:jpeg,bmp,png,jpg|max:7048',
    	]);

    	$item->update([
    		'name' => $r->name,
    		'description' => $r->description,
    	]);

    	if($r->image){
    		$image = $r->file('image')->store('/uploads/photo-gallery');
    		$item->update([
	    		'image' => $image,
	    	]);
    	}

    	session()->flash('action', 'updated');
    	return back();
    }

    public function destroy(GalleryPhoto $item){
    	$item->delete();

    	session()->flash('action', 'deleted');
    	return back();
    }
}
