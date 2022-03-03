<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand navbar-title" href="#">Deny's Kicthen My Admin</a>
      <a class="navbar-brand navbar-title-mobile" href="#">Admin</a>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
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
        </ul>
    </div>
  </nav>