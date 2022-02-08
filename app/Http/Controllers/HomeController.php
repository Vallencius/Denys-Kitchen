<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('page.home', [
            'title' => "Home"
        ]);
    }

    public function aboutus(){
        return view('page.aboutus', [
            'title' => "About Us"
        ]);
    }

    public function menu(){
        return view('page.menus', [
            'title' => "Menu"
        ]);
    }

    public function location(){
        return view('page.location', [
            'title' => "Location & Hours"
        ]);
    }
    
}
