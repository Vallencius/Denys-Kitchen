@extends('layouts.main')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/menu.css') }}">
@endsection

@section('content')
<div id="main" class="main-container pt-5" style="background-color: rgb(24, 24, 24); color:white;">
    <div class="home-desc container col-8 col-md-12 mx-auto row"  id="aboutus" style="">
        <div class="row" style="margin: 0 auto" >
            <h1 class="text-center mb-4"><img src="{{ asset('images/logo/menu.png') }}" style="width:25vw; min-width: 150px"></h1>
            <h1 class="text-center mt-3 mb-5 title1">Pilih Kategori Menu!</h1>
            @foreach($categories as $category)
                @if(Str::contains($category->Name, 'Minuman'))
                @else
                <a href="menu/{{ $category->id }}" class="text-decoration-none">
                    <div class="col-md-5 text-center container-food mt-2">
                        <h3 class="text-center text-uppercase category-title">{{ $category->Name }}</h3>
                    </div>
                </a>
                @endif
            @endforeach
            @foreach($categories as $category)
                @if(Str::contains($category->Name, 'Minuman'))
                <a href="menu/{{ $category->id }}" class="text-decoration-none">
                    <div class="col-md-5 text-center container-food mt-2">
                        <h3 class="text-center text-uppercase category-title">{{ $category->Name }}</h3>
                    </div>
                </a>
                @else
                @endif
            @endforeach
        </div>
    </div>
</div>
@endsection
