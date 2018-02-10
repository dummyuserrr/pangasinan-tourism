<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CityMun;
use App\Delicacy;

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
    	return view('adminpanel.users', compact('title', 'fontawesome'));
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
}
