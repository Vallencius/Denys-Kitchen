<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use App\Models\Cart;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
// use App\Models\Menu;

class MenuController extends Controller
{
    public function wa(){
        $cl = '%0A';
        $pesanan = "Tahu Cabe Garam 1".$cl.
                    "Nasi 1".$cl.
                    "Ga pedes".$cl."";

        return redirect("http://wa.me/+6288233632633?text=".$pesanan);
    }

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
        // Alert::warning('Item sudah ada di troli', 'Silahkan blablabla');
        Alert::html('Item berhasil diupdate!','<p>Quantity: 1 => 3</p><p>Kepedasan: Tidak Pedas => Tidak Pedas</p><p>Keterangan: - => Udh itu aja</p>','success');
        return redirect('/menu');
    }

    public function deleteCart(Cart $cart){
        DB::table('carts')->where('id', '=', $cart->id)->delete();
        Alert::success('Item berhasil dihapus!');
        return redirect('/cart');
    }
}
