@extends('layouts.main')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cms/page/modal.css') }}">
@endsection

@section('content')
<div id="scene-3 " class="position-relative mx-auto">
    <div id="main" class="main-container pt-5" style="background-color: rgb(24, 24, 24); color:white">
    <div class="home-desc container col-8 col-md-12 mx-auto row"  id="aboutus" style="padding-top:10rem;padding-bottom:10rem;">
            <div class="row" >
                <h1 class="text-center mb-4"><img src="{{ asset('images/logo/menu.png') }}" style="width:25vw"></h1>

                @foreach($categories as $category)
                    <h4>{{ $category->Name }}</h4>
                    @foreach($menus->where('Category_id',$category->id) as $menu)
                        <div class="col-md-5 text-center container-food">
                            <img src="{{ asset('storage/'.$menu->Image) }}" class="food-image">
                            <p>{{ $menu->Nama }}</p>
                            <p>{{ $menu->Desc }}</p>
                            
                            <p class="content-harga">Rp {{ $menu->Harga }}</p>
                            <a href="#{{ $menu->id }}" class="open-popup"><button class="btn btn-success order-btn" onclick="mBlur();">+ Keranjang</button></a>
                        </div>
                    @endforeach
                @endforeach
                {{-- <a href="{{ route("pesan") }}" target="_blank" class="btn btn-primary">Test WA</button></a> --}}
            </div>
        </div>
    </div>
</div>

{{-- MODAL --}}
@foreach($menus as $menu)
<div id="{{ $menu->id }}" class="popup">
    <div class="popup__container" style="margin-top: 100px">
        <div class="popup__content">
            <div class="row infologo">
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('storage/'.$menu->Image) }}" class="image-fluid img-div" style="width:100%; border-radius:10px; margin-left:-30px;">
                </div>
                <a href="#" class="popup__close" onclick="mUnblur();" style="margin-top: 10vh; margin-right: 10%;">
                    <button class="btn btn-danger">X</button>
                </a>
                <div class="infologo-text col-md-8 bkgs-white">
                    <form method="post" action="/addCart">
                        @csrf
                        <input type="hidden" value="{{ $menu->id }}" name="Menu_id"> 
                        <h2 class="text-color1 mt-3">{{ $menu->Nama }}</h2>
                        <p class="text-color2"><b>Rp {{ $menu->Harga }}</b></p><br>
                        <p class="text-color3">{{ $menu->Desc }}</p><br>
                        <p class="text-color3 mb-1">Tingkat Kepedasan</p>
                        <div class="input-group mb-2">
                            <select class="form-select" id="inputGroupSelect01" name="Kepedasan">
                                <option value="Tidak Pedas">Tidak Pedas</option>
                                <option value="Sedang">Sedang</option>
                                <option value="Pedas">Pedas</option>
                            </select>
                        </div>
                        
                        <label for="Quantity" class="text-color3 mb-1">Quantity</label>
                        <input type="number" class="form-control mb-2" id="Quantity" name="Quantity" min="1" value="1">
                        
                        <p class="text-color3 mb-1">Keterangan tambahan</p>
                        <input type="text" class="form-control" id="Keterangan" name="Keterangan" placeholder="Isi Keterangan Disini...">
                        <br>
                        <button class="btn btn-success center mb-3">
                            Order
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection

@section('custom-js')
<script>
    function mBlur() {
        var element = document.getElementById('main');
        element.classList.add("modalBlur");
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
        element.classList.remove("modalBlur");
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