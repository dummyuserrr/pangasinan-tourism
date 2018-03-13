<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CityMun;
use App\Delicacy;
use App\GalleryPhoto;
use App\Video;
use App\ContactUsMessage;
use App\TouristAttraction;
use App\Festival;
use App\Event;

class PagesController extends Controller
{
    public function index(){
        $title = 'Pangasinan Tourism';
    	return view('index', compact('title'));
    }

    public function theProvince(){
        $title = 'The Province - Pangasinan Tourism';
        $cm = new CityMun;
        $d = new Delicacy;
        $gp = new GalleryPhoto;
        $v = new Video;
        $citymuns = $cm->orderBy('created_at', 'desc')->get();
        $delicacies = $d->orderBy('created_at', 'desc')->get();
        $photos = $gp->orderBy('created_at', 'desc')->get();
        $videos = $v->orderBy('created_at', 'desc')->get();
    	return view('theProvince', compact('title', 'citymuns', 'delicacies', 'photos', 'videos'));
    }

    public function tourism(){
        $title = 'Tourism - Pangasinan Tourism';
        $ta = new TouristAttraction;
        $f = new Festival;
        $e = new Event;
        $touristAttractions = $ta->orderBy('created_at', 'desc')->get();
        $festivals = $f->orderBy('created_at', 'desc')->get();
        $events = $e->orderBy('created_at', 'desc')->get();
    	return view('tourism', compact('title', 'touristAttractions', 'festivals', 'events'));
    }

    public function findUs(){
        $title = 'Find Us - Pangasinan Tourism';
    	return view('findUs', compact('title'));
    }

    public function contactUsSubmit(Request $r){
        $this->validate($r, [
            'name' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'email' => 'email|required',
        ]);

        $cum = new ContactUsMessage;
        $cum->name = $r->name;
        $cum->number = $r->phone;
        $cum->message = $r->message;
        $cum->email = $r->email;
        $cum->save();

        return 1;
    }
}