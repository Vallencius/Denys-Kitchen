<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;

class MenuController extends Controller
{
    public function addCart(Request $request){
        //Ambil all dari cart cari ada yg user dan menu id sama atau ga, kalo ada yg sama alert kalo udh ada di cart, kalo blm create
            
        $cart = Cart::where('User_token',$request->_token)->where('Menu_id',$request->Menu_id)->first();
        // return dd($cart);
        if($cart == NULL){
            if($request->Keterangan == NULL) $keterangan = '-';
            else $keterangan = $request->Keterangan;
            Cart::create([
                'User_token' => $request->_token,
                'Menu_id' => $request->Menu_id,
                'Kepedasan' => $request->Kepedasan,
                'Quantity' => $request->Quantity,
                'Keterangan' => $keterangan,
            ]);
            Alert::success('Item berhasil ditambahkan ke troli!');
            return redirect('/menu');
        }
        //Kalau udh ada di cart return sweetalert
        Alert::warning('Item sudah ada di troli', 'Silahkan ubah pesanan melalui shopping cart!');
        return redirect('/menu');
    }

    public function deleteCart(Cart $cart){
        DB::table('carts')->where('id', '=', $cart->id)->delete();
        Alert::success('Item berhasil dihapus!');
        return redirect('/cart');
    }

    public function updateCart(Request $request){
        // return dd($request);
        $cart = Cart::find($request->Cart_id);
        $cart->Quantity = $request->Quantity;
        $cart->Keterangan = $request->Keterangan;
        $cart->Kepedasan = $request->Kepedasan;
        $cart->update();
        // Alert::info('Item berhasil diupdate!');
        Alert::success('Item berhasil diupdate!');
        return redirect('/cart');
    }


    public function orderWA(Cart $cart, Request $request){
        $orders = Cart::All()->where('User_token',$cart->User_token);
        $menus = Menu::All();
        $cl = '%0A';
        $pesanan = "Nama: ".$request->Nama.$cl
                    ."Alamat: ".$request->Alamat.$cl
                    ."Uang pembayaran: ".$request->Uang.$cl.$cl;
        
        foreach($orders as $order){
            foreach($menus->where('id',$order->Menu_id) as $menu){
                $pesanan .= $menu->Nama." ".$order->Quantity.$cl
                ."Level Kepedasan: ".$order->Kepedasan.$cl
                ."Keterangan: ".$order->Keterangan.$cl.$cl;
            }
        }
        $pesanan .= "Total: Rp ".$request->Total;
        DB::table('carts')->where('User_token', '=', $cart->User_token)->delete();
        return redirect("http://wa.me/+6289530875429?text=".$pesanan);
    }
}
