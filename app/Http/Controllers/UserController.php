<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function login(Request $r){
    	$u = new User;
    	$password = md5(hash('sha512', $r->password).hash('ripemd160', $r->password).md5("strongest"));
    	$user = $u->where('username', $r->username)->where('password', $password)->first();
    	if($user){
            session()->put('status', 1);
            session()->put('id', $user->id);
            session()->put('username', $user->username);
            session()->put('role', $user->role);
    		return redirect('/admin-panel/dashboard');
    	}else{
    		session()->flush();
            session()->flash('alertmessage', 'Wrong username or password. Please try again.');
            session()->flash('alertclass', 'error');
    		return redirect('/admin-panel/auth/login');
    	}
    }

    public function logout(){
        session()->flush();
        session()->flash('alertmessage', 'Logout Successful');
        session()->flash('alertclass', 'success');
        return redirect('/admin-panel/auth/login');
    }

    public function store(Request $r){
        $this->validate($r, [
            'username' => 'required|unique:users',
            'password' => 'required',
            'password2' => 'same:password',
        ]);

        $password = md5(hash('sha512', $r->password).hash('ripemd160', $r->password).md5("strongest"));

        $u = new User;
        $u->username = $r->username;
        $u->password = $password;
        $u->save();

        session()->flash('action', 'added');
        return redirect('/admin-panel/users');
    }

    public function destroy(User $item){
        $item->delete();
        session()->flash('action', 'deleted');
        return back();
    }
}
