<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UpcomingEvent;

class UpcomingEventController extends Controller
{
    public function store(Request $r){
    	$this->validate($r, [
    		'what' => 'required',
    		'where' => 'required',
    		'date' => 'required'
    	]);

		$ue = new UpcomingEvent;
		$ue->what = $r->what;
		$ue->where = $r->where;
		$ue->date = $r->date;
		$ue->save(); 

        session()->flash('action', 'added');
		return back();
    }

    public function patch(UpcomingEvent $item, Request $r){
    	$this->validate($r, [
    		'what' => 'required',
    		'where' => 'required',
    		'date' => 'required'
    	]);
    	
		$item->update([
     		'what' => $r->what,
    		'where' => $r->where,
    		'date' => $r->date
     	]);	

        session()->flash('action', 'updated');
		return back();
    }

    public function destroy(UpcomingEvent $item){
    	$item->delete();
        session()->flash('action', 'deleted');
    	return back();
    }
}
