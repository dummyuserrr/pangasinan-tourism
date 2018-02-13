<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideosController extends Controller
{
    public function store(Request $r){
    	$this->validate($r, [
    		'link' => 'required',
    	]);
    	
    	$url = $r->link; 

    	// get youtube id
    	preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);		
		$youtubeID = $match[1];

		$v = new Video;

		if(empty($r->title)){ // if the user did not provide a title 
			// get youtube title using the ID
			$json = file_get_contents('http://www.youtube.com/oembed?url=http://www.youtube.com/watch?v=' . $youtubeID . '&format=json'); //get JSON video details
	      	$details = json_decode($json, true); //parse the JSON into an array
	     	$title = $details['title']; //return the video title
	     	$v->title = $title;
		}else{
			$v->title = $r->title;
		}

		$v->youtubeid = $youtubeID;
		$v->save();

        session()->flash('action', 'added');
		return back();

		// http://img.youtube.com/vi/A4a0xZMMlqE/0.jpg
    }

    public function patch(Video $item, Request $r){
    	$this->validate($r, [
    		'link' => 'required',
    	]);
    	
    	$url = $r->link; 

    	preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);		
		$youtubeID = $match[1];

		if(empty($r->title)){ 
			$json = file_get_contents('http://www.youtube.com/oembed?url=http://www.youtube.com/watch?v=' . $youtubeID . '&format=json');
	      	$details = json_decode($json, true);
	     	$title = $details['title'];
	     	$item->update([
	     		'title' => $title,
	     	]);	
		}else{
			$item->update([
	     		'title' => $r->title,
	     	]);	
		}

		$item->update([
     		'youtubeid' => $youtubeID,
     	]);	

        session()->flash('action', 'updated');
		return back();
    }

    public function destroy(Video $item){
    	$item->delete();
        session()->flash('action', 'deleted');
    	return back();
    }
}
