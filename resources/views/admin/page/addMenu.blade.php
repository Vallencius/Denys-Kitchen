@extends('admin.layouts.dashboard')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/cart.css') }}">   
    <link rel="stylesheet" href="{{ asset('css/admin/css/dashboard.css') }}">
@endsection

@section('content')
<h1 class="text-center title">Tambah Menu</h1>
<div class="container" style="width: 80vw; font-size:14px">
    <form method="post" action="/addMenu" enctype="multipart/form-data">
        @csrf
        <label for="Nama" class="text-color3 mb-1">Nama Makanan</label>
        <input type="text" class="form-control mb-2" id="Nama" name="Nama" placeholder="Masukkan Nama Makanan" required>
        
        <label for="Category" class="text-color3 mb-1">Kategori</label>
        <div class="input-group mb-2">
            <select class="form-select" id="inputGroupSelect01" name="Category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->Name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="Image" class="form-label">Foto Makanan</label>
            <input class="form-control @error('Image') is-invalid @enderror mb-2" type="file" id="Image" name="Image">
        </div>
        
        @error('Image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        
        <label for="Harga" class="text-color3">Harga</label>
        <div class="input-group mb-2">
            <span class="input-group-text">Rp</span>
            <input type="number" class="form-control " id="Harga" name="Harga" aria-describedby="basic-addon1" placeholder="20.000" step="500" required>
        </div>

        <label for="Desc" class="text-color3 mb-1">Deskripsi</label>
        <input type="text" class="form-control" id="Desc" name="Desc" placeholder="Masukkan deskripsi" required>
            
        <button type="submit" class="btn btn-success center mb-3 mt-3">
            Submit
        </button>
    </form>
</div>
   
@endsection