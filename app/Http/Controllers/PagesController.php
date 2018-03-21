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
use App\CafeAndRestaurant;
use App\CafeAndRestaurantImage;
use App\MostVisited;
use App\UpcomingEvent;

class PagesController extends Controller
{
    public function index(){
        $title = 'Pangasinan Tourism';
        $mv = new MostVisited;
        $ue = new UpcomingEvent;
        $mvs = $mv->orderBy('created_at', 'desc')->get();
        $ues = $ue->orderBy('created_at', 'desc')->get();
    	return view('index', compact('title', 'mvs', 'ues'));
    }

    public function theProvince(){
        $title = 'The Province - Pangasinan Tourism';
        $cm = new CityMun;
        $gp = new GalleryPhoto;
        $v = new Video;
        $f = new Festival;
        $festivals = $f->orderBy('created_at', 'desc')->get();
        $citymuns = $cm->orderBy('created_at', 'desc')->get();
        $photos = $gp->orderBy('created_at', 'desc')->get();
        $videos = $v->orderBy('created_at', 'desc')->get();
    	return view('theProvince', compact('title', 'citymuns', 'photos', 'videos', 'festivals'));
    }

    public function tourism(){
        $title = 'Tourism - Pangasinan Tourism';
        $ta = new TouristAttraction;
        $d = new Delicacy;
        $e = new Event;
        $car = new CafeAndRestaurant;
        $touristAttractions = $ta->orderBy('created_at', 'desc')->get();
        $delicacies = $d->orderBy('created_at', 'desc')->get();
        $events = $e->orderBy('created_at', 'desc')->get();
        $cars = $car->orderBy('created_at', 'desc')->get();
    	return view('tourism', compact('title', 'touristAttractions', 'events', 'delicacies', 'cars'));
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