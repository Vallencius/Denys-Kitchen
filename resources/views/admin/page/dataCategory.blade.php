@extends('admin.layouts.dashboard')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/admin/css/dashboard.css') }}">
@endsection

@section('content')
    <h1 class="text-center title">Data Category</h1>
    <div class="row justify-content-center">
        @if(session()->has('success'))
        <div class="alert alert-success col-md-8" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
        @endif
    </div>
        
    <div class="container text-right mb-3">
        <a href="/addCategory"><button class="btn btn-success">+ Add Category</button></a>
    </div>


    <div class="container mb-5" style="width:80%;">
        <table height="100px" id="example" class="display nowrap table-striped table-bordered table" style="width:100%" >
            <thead>
            <tr>
                <th>#</th>
                <th>Nama Kategori</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $category->Name }}</td>
                    <td>
                        <button id="moreData{{$category->id}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>  Edit</button>
                        <form action="/deleteCategory/{{ $category->id }}" method="post" class="d-inline">
                            @csrf
                            <button id="delete" class="btn btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>  Delete</button>
                        </form>

                        <div id="moreDataModal{{$category->id}}" class="data-modal">
                            <!-- Modal content -->
                            <div class="data-modal-content">
                                <form action="/updateCategory/{{ $category->id }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="data-modal-header">
                                        <span class="data-close{{$category->id}} data-close">&times;</span>
                                        <h2 class="mb-3">
                                            Edit Kategori
                                        </h2>
                                    </div>

                                    <table class="mt-5 table table-borderless">
                                        <tr>
                                            <td><label for="Name" class="text-color3 mb-1">Nama Kategori: </label></td> 
                                            <td><input type="text" class="form-control mb-2" id="Nama" name="Name" value="{{ $category->Name }}">
                                            </td>   
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
                    <th>Nama Kategori</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection

@section('custom-js')
<script style="width: 80%">
    $(document).ready(function() {
        var table = $('#example').DataTable( {
            scrollX: true,
        } );
    } );
</script>
<script>
    @foreach($categories as $category)
    // Get the modal
    var modal{{$category->id}} = document.getElementById("moreDataModal{{$category->id}}");

    // Get the button that opens the modal
    var btn{{$category->id}} = document.getElementById("moreData{{$category->id}}");

    // Get the <span> element that closes the modal
    var span{{$category->id}} = document.getElementsByClassName("data-close{{$category->id}}")[0];

    // When the user clicks on the button, open the modal
    btn{{$category->id}}.onclick = function() {
        modal{{$category->id}}.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span{{$category->id}}.onclick = function() {
        modal{{$category->id}}.style.display = "none";
    }

    //When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal{{$category->id}}) {
            modal{{$category->id}}.style.display = "none";
        }
    }
    @endforeach
</script>
@endsection