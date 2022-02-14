@extends('admin.layouts.dashboard')

@section('custom-css')
<style>
    .data-modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1000; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

        /* Modal Content/Box */
    .data-modal-content {
        position: relative;
        background-color: #fefefe;
        margin: 15% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    .data-modal-content p{
        margin: 0;
        padding-left: 2%;
        padding-right: 2%;
    }

        /* The Close Button */
    .data-close {
        color: #ffffff;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .data-close:hover,
    .data-close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .data-modal-header {
        padding: 2px 16px;
        background-color: #d39c45;
        color: white;
    }
    .data-modal-header h2{
        margin : 0;
        padding : 1%;
    }
    .foto-p{
        width:30%;
        margin: auto;
        margin-bottom: 2%;
        margin-top : 3%;
    }
    .image-fluid{
        width:100%;
    }
    .header-text{
        font-size: 1.2em;
        font-weight: bold;
        color: #f56701;
        margin-top: 3%;
        margin-bottom: 1.5%;
    }
    .text-content{
        color: black;
        text-align: justify;
    }
</style>
@endsection

@section('content')
    <h1 class="text-center">Data Menu</h1>
    <div class="row justify-content-center">
        @if(session()->has('success'))
        <div class="alert alert-success col-md-8" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close pull-right" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
        @endif
    </div>
        
    <div class="container text-right mb-3">
        <a href="/addCategory"><button class="btn btn-success">+ Add Category</button></a>
        <a href="/addMenu"><button class="btn btn-success">+ Add Menu</button></a>
    </div>


    <div class="container" style="width:80%;">
        <table height="100px" id="example" class="table table-striped table-bordered" style="width:100%" >
            <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($menus as $menu)
                    <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $menu->Nama }}</td>
                    <td>{{ $categories->where('id',$menu->Category_id)->first()->Name }}</td>
                    <td>{{ $menu->Harga }}</td>
                    <td>{{ $menu->Desc }}</td>
                    <td><img src="{{ asset('storage/'.$menu->Image) }}" alt="" class="image-fluid"></td>
                    <td>
                        <button id="moreData{{$menu->id}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>  Edit</button>
                        <form action="/deleteMenu/{{ $menu->id }}" method="post" class="d-inline">
                            @csrf
                            <button id="delete" class="btn btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>  Delete</button>
                        </form>

                        <div id="moreDataModal{{$menu->id}}" class="data-modal">
                            <!-- Modal content -->
                            <div class="data-modal-content">
                                <form action="/updateMenu/{{ $menu->id }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="data-modal-header">
                                        <span class="data-close{{$menu->id}} data-close">&times;</span>
                                        <h2 class="mb-3">
                                            Edit Menu
                                        </h2>
                                    </div>

                                    <table class="mt-5">
                                        <tr>
                                            <td><label for="Nama" class="text-color3 mb-1">Nama Menu: </label></td> 
                                            <td><input type="text" class="form-control mb-2" id="Nama" name="Nama" min="1" value="{{ $menu->Nama }}">
                                            </td>   
                                        </tr>
                                        <tr>
                                            <td><label for="Category" class="text-color3 mb-1">Kategori</label></td>
                                            <td><div class="input-group mb-2">
                                                    <select class="form-select" id="inputGroupSelect01" name="Category_id">
                                                        @foreach($categories as $category)
                                                            <option value="{{ $category->id }}" @if( $category->id == $menu->Category_id) selected @endif>{{ $category->Name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="Harga" class="text-color3 mb-1">Harga: </label></td>
                                            <td><input type="text" class="form-control mb-2" id="Harga" name="Harga" value="{{ $menu->Harga }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="Desc" class="text-color3 mb-1">Deskripsi: </label></td>
                                            <td><input type="text" class="form-control mb-2" id="Desc" name="Desc" value="{{ $menu->Desc }}"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="Image" class="form-label">Foto Makanan:</label></td>
                                            <td><input class="form-control @error('Image') is-invalid @enderror mb-2" type="file" id="Image" name="Image"></td>
                                        </tr>
                                    </table>
                                    
                                
                                    <br>
                                    <button class="btn btn-success center mb-3">
                                        Update
                                    </button>
                                </form>
                            </div>
                        </div>
                    </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection

@section('custom-js')
<script style="width: 80%">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script>
    @foreach($menus as $menu)
    // Get the modal
    var modal{{$menu->id}} = document.getElementById("moreDataModal{{$menu->id}}");

    // Get the button that opens the modal
    var btn{{$menu->id}} = document.getElementById("moreData{{$menu->id}}");

    // Get the <span> element that closes the modal
    var span{{$menu->id}} = document.getElementsByClassName("data-close{{$menu->id}}")[0];

    // When the user clicks on the button, open the modal
    btn{{$menu->id}}.onclick = function() {
        modal{{$menu->id}}.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span{{$menu->id}}.onclick = function() {
        modal{{$menu->id}}.style.display = "none";
    }

    //When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal{{$menu->id}}) {
            modal{{$menu->id}}.style.display = "none";
        }
    }
    @endforeach
</script>
@endsection