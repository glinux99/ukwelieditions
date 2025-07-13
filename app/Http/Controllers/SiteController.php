<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view("home");
    }
    public function about(){
        return view("about");
    }
    public function contact(){
        return view("contact");
    }
    public function services(){
        return view("service");
    }
    public function books(){
        return view("livre");
    }
    public function blogs(){
        return view("blog");
    }
}
