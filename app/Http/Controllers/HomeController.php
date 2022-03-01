<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Cart;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index(){
        return view('page.home', [
            'title' => "Home"
        ]);
    }

    public function cart(){
        $value = request()->session()->all();
        return view('page.cart', [
            'title' => "Cart",
            'orders' => Cart::All()->where('User_token',$value['_token']),
            'menus' => Menu::All(),
            'test' => 0,
        ]);
    }

    public function menu(){
        $value = request()->session()->all();
        return view('page.menus', [
            'title' => "Menu",
            'categories' => Category::All(),
            'menus' => Menu::All()
        ]);
    }

    public function menuDetail(Category $category){
        $value = request()->session()->all();
        return view('page.menuDetail', [
            'title' => "Menu",
            'category' => $category,
            'menus' => Menu::All()->where('Category_id',$category->id),
        ]);
    }
    
    public function bio(){
        $value = request()->session()->all();
        if(Cart::All()->where('User_token',$value['_token'])->first() == NULL){
            Alert::warning("Troli masih kosong!");
            return redirect("/cart");
        }
        return view('page.bio',[
            'title' => "Deny's Kitchen",
            'orders' => Cart::All()->where('User_token',$value['_token']),
            'menus' => Menu::All(),
            'test' => 0,
            'user' => $value['_token']
        ]);
    }
}
