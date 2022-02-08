@extends('layouts.main')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/about-us.css') }}">
@endsection

@section('content')
<div id="scene-3" class="position-relative mx-auto">
  <div class="home-desc container col-12 col-md-10 mx-auto row"  id="aboutus" style="padding-top:10rem;padding-bottom:10rem;background-image:url({{ asset('images/home/umn-eco-background.png') }});">
        <div class="row" style="background-color: rgb(24, 24, 24); color:white">
            <h1 >Welcome to Deny's Kitchen</h1>
            <a href="{{ route("pesan") }}"><button class="btn btn-primary">Test WA</button></a>
        </div>
    </div>
</div>
@endsection
