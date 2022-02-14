@extends('admin.layouts.dashboard')

@section('custom-css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css" integrity="sha512-9tISBnhZjiw7MV4a1gbemtB9tmPcoJ7ahj8QWIc0daBCdvlKjEA48oLlo6zALYm3037tPYYulT0YQyJIJJoyMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" integrity="sha512-F636MAkMAhtTplahL9F6KmTfxTmYcAcjcCkyu0f0voT3N/6vzAuJ4Num55a0gEJ+hRLHhdz3vDvZpf6kqgEa5w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

@section('content')
<div clas="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                <h1>Menu Setting</h1>
            </div>
        </div>
    </div>
    
    <div class="col-md-12">
        @foreach($menus as $menu)
            <div class="row" style="margin:30px">
                <div class="col-6 text-right">
                    <h4>{{ $menu->Nama }}
                    </h4>
                </div>

                <div class="col-6 text-right">
                    <div class="form-check form-switch">
                        <input data-id="{{ $menu->id }}" class="toggle-class form-check-input" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Opened" data-off="Closed" {{ $menu->status ? 'checked' : '' }}>
                    </div>
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