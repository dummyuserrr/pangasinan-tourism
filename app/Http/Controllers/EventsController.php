<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\EventImage;

class EventsController extends Controller
{
    public function store(Request $r){
    	$this->validate($r, [
    		'name' => 'required',
    		'description' => 'required',
    		'image' => 'sometimes',
            'image.*' => 'mimes:jpeg,bmp,png|max:7048',
    	]);

    	$d = new Event;
    	$d->name = $r->name;
    	$d->description = $r->description;
    	$d->save();

    	foreach($r->image as $i){
    		$image = $i->store('/uploads/images');
    		$di = new EventImage;
    		$di->path = $image;
    		$di->event_id = $d->id;
    		$di->save();
    	}

    	session()->flash('action', 'added');
    	return redirect('/admin-panel/tourism/events');
    }

    public function patch(Event $item, Request $r){
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
                $di = new EventImage;
                $di->path = $image;
                $di->event_id = $item->id;
                $di->save();
            }
        }

        session()->flash('action', 'updated');
        return back();
    }

    public function destroy(Event $item){
    	$item->images()->delete();
    	$item->delete();
    	session()->flash('action', 'deleted');
    	return back();
    }

    public function image_destroy(EventImage $item){
        $item->delete();
        session()->flash('action', 'deleted');
        return back();
    }

    public function fetch(Event $item){
        $nomap = 1;
        return view('includes.tourism-modal', compact('item', 'nomap'));
    }
}
