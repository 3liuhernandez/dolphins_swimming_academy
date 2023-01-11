<nav class="navbar navbar-expand-lg navbar-light shadow p-0">
    <div class="container">
        <a class="navbar-brand m-0 p-0 selected" href="{{ route('home') }}"><img src="{{ asset('imgs/logo_white-removebg.png') }}" style="width: 127px;height: 57px;padding:.3rem;" alt="logo"></a>
        <button class="navbar-toggler p-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header border-bottom bg_color-blue-main">
                <h4 class="offcanvas-title w-100 text-center text-white" id="offcanvasNavbarLabel">Dolphins Swimming</h4>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body justify-content-end">
                <ul class="navbar-nav row g-1 flex-row flex-wrap align-content-start h-75">
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded mb-2 px-3 mb-lg-0 {{ session('section') === 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded mb-2 px-3 mb-lg-0" href="">Trainings</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded mb-2 px-3 mb-lg-0 {{ session('section') === 'class' ? 'active' : '' }}" href="{{ route('class') }}">Clases</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded mb-2 px-3 mb-lg-0" href="">Shows</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded mb-2 px-3 mb-lg-0 {{ session('section') === 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded px-3 {{ session('section') === 'login' ? 'active' : '' }}"" href="{{ route('login') }}">Ingreso</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded mb-2 px-3 mb-lg-0 {{ session('section') === 'register' ? 'active' : '' }}" href="{{ route('register') }}">Registrarse</a>
                    </li>
                </ul>
                <hr class="d-lg-none-50">
                <ul class="navbar-nav flex-row flex-wrap d-lg-none">
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded mb-2 px-3 mb-lg-0" href="https://github.com/Abihatar" target="_blank" rel="">
                            <i class="bi bi-github"></i>
                            <small class="d-lg-none ms-3">Facebook</small>
                        </a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded mb-2 px-3 mb-lg-0" href="https://twitter.com/_GoodLook_" target="_blank" rel="">
                            <i class="bi bi-twitter"></i>
                            <small class="d-lg-none ms-3">Twitter</small>
                        </a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded mb-2 px-3 mb-lg-0" href="#" target="_blank" rel="">
                            <i class="bi bi-hash"></i>
                            <small class="d-lg-none ms-3">Instagram</small>
                        </a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded mb-2 px-3 mb-lg-0" href="#" target="_blank" rel="">
                            <i class="bi bi-person-workspace"></i>
                            <small class="d-lg-none ms-3">Collective</small>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
