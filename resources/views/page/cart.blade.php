@extends('layouts.main')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cms/page/modal.css') }}">
@endsection

@section('content')
<div class="home-desc container col-12 col-md-12 mx-auto row"  id="aboutus" style="padding-top:10rem;padding-bottom:10rem; min-height:80vh">
    <div id="main" class="main-container pt-5">
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
                                        @if( $menu->Category_id  == 15)
                                            <p>Es/Panas: {{ $order->Opsi }}</p>
                                        @else
                                            @if( $menu->Category_id == 16 || Str::contains($menu->Nama, 'Cabe Garam'))
                                            @else
                                                <p>Tingkat Kepedasan: {{ $order->Opsi }}</p>
                                            @endif
                                        @endif
                                        <p>Keterangan: {{ $order->Keterangan }}</p>
                                        <p>Total: Rp {{ $order->Quantity * $menu->Harga }}</p>
                                        <p style="display:none">{{ $total += $order->Quantity * $menu->Harga }}</p>
                                    </div>
                                    <div class="col-md-2 mt-3">
                                        <a href="#{{ $order->id }}" class="open-popup"><button class="btn btn-primary mb-3" onclick="mBlur();"><img src="{{ asset('images/logo/edit.png') }}" style="width:15px;">  Edit</button></a>
                                        <a href={{ "/deleteCart/". $order->id }}><button class="btn btn-danger mb-3"><img src="{{ asset('images/logo/delete.png') }}" style="width:15px;">  Remove</button></a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
            <div class="mt-3 row">
                <h4 class="col-md-10 text-total mb-2">Total pemesanan: Rp {{ $total }}</h4>
                <div class="col-md-2">
                    <a href="/bio"><button class="btn btn-success" style="width:100%">Order</button></a>
                </div>
            </div>
        </div>
    </div>

    @foreach($orders as $order)
    <div id="{{ $order->id }}" class="popup">
        <div class="popup__container" style="margin-top: 100px;">
            <div class="popup__content">
                <div class="row infologo">
                    @foreach($menus->where('id',$order->Menu_id) as $menu)
                    <div class="col-md-4 mb-4">
                        <img src="{{ asset('storage/'.$menu->Image) }}" class="image-fluid img-div" style="width:100%; border-radius:10px; margin-left:-30px;">
                    </div>
                    <a href="#" class="popup__close" onclick="mUnblur();" style="margin-top: 10vh; margin-right: 10%;">
                        <button class="btn btn-danger">X</button>
                    </a>
                    <div class="infologo-text col-md-8 bkgs-white" style="border: 1px solid black">
                        <form method="post" action="/updateCart">
                            @csrf
                            <input type="hidden" value="{{ $order->id }}" name="Cart_id"> 
                            <h2 class="text-color3 mt-3">{{ $menu->Nama }}</h2>
                            <p class="text-color3"><b>Rp {{ $menu->Harga }}</b></p><br>
                            <p class="text-color3">{{ $menu->Desc }}</p><br>
                            @if( $menu->Category_id == 15)
                                <p class="text-color3 mb-1">Es/Panas</p>
                                <div class="input-group mb-2">
                                    <select class="form-select" id="inputGroupSelect01" name="Opsi">
                                        <option value="Es" @if( $order->Opsi == 'Es') selected @endif>Es</option>
                                        <option value="Hangat" @if( $order->Opsi == 'Hangat') selected @endif>Hangat</option>
                                        <option value="Panas" @if( $order->Opsi == 'Panas') selected @endif>Panas</option>
                                    </select>
                                </div>
                            @else
                                @if($menu->Category_id == 16 || Str::contains($menu->Nama, 'Cabe Garam'))
                                @else
                                <p class="text-color3 mb-1">Tingkat Kepedasan</p>
                                <div class="input-group mb-2">
                                    <select class="form-select" id="inputGroupSelect01" name="Opsi">
                                        <option value="Tidak Pedas" @if( $order->Opsi == 'Tidak Pedas') selected @endif>Tidak Pedas</option>
                                        <option value="Sedang" @if( $order->Opsi == 'Sedang') selected @endif>Sedang</option>
                                        <option value="Pedas" @if( $order->Opsi == 'Pedas') selected @endif>Pedas</option>
                                    </select>
                                </div>
                                @endif
                            @endif
                            
                            <label for="Quantity" class="text-color3 mb-1">Quantity</label>
                            <input type="number" class="form-control mb-2" id="Quantity" name="Quantity" min="1" value="{{ $order->Quantity }}">
                            
                            <p class="text-color3 mb-1">Keterangan tambahan</p>
                            <input type="text" class="form-control" id="Keterangan" name="Keterangan" value="{{ $order->Keterangan }}">
                            <br>
                            <button class="btn btn-success center mb-3">
                                Update
                            </button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection

@section('custom-js')
<script>
    function mBlur() {
        var element = document.getElementById('main');
        element.classList.add("modalBlurCart");
        var x = document.getElementsByTagName("BODY")[0];
        x.style.overflow = "hidden";
        $(".navbar").hide();
        if ($(window).width() <= 767) {
            $('.navigation-toggle-span').attr('style','display:none !important');
            $('.toggler-container').attr('style','display:none !important');
        }
    }

    function mUnblur() {
        var element = document.getElementById('main');
        element.classList.remove("modalBlurCart");
        var x = document.getElementsByTagName("BODY")[0];
        x.style.overflow = "auto";
        $(".navbar").show();
        if ($(window).width() <= 767) {
            $('.navigation-toggle-span').attr('style','display:block !important');
            $('.toggler-container').attr('style','display:block !important');
        }
    }
</script>
@endsection