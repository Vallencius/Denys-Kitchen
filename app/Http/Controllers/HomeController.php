<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Cart;

class HomeController extends Controller
{
    public function index(){
        return view('page.home', [
            'title' => "Home"
        ]);
    }

    public function cart(){
        return view('page.cart', [
            'title' => "Cart",
            'orders' => Cart::All()->where('User_id',1),
            'menus' => Menu::All(),
            'test' => 0
        ]);
    }

    public function menu(){
        return view('page.menus', [
            'title' => "Menu",
            'categories' => Category::All(),
            'menus' => Menu::All()
        ]);
    }
    
}
