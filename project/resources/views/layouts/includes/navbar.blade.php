<nav class="navbar navbar-expand-lg navbar-light shadow p-0">
    <div class="container">
        <a class="navbar-brand m-0" href="{{ route('home') }}"><img src="{{ asset('imgs/logo_blue_bg_remove.png') }}" class="w-25" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon p-1"></span>
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h2 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h2>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">TRAININGS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">CLASSES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">SHOWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">SHORTCODES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">INGRESO</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
