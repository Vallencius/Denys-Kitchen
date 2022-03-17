<?php

namespace App\Http\Controllers;

use App\Models\Recruitment;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Menu;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    public function index(){
        return view('admin.page.loginAdmin',[
            'title' => 'Denys Admin Login'
        ]);
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email'=>'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboardAdmin');
        }

        return back()->with('status', 'Invalid login details');
    }

    public function logout(){
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/loginAdmin');
    }

    public function dashboard(){
        return view('admin.page.dashboard',[
            'menus'=> Menu::All(),
            'categories' => Category::All(),
            'title'=>'Dashboard Admin',
            'i' => 1
        ]);
    }

    public function setting(){
        return view('admin.page.setting',[
            'title' => 'Menu setting',
            'menus' => Menu::All(),
            'categories' => Category::All()
        ]);
    }

    public function updateMenu(Menu $menu, Request $request){
        $valid = $request->validate([
            'Nama' => 'required|unique:menus,Nama',
            'Category_id' => 'required',
            'Harga' => 'required',
            'Desc' => 'required'
        ]);
        $menu = Menu::find($menu->id);
        $menu->Nama = $valid->Nama;
        $menu->Harga = $valid->Harga;
        $menu->Category_id = $valid->Category_id;
        $menu->Desc = $valid->Desc;
        
        if($request->Image){
            if($menu->Image){
                Storage::delete('menu/'.$menu->Image);
            }
            $menu->Image = $request->file('Image')->store('menu');
        }
        return dd($menu);
        
        $menu->update();
        Alert::success('Menu berhasil diupdate!');
        return redirect('/dashboardAdmin');
    }

    public function changeStatus(Request $request){
        $Menu = Menu::find($request->menu_id);
        $Menu->status = $request->status;
        $Menu->save();
    }

    public function deleteMenu(Menu $menu){
        $deleted = DB::table('menus')->where('id', '=', $menu->id)->delete();
        if($menu->Image){
            Storage::delete('menu/'.$menu->Image);
        }
        return redirect('/dashboardAdmin')->with('success','Data berhasil dihapus');
    }

    public function addMenu(){
        return view('admin.page.addMenu',[
            'title' => 'Add Menu',
            'categories' => Category::All(),
        ]);
    }

    public function addDataMenu(Request $request){
        // return ddd($request);
        $valid = $request->validate([
            'Nama' => 'required|unique:menus,Nama',
            'Category_id' => 'required',
            'Image' => 'required',
            'Harga' => 'required',
            'Desc' => 'required'
        ]);

        $valid['Image'] = $request->file('Image')->store('menu');
        Menu::create($valid);

        $request->session()->flash('success','Penambahan Menu Baru Berhasil!');
        return redirect('/dashboardAdmin');
    }
    
    public function addCategory(){
        return view('admin.page.addCategory',[
            'title' => 'Add Category',
        ]);
    }

    public function addDataCategory(Request $request){
        // return ddd($request);
        $valid = $request->validate([
            'Name' => 'required|unique:categories,Name',
        ]);

        Category::create($valid);

        $request->session()->flash('success','Penambahan Category Baru Berhasil!');
        return redirect('/dashboardAdmin');
    }
}