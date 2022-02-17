<nav class="navbar navbar-expand-md navbar-fixed-top p-3">
    <div class="container-fluid container justify-content-centre">
        <button class="navbar-toggler" type="button">
        </button>
        <div class="navbar-collapse justify-content-around" id="navbarNav">
            <div class="col-md-2 nav-item nav-pic">
                <a href="{{ route('home') }}"><img class="w-25" src="{{ asset('images/logo_denys.jpg') }}" ></a>
            </div>
            <ul class="navbar-nav col-md-8">
                <div class="nav-item-container mx-auto w-100 row justify-content-center">
                    <li class="nav-item col-3 text-center">
                        <a class="nav-link rounded @if($_SERVER['REQUEST_URI'] == '/') navbar-active @endif" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item col-3 text-center">
                        <a class="nav-link rounded @if($_SERVER['REQUEST_URI'] == '/menu') navbar-active @endif" href="{{ route('menu') }}">Menu</a>
                    </li>
                    <li class="nav-item col-3 text-center">
                        <a class="nav-link rounded @if($_SERVER['REQUEST_URI'] == '/cart') navbar-active @endif" href="{{ route('cart') }}">Cart</a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</nav>