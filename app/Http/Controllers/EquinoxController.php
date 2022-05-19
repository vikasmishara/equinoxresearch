<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquinoxController extends Controller
{
    public function index(){return view('live.index');}
    public function about(){return view('live.pages.about_us');}
    public function services(){return view('live.pages.services');}
    public function contact_us(){return view('live.pages.contact-us');}
    public function error(){return view('live.pages.error');}
    public function coming_soon(){return view('live.pages.coming-soon');}
}
