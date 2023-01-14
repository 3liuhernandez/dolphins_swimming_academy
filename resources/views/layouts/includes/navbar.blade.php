<nav class="navbar navbar-expand-lg navbar-light shadow p-0">
    <div class="container pe-lg-0">
        <a class="nav-link navbar-brand m-0 p-0 selected" href="{{ route('home') }}">
            <img src="{{ asset('imgs/logo_white-removebg.png') }}" style="width: 100px;height: auto;" alt="logo">
        </a>

        <button class="navbar-toggler p-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header border-bottom">
                <h4 class="offcanvas-title w-100 text-center text_color-blue-derivate py-1" id="offcanvasNavbarLabel">Dolphins Swimming</h4>
                <button type="button" class="btn-close selected" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body justify-content-end py-0">
                <ul class="navbar-nav row g-1 flex-row flex-wrap align-content-start h-75 pt-3 p-md-0">
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded mb-2 px-3 px-md-2 mb-lg-0 {{ session('section') === 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded mb-2 px-3 px-md-2 mb-lg-0 {{ session('section') === 'class' ? 'active' : '' }}" href="{{ route('class') }}">Clases</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded mb-2 px-3 px-md-2 mb-lg-0 {{ session('section') === 'plans' ? 'active' : '' }}" href="{{ route('plans') }}">Planes</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded mb-2 px-3 px-md-2 mb-lg-0 {{ session('section') === 'characteristics' ? 'active' : '' }}" href="{{ route('characteristics') }}">Nosotros</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded mb-2 px-3 px-md-2 mb-lg-0 {{ session('section') === 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">Contacto</a>
                    </li>

                    <div class="d-none d-lg-flex d-flex w-auto my-0 mx-2" style="height: 37px;">
                        <div class="vr bg-primary rounded"></div>
                    </div>

                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded px-3 px-md-2 {{ session('section') === 'login' ? 'active' : ''}}" href="{{ route('login') }}">Ingresar</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded mb-2 px-3 px-md-2 mb-lg-0 {{ session('section') === 'register' ? 'active' : ''}}" href="{{ route('register') }}" style="border: 1px solid var(--color-blue-derivate)">Registrarse</a>
                    </li>
                </ul>
                <hr class="d-lg-none-50 my-0">
                <ul class="navbar-nav flex-row flex-wrap d-lg-none">
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded mb-2 px-3 mb-lg-0" href="https://www.facebook.com/GoodLo0.k" target="_blank" rel="">
                            <i class="bi bi-facebook fs-4"></i>
                            <small class="d-lg-none ms-3">Facebook</small>
                        </a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded mb-2 px-3 mb-lg-0" href="https://twitter.com/_GoodLook_" target="_blank" rel="">
                            <i class="bi bi-twitter fs-4"></i>
                            <small class="d-lg-none ms-3">Twitter</small>
                        </a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded mb-2 px-3 mb-lg-0" href="https://www.instagram.com/andresitojh/" target="_blank" rel="">
                            <i class="bi bi-instagram fs-4"></i>
                            <small class="d-lg-none ms-3">Instagram</small>
                        </a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded mb-2 px-3 mb-lg-0" href="#galeria" rel="">
                            <i class="bi bi-person-workspace fs-4"></i>
                            <small class="d-lg-none ms-3">Galeria</small>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
