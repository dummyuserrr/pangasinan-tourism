<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CityMun;

class CityMunController extends Controller
{
    public function store(Request $r){
    	$this->validate($r, [
    		'name' => 'required',
    		'description' => 'required',
    	]);

    	$c = new CityMun;
    	$c->name = $r->name;
    	$c->description = $r->description;
    	$c->save();

    	session()->flash('action', 'added');
    	return back();
    }

    public function destroy(CityMun $item){
    	$item->delete();

    	session()->flash('action', 'deleted');
    	return back();
    }
}
