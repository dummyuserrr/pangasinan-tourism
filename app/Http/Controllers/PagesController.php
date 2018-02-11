<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CityMun;
use App\Delicacy;
use App\GalleryPhoto;

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
        $citymuns = $cm->orderBy('created_at', 'desc')->get();
        $delicacies = $d->orderBy('created_at', 'desc')->get();
        $photos = $gp->orderBy('created_at', 'desc')->get();
    	return view('theProvince', compact('title', 'citymuns', 'delicacies', 'photos'));
    }

    public function tourism(){
        $title = 'Tourism - Pangasinan Tourism';
    	return view('tourism', compact('title'));
    }

    public function findUs(){
        $title = 'Find Us - Pangasinan Tourism';
    	return view('findUs', compact('title'));
    }
}