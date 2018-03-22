<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Citymun;
use App\CitymunImage;

class CitymunController extends Controller
{
    public function store(Request $r){
    	$this->validate($r, [
    		'name' => 'required',
            'description' => 'required',
            'youtube_link' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
    		'images' => 'required',
            'images.*' => 'mimes:jpeg,bmp,png,jpg|max:7000',
    	]);

    	$c = new Citymun;
    	$c->name = $r->name;
        $c->description = $r->description;
        $c->lat = $r->latitude;
    	$c->long = $r->longitude;

        // get youtube id
        $url = $r->youtube_link; 
        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);        
        $youtubeID = $match[1];

        $c->youtubeid = $youtubeID;
    	$c->save();

        foreach($r->images as $i){
            $image = $i->store('/uploads/images');
            $cmi = new CitymunImage;
            $cmi->path = $image;
            $cmi->citymun_id = $c->id;
            $cmi->save();
        }

    	session()->flash('action', 'added');
    	return redirect('/admin-panel/the-province/cities-and-municipalities');
    }

    public function patch(Citymun $item, Request $r){
    	$this->validate($r, [
    		'name' => 'required',
    		'description' => 'required',
            'images' => 'sometimes',
            'images.*' => 'sometimes|mimes:jpeg,bmp,png,jpg|max:7000',
    	]);

    	$item->update([
    		'name' => $r->name,
    		'description' => $r->description,
    	]);

        if($r->images){
            foreach($r->images as $i){
                $image = $i->store('/uploads/images');
                $cmi = new CitymunImage;
                $cmi->path = $image;
                $cmi->citymun_id = $item->id;
                $cmi->save();
            }
        }

    	session()->flash('action', 'updated');
    	return back();
    }

    public function destroy(Citymun $item){
        $item->images()->delete();
    	$item->delete();

    	session()->flash('action', 'deleted');
    	return back();
    }

    public function destroy_image(CitymunImage $item){
        $item->delete();

        session()->flash('action', 'deleted');
        return back();
    }

    public function fetch(Citymun $item){
        $citymun = $item;
        return view('includes.citymun-modal', compact('citymun'));
    }
}
