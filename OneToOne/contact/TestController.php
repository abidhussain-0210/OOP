<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Category1;

class TestController extends Controller
{
    public function index(){
    				//ONE TO ONE
    				//User To Contact
    	$user = User::with('contact')->find(4);
    	return $user;

    				//contact To User
    	$contact = Contact::with('user')->find(3);
    	return $contact;
    	//dd($contact->toArray());
    }
}
