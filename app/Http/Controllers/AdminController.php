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

    public function dataCategory(){
        return view('admin.page.dataCategory',[
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
        // return dd($request);
        $menu = Menu::find($menu->id);
        $menu->Nama = $request->Nama;
        $menu->Harga = $request->Harga;
        $menu->Category_id = $request->Category_id;
        $menu->Desc = $request->Desc;
        if($request->Image){
            $valid = $request->validate([
                'Image' => 'required|image|file|max:2048'
            ]);
            if($menu->Image){
                Storage::delete($menu->Image);
            }
            $menu->Image = $request->file('Image')->store('');
        }
        
        $menu->update();
        return redirect('/dashboardAdmin')->with('success','Menu berhasil diupdate!');
    }

    public function changeStatus(Request $request){
        $Menu = Menu::find($request->menu_id);
        $Menu->status = $request->status;
        $Menu->save();
    }

    public function deleteMenu(Menu $menu){
        $deleted = DB::table('menus')->where('id', '=', $menu->id)->delete();
        if($menu->Image){
            Storage::delete($menu->Image);
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
            'Harga' => 'required',
            'Desc' => 'required'
        ]);

        if($request->Image){
            $valid['Image'] = $request->file('Image')->store('');
        }else{
            $valid['Image'] = "no-image.png";
        }
        Menu::create($valid);

        $request->session();
        return redirect('/dashboardAdmin')->with('success','Penambahan Menu Baru Berhasil!');
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

        $request->session();
        return redirect('/dataCategory')->with('success','Penambahan Category Baru Berhasil!');
    }

    public function updateCategory(Category $category, Request $request){
        $category->Name = $request->Name;
        
        $category->update();
        return redirect('/dataCategory')->with('success','Kategori berhasil diupdate!');
    }

    public function deleteCategory(Category $category){
        $deleted = DB::table('categories')->where('id', '=', $category->id)->delete();

        $deleted = DB::table('menus')->where('Category_id', '=', $category->id)->delete();
        
        return redirect('/dataCategory')->with('success','Data berhasil dihapus');
    }
}
