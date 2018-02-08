<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	return view('index');
    }

    public function theProvince(){
    	return view('theProvince');
    }

    public function tourism(){
    	return view('tourism');
    }

    public function findUs(){
    	return view('findUs');
    }
}