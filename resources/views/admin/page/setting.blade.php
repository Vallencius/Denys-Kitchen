@extends('admin.layouts.dashboard')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/admin/css/dashboard.css') }}"/>
@endsection

@section('content')
<div class="container">
    <div class="text-center">
        <h1 class="title">Menu Setting</h1>
        <p>Matikan tombol untuk mengubah tampilan menu tersebut menjadi "HABIS!"</p>
        <fieldset class="mb-3 border border-dark rounded" style="width:20%">
            <div class="form-check form-switch text-start ms-2">
                <input class="form-check-input" type="checkbox" checked disabled> Menu Tersedia
                <br>
                <input class="form-check-input" type="checkbox" disabled> Menu Habis
            </div>
        </fieldset>
    </div>
    
    <div class="accordion mb-5" id="accordionExample">
        @foreach($categories as $category)
        <div class="accordion-item">
          <h2 class="accordion-header" id="heading{{ $category->id }}">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $category->id }}" aria-expanded="false" aria-controls="collapse{{ $category->id }}">
              {{ $category->Name }}
            </button>
          </h2>
          <div id="collapse{{ $category->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $category->id }}" data-bs-parent="#accordionExample">
            @foreach($menus->where('Category_id', $category->id) as $menu)
            <div class="accordion-body">
                <p>{{ $menu->Nama }}
                    <div class="form-check form-switch">
                        <input data-id="{{ $menu->id }}" class="toggle-class form-check-input" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Opened" data-off="Closed" {{ $menu->status ? 'checked' : '' }}>
                    </div>
                </p>
            </div>
            @endforeach
          </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('custom-js')
<script>
    $(function(){
        $(".toggle-class").change(function(){
            var status = ($(this).prop('checked') == true) ? 1 : 0;
            var menu_id = $(this).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "/changeStatus",
                data: {'status': status, 'menu_id': menu_id},
                success: function(data){
                    console.log('success');
                }
            });
        });
    });
</script>
@endsection