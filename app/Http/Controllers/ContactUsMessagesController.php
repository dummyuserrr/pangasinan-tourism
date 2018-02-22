<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUsMessage;

class ContactUsMessagesController extends Controller
{
    public function destroy(ContactUsMessage $item){
    	$item->delete();

    	session()->flash('action', 'deleted');
    	return back();
    }
}
