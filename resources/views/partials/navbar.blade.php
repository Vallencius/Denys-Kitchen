<nav class="navbar navbar-expand-md navbar-fixed-top p-3">
    <div class="container-fluid container justify-content-centre">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/logo_denys.jpg') }}" class="navbar-blue-logo">
        </a>
        <!-- <img src="{{ asset('images/BlueLogo.png')}}" class="navbar-blue-logo"> -->
        <!-- <h6 class="hashtag">#BeholdTheUnderSea</h4> -->
        <button class="navbar-toggler" type="button">
        </button>
        <div class="collapse navbar-collapse justify-content-around" id="navbarNav">
            <div class="col-2 nav-item">
                <a href="{{ route('home') }}"><img class="w-25" src="{{ asset('images/logo_denys.jpg') }}" ></a>
            </div>
            <ul class="navbar-nav col-8">
                <div class="nav-item-container mx-auto w-100 row justify-content-end">
                    <li class="nav-item col-3 text-end">
                        <a class="nav-link rounded" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item col-3 text-end">
                        <a class="nav-link rounded" href="{{ route('menu') }}">Menu</a>
                    </li>
                    <li class="nav-item col-3 text-end">
                        <a class="nav-link rounded" href="{{ route('cart') }}">Cart</a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</nav>


<input type="checkbox" id="main-navigation-toggle" class="btn btn--close" title="Toggle main navigation" />
<div class="toggler-container mt-1">
</div>
<label for="main-navigation-toggle">
    <span class="navigation-toggle-span">
    </span>
</label>
<nav id="main-navigation" class="nav-main">
    <ul class="menu">
        <li class="menu__item">
            <a class="menu__link" href="{{ route('home') }}">Home</a>
        </li>
        <li class="menu__item">
            <a class="menu__link" href="{{ route('menu') }}">Menu</a>
        </li>
        <li class="menu__item">
            <a class="menu__link" href="{{ route('cart') }}">Shopping Cart</a>
        </li>
    </ul>
</nav>