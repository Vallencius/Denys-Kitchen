<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
// use App\Models\Cart;
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
}
