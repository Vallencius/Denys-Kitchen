@extends('layouts.main')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/cart.css') }}">
@endsection

@section('content')
<div class="home-desc container col-12 col-md-12 mx-auto row"  id="aboutus" style="padding-top:10rem;padding-bottom:10rem; min-height:80vh">
    <h1 class="text-center">Data Pengiriman</h1>
    <form method="post" action="/orderWA/{{ $user }}">
        @csrf
        <label for="Nama" class="text-color3 mb-1">Nama</label>
        <input type="text" class="form-control mb-2" id="Nama" name="Nama" placeholder="Deny's Kitchen" required>
        
        <label for="Alamat" class="text-color3 mb-1">Alamat</label>
        <input type="text" class="form-control mb-2" id="Alamat" name="Alamat" placeholder="Jl. ABC No. 123, Salatiga" required>

        <label for="Uang" class="text-color3 mb-1">Uang Pembayaran</label>
        <div class="input-group">
            <span class="input-group-text">Rp</span>
            <input type="text" class="form-control" id="Uang" name="Uang" placeholder="50.000" required>
        </div>

        @foreach($orders as $order)
                @foreach($menus->where('id',$order->Menu_id) as $menu)
                    <p style="display:none">{{ $test += $order->Quantity * $menu->Harga }}</p>
                @endforeach
        @endforeach
        <h5 class="text-color3 mt-2">Total pemesanan: Rp {{ $test }}</h5>
        <input type="hidden" name="Total" value="{{ $test }}">
            
        <button class="btn btn-success center mb-3 mt-3">
            Order
        </button>
    </form>
</div>
@endsection