@extends('admin.layouts.main')

@section('container')
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>

                                @if (session('status'))
                                    <div style="color:red; font-size:0.7em; margin:auto; text-align:center; margin-bottom:5px;">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form action="/loginAdmin" method="post" class="user">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                            id="email" name="email" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address...">
                                        @error('email')
                                            <div style="color:red; font-size:0.7em; margin-left:20px; margin-top:10px;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="password" name="password" placeholder="Password">
                                        @error('password')
                                            <div style="color:red; font-size:0.7em; margin-left:20px; margin-top:10px;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection