<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Deny's Kitchen My Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav navbar-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a href="/dashboardAdmin" class="dropdown-item">Dashboard</a>
                        </li>
                        <li>
                            <a href="/menuSetting" class="dropdown-item">Menu Setting</a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logoutAdmin" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </div>
            </div>
        </div>
    </nav>
<header>