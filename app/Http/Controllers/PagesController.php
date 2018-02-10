<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Pangasinan Tourism';
    	return view('index', compact('title'));
    }

    public function theProvince(){
        $title = 'The Province - Pangasinan Tourism';
    	return view('theProvince', compact('title'));
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