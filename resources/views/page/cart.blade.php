@extends('layouts.main')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/cart.css') }}">
@endsection

@section('content')
<div class="home-desc container col-12 col-md-12 mx-auto row"  id="aboutus" style="padding-top:10rem;padding-bottom:10rem;">
    <div class="row" >
        <div class="mb-2">
            <h1 class="text-center"><img src="{{ asset('images/logo/cart.png') }}" style="width:8vh; margin-right:1vw">KERANJANG</h1>
        </div>
        @foreach($orders as $order)
        <div class="card">
            <ul class="list-group list-group-flush d-inline-block">
                @foreach($menus->where('id',$order->Menu_id) as $menu)
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-10">
                                <h5>{{ $menu->Nama }}</h5>
                                <p>Jumlah: {{ $order->Quantity }}</p>
                                <p>Tingkat Kepedasan: {{ $order->Kepedasan }}</p>
                                <p>Keterangan: {{ $order->Keterangan }}</p>
                                <p>Total: Rp {{ $order->Quantity * $menu->Harga }}</p>
                                <p style="display:none">{{ $test += $order->Quantity * $menu->Harga }}</p>
                            </div>
                            <div class="col-md-2 mt-3">
                                <button class="btn btn-primary mb-3"><img src="{{ asset('images/logo/edit.png') }}" style="width:15px;">  Edit</button>
                                <button class="btn btn-danger mb-3"><img src="{{ asset('images/logo/delete.png') }}" style="width:15px;">  Remove</button>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        @endforeach
        <div class="mt-3 row">
            <h4 class="col-md-10 text-total mb-2">Total pemesanan: Rp {{ $test }}</h4>
            <div class="col-md-2">
                <button class="btn btn-success" style="width:100%">Order</button>
            </div>
        </div>
    </div>
</div>
@endsection