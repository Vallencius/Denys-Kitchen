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
        <input type="text" class="form-control @error('Nama') is-invalid @enderror" id="Nama" name="Nama" placeholder="Masukkan Nama Makanan" value="{{ old('Nama') }}" required>
        @error('Nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

        <label for="Category_id" class="text-color3 mb-1 mt-2">Kategori</label>
        <div class="input-group">
            <select class="form-select" id="inputGroupSelect01" name="Category_id">
                @foreach($categories as $category)
                    <option @if(old('Category_id') == $category->id) selected @endif value="{{ $category->id }}">{{ $category->Name }}</option>
                @endforeach
            </select>
        </div>
        @error('Category_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

        <div>
            <label for="Image" class="form-label mt-2">Foto Makanan</label>
            <input class="form-control @error('Image') is-invalid @enderror" type="file" id="Image" name="Image">
        </div>
        @error('Image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        
        <label for="Harga" class="text-color3 mb-1 mt-2">Harga</label>
        <div class="input-group">
            <span class="input-group-text">Rp</span>
            <input type="number" class="form-control @error('Harga') is-invalid @enderror" id="Harga" name="Harga" aria-describedby="basic-addon1" placeholder="20.000" value="{{ old('Harga') }}" required>
        </div>
        @error('Harga')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

        <label for="Desc" class="text-color3 mb-1 mt-2">Deskripsi</label>
        <input type="text" class="form-control @error('Desc') is-invalid @enderror" id="Desc" name="Desc" placeholder="Masukkan deskripsi" value="{{ old('Desc') }}" required>
        @error('Desc')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

        <button type="submit" class="btn btn-success center mb-3 mt-3">
            Submit
        </button>
    </form>
</div>
   
@endsection