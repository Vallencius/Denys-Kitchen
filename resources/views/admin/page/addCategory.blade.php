@extends('admin.layouts.dashboard')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/cart.css') }}">   
    <link rel="stylesheet" href="{{ asset('css/admin/css/dashboard.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
@endsection

@section('content')
<h1 class="text-center title">Tambah Category</h1>
<div class="container" style="width: 80vw; font-size:14px">
    <form method="post" action="/addCategory">
        @csrf
        <label for="Name" class="text-color3 mb-1">Nama Category</label>
        <input type="text" class="form-control mb-2" id="Name" name="Name" placeholder="Masukkan Nama Category" required>
            
        <button type="submit" class="btn btn-success center mb-3 mt-3">
            Submit
        </button>
    </form>
</div>
   
@endsection