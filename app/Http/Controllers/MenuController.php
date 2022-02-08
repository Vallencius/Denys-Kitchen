<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class MenuController extends Controller
{
    public function index(){
        $cl = '%0A';
        $pesanan = "Tahu Cabe Garam 1".$cl.
                    "Nasi 1".$cl.
                    "Ga pedes".$cl."";

        return redirect("http://wa.me/+6288233632633?text=".$pesanan);
    }
}
