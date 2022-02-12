<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use App\Models\Cart;
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
            return redirect('/menu');
        }
        //Kalau udh ada di cart return sweetalert
        return dd('Udh ada di cart');
    }
}
