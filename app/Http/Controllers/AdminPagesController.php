<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CityMun;
use App\Delicacy;
use App\GalleryPhoto;
use App\Video;
use App\User;
use App\ContactUsMessage;

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
        $cm = new CityMun;
        $citymuns = $cm->orderBy('created_at', 'desc')->get();
        return view('adminpanel.citymun', compact('title', 'fontawesome', 'citymuns'));
    }

    public function citymun_new(){
        $fontawesome = 'fa fa-map-marker';
        $title = 'Cities and Municipalities';
        return view('adminpanel.citymun_new', compact('title', 'fontawesome'));
    }

    public function citymun_view(CityMun $item){
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
}
