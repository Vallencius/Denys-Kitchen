@extends('layouts.main')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/about-us.css') }}">
@endsection

@section('content')
<div id="scene-3" class="position-relative mx-auto">
  <div class="home-desc container col-12 col-md-10 mx-auto row"  id="aboutus" style="padding-top:10rem;padding-bottom:10rem;background-image:url({{ asset('images/home/umn-eco-background.png') }});">
        <div class="row" style="background-color: rgb(24, 24, 24)">
          <div class="col-md-6 text-center" style="color:#fff; margin:auto">
              <h1>Welcome to</h1>
              <h1>Deny's Kitchen</h1>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-4">
              <img src="{{ asset('/images/logo_denys.jpg') }}" alt="" width="100%" class="d-inline-block align-text-top" style="margin-right:10px">
          </div>
          <div class="col-md-1"></div>
      </div>
      <div class="pt-5" style="height:200px;"></div>
      <div class="row" style="background-color:khaki">
          <div class="col-md-1" style="background-color:khaki"></div>
          <div class="col-md-5 mt-4 mb-4" style="background-color:khaki">
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="line-height: 40px">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{ asset('/images/jamur_crispy.jpg') }}" class="d-block w-100" alt="Jamur Crispy">
                      <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0,0,0,0.7)">
                        <h5>Jamur Crispy</h5>
                        <p>Jamur digoreng dengan tepung crispy, buat lauk cucok banget.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('/images/ricebowl.jpg') }}" class="d-block w-100" alt="Ricebowl">
                      <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0,0,0,0.7)">
                        <h5>Ricebowl</h5>
                        <p>Nasi dan Ayam + telur di mangkuk.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('/images/cumi_tepung.jpg') }}" class="d-block w-100" alt="Cumi Tepung">
                      <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0,0,0,0.7)">
                        <h5>Cumi cabe Garam</h5>
                        <p>Cumi dengan Bumbu Cabe Garam yang pedes pedes enak.</p>
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
          </div>
          <div class="col-md-4 text-center" style="color:#111; margin:auto;">
              <h1>Kunjungi Kami</h1>
              <h5>Buka dari pukul 9:00 WIB hingga 21:00 WIB</h5>
              <p>Jalan Kotabaru 5 No. 219, Sidorejo, Salatiga</p>
              <br>
              <h3>Also available in </h3>
              <div class="mb-5">
                <a href="https://gofood.link/u/qrlPn"><img src="{{ asset('/images/gofood.png') }}"  alt="Gofood" style="height:100px"></a>
                <a href=https://grab.onelink.me/2695613898?pid=inappsharing&c=6-CYWGG4DZGPTJGX&is_retargeting=true&af_dp=grab%3A%2F%2Fopen%3FscreenType%3DGRABFOOD%26sourceID%3DA4pcqCZkS4%26merchantIDs%3D6-CYWGG4DZGPTJGX&af_force_deeplink=true&af_web_dp=https%3A%2F%2Fwww.grab.com"><img src="{{ asset('/images/grabfood.png') }}"  alt="Grabfood" style="height:100px"></a>
              </div>
              
          </div>
      </div>
</div>
@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/page/about-us.js') }}"></script>
@endsection
