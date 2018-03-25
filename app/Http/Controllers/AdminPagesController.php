<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Citymun;
use App\Delicacy;
use App\GalleryPhoto;
use App\Video;
use App\User;
use App\ContactUsMessage;
use App\TouristAttraction;
use App\TouristAttractionImage;
use App\Festival;
use App\FestivalImage;
use App\Event;
use App\EventImage;
use App\CafeAndRestaurant;
use App\CafeAndRestaurantImage;
use App\MostVisited;
use App\MostVisitedImage;
use App\UpcomingEvent;

class AdminPagesController extends Controller
{
    public function index(){
        $fontawesome = 'fa fa-tachometer';
        $title = 'Dashboard';
    	return view('adminpanel.dashboard', compact('title', 'fontawesome'));
    }

    public function login(){
        $fontawesome = 'fa fa-users';
        $title = 'Login';
    	return view('adminpanel.login', compact('title', 'fontawesome'));
    }

    public function users(){
        $fontawesome = 'fa fa-users';
        $title = 'Users';
        $u = new User;
        $users = $u->where('role', '!=', 'superadmin')->where('id', '!=', session('id'))->orderBy('created_at', 'desc')->get();
    	return view('adminpanel.users', compact('title', 'fontawesome', 'users'));
    }

    public function posts_new(){
        $fontawesome = 'fa fa-book';
        $title = 'New Post';
    	return view('adminpanel.posts_new', compact('title', 'fontawesome'));
    }

    public function posts_edit(){
        $fontawesome = 'fa fa-book';
        $title = 'Edit Post';
        return view('adminpanel.posts_edit', compact('title', 'fontawesome'));
    }

    public function citymun(){
        $fontawesome = 'fa fa-map-marker';
        $title = 'Cities and Municipalities';
        $cm = new Citymun;
        $citymuns = $cm->orderBy('created_at', 'desc')->get();
        return view('adminpanel.citymun', compact('title', 'fontawesome', 'citymuns'));
    }

    public function citymun_new(){
        $fontawesome = 'fa fa-map-marker';
        $title = 'Cities and Municipalities';
        return view('adminpanel.citymun_new', compact('title', 'fontawesome'));
    }

    public function citymun_view(Citymun $item){
        $fontawesome = 'fa fa-map-marker';
        $title = 'Cities and Municipalities';
        $cm = $item;
        return view('adminpanel.citymun_view', compact('title', 'fontawesome', 'cm'));
    }

    public function delicacies(){
        $fontawesome = 'fa fa-spoon';
        $title = 'Delicacies';
        $d = new Delicacy;
        $delicacies = $d->orderBy('created_at', 'desc')->get();
        return view('adminpanel.delicacies', compact('title', 'fontawesome', 'delicacies'));
    }

    public function delicacies_new(){
        $fontawesome = 'fa fa-spoon';
        $title = 'New Delicacy';
        return view('adminpanel.delicacies_new', compact('title', 'fontawesome'));
    }

    public function delicacies_view(Delicacy $item){
        $fontawesome = 'fa fa-spoon';
        $title = 'View Delicacy';
        $delicacy = $item;
        return view('adminpanel.delicacies_view', compact('title', 'fontawesome', 'delicacy'));
    }

    public function photoGallery(){
        $fontawesome = 'fa fa-picture-o';
        $title = 'Photo Gallery';
        $gp = new GalleryPhoto;
        $photos = $gp->orderBy('created_at', 'desc')->get();
        return view('adminpanel.photoGallery', compact('title', 'fontawesome', 'photos'));
    }

    public function videos(){
        $fontawesome = 'fa fa-youtube-play';
        $title = 'Videos';
        $v = new Video;
        $videos = $v->orderBy('created_at', 'desc')->get();
        return view('adminpanel.videos', compact('title', 'fontawesome', 'videos'));
    }

    public function contactUsMessages(){
        $fontawesome = 'fa fa-phone';
        $title = 'Contact Us Messages';
        $cum = new ContactUsMessage;
        $cums = $cum->orderBy('created_at', 'desc')->paginate(10);
        return view('adminpanel.contactUsMessages', compact('fontawesome', 'title', 'cums'));
    }

    public function touristAttractions(){
        $fontawesome = 'fa fa-ship';
        $title = 'Tourist Attractions';
        $ta = new TouristAttraction;
        $touristAttractions = $ta->orderBy('created_at', 'desc')->get();
        return view('adminpanel.touristAttractions', compact('title', 'fontawesome', 'touristAttractions'));
    }

    public function touristAttractions_new(){
        $fontawesome = 'fa fa-ship';
        $title = 'Tourist Attractions';
        return view('adminpanel.touristAttractions_new', compact('title', 'fontawesome', 'touristAttractions'));
    }

    public function touristAttractions_view(TouristAttraction $item){
        $fontawesome = 'fa fa-ship';
        $title = 'Tourist Attractions';
        $ta = $item;
        return view('adminpanel.touristAttractions_view', compact('title', 'fontawesome', 'ta'));
    }

    public function festivals(){
        $fontawesome = 'fa fa-asterisk';
        $title = 'Festivals';
        $f = new Festival;
        $festivals = $f->orderBy('created_at', 'desc')->get();
        return view('adminpanel.festivals', compact('title', 'fontawesome', 'festivals'));
    }

    public function festivals_new(){
        $fontawesome = 'fa fa-asterisk';
        $title = 'Add New Festival';
        return view('adminpanel.festivals_new', compact('title', 'fontawesome'));
    }

    public function festivals_view(Festival $item){
        $fontawesome = 'fa fa-asterisk';
        $title = 'View Festival';
        $festival = $item;
        return view('adminpanel.festivals_view', compact('title', 'fontawesome', 'festival'));
    }

    public function events(){
        $fontawesome = 'fa fa-calendar-check-o';
        $title = 'Festivals';
        $e = new Event;
        $events = $e->orderBy('created_at', 'desc')->get();
        return view('adminpanel.events', compact('title', 'fontawesome', 'events'));
    }

    public function events_new(){
        $fontawesome = 'fa fa-calendar-check-o';
        $title = 'Add New Event';
        return view('adminpanel.events_new', compact('title', 'fontawesome'));
    }

    public function events_view(Event $item){
        $fontawesome = 'fa fa-calendar-check-o';
        $title = 'View Event';
        $event = $item;
        return view('adminpanel.events_view', compact('title', 'fontawesome', 'event'));
    }

    public function cafeAndRestaurants(){
        $fontawesome = 'fa fa-coffee';
        $title = 'Cafe & Restaurants';
        $car = new CafeAndRestaurant;
        $cars = $car->orderBy('created_at', 'desc')->get();
        return view('adminpanel.cafeAndRestaurants', compact('title', 'fontawesome', 'cars'));
    }

    public function cafeAndRestaurants_new(){
        $fontawesome = 'fa fa-coffee';
        $title = 'New Cafe & Restaurant';
        return view('adminpanel.cafeAndRestaurants_new', compact('title', 'fontawesome'));
    }

    public function cafeAndRestaurants_view(CafeAndRestaurant $item){
        $fontawesome = 'fa fa-coffee';
        $title = 'View Cafe & Restaurant';
        $car = $item;
        return view('adminpanel.cafeAndRestaurants_view', compact('title', 'fontawesome', 'car'));
    }

    public function mostVisited(){
        $fontawesome = 'fa fa-coffee';
        $title = 'Most Visited/Popular';
        $car = new MostVisited;
        $cars = $car->orderBy('created_at', 'desc')->get();
        return view('adminpanel.mostVisited', compact('title', 'fontawesome', 'cars'));
    }

    public function mostVisited_new(){
        $fontawesome = 'fa fa-coffee';
        $title = 'New Most Visited/Popular';
        return view('adminpanel.mostVisited_new', compact('title', 'fontawesome'));
    }

    public function mostVisited_view(MostVisited $item){
        $fontawesome = 'fa fa-coffee';
        $title = 'View Most Visited/Popular';
        $mv = $item;
        return view('adminpanel.mostVisited_view', compact('title', 'fontawesome', 'mv'));
    }

    public function upcomingEvents(){
        $fontawesome = 'fa fa-youtube-play';
        $title = 'Upcoming Events';
        $ue = new UpcomingEvent;
        $ues = $ue->orderBy('created_at', 'desc')->get();
        return view('adminpanel.upcomingEvents', compact('title', 'fontawesome', 'ues'));
    }
}
