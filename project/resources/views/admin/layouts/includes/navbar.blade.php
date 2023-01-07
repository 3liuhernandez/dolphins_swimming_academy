<nav class="navbar navbar-expand-lg navbar-light shadow-sm p-0">
    <div class="container container-md">
        <a class="navbar-brand m-0 p-0" href="{{ route('admin.home') }}"><img src="{{ asset('imgs/logo_white.jpg') }}" style="width: 100px; height: 80px;" alt="logo"></a>
        <button class="navbar-toggler p-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h2 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h2>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.home') }}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.logout') }}">LOGOUT</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
