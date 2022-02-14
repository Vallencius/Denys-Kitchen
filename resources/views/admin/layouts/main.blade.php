<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $title }}</title>
    <link rel="shorcut icon" href="{{ asset('/images/logo_denys.jpg') }}">

    @yield('custom-css')
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="{{ asset('css/cms/base/fontawesome-5.15.2/css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
    
<div class="container">
    @yield('container')
</div>

@yield('custom-js')
<!-- Bootstrap core JavaScript-->
<script src="{{ asset('js/cms/base/jquery/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('js/cms/base/bootstrap/bootstrap.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('js/cms/base/jquery/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/admin/js/sb-admin-2.min.js') }}"></script>

</body>

</html>