<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
    	return view('index');
    }
    public function about()
    {
    	return view('pages.about');
    }
    public function contact()
    {
    	return view('pages.contact');
    }
    public function indexFull()
    {
    	return view('pages.index-full');
    }
    public function indexLeftSidebar()
    {
    	return view('pages.index-full-left');
    }
    public function indexRightSidebar()
    {
    	return view('pages.index-full-right');
    }
    public function indexListStyle()
    {
    	return view('pages.index-list');
    }
    public function indexListLeft()
    {
    	return view('pages.index-list-left');
    }
    public function indexListRight()
    {
    	return view('pages.index-list-Right');
    }
}
