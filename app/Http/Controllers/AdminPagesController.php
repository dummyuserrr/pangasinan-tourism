<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function posts(){
        $fontawesome = 'fa fa-book';
        $title = 'Posts';
    	return view('adminpanel.posts', compact('title', 'fontawesome'));
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
}
