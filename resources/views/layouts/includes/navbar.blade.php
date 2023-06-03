<nav id="navbar" class="navbar navbar-expand-sm bg-white shadow">
    <div class="container-fluid">
        <a class="img-container nav-link d-flex align-items-center" href="home">
            <img src="{{ asset('imgs/images_logos/logo_academy.WebP') }}" alt="logo">
        </a>

        <button class="navbar-toggler p-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon p-3"></span>
        </button>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header offcanvas-header border-2 border-bottom">
                <a class="nav-link" href="home">
                    <img src="{{ asset('imgs/images_logos/logo_academy.WebP') }}" alt="logo">
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" style="margin-right: .5rem;padding:.7rem"></button>
            </div>
            <div class="offcanvas-body d-flex flex-column justify-content-between flex-md-row justify-content-md-end">
                <ul id="menu_top" class="navbar-nav justify-content-lg-end flex-row flex-wrap align-content-start align-items-center">
                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link {{ session('section') === 'home' ? 'active' : '' }}" href="{{ route('home') }}">
                            <i class="fa-solid fa-house d-md-none"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link {{ session('section') === 'class' ? 'active' : '' }}" href="{{ route('class') }}">
                            <i class="fa-solid fa-universal-access d-md-none"></i>
                            Clases
                        </a>
                    </li>
                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link {{ session('section') === 'plans' ? 'active' : '' }}" href="{{ route('plans') }}">
                            <i class="fa-brands fa-cc-visa d-md-none"></i>
                            Planes
                        </a>
                    </li>

                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link {{ session('section') === 'characteristics' ? 'active' : '' }}" href="{{ route('characteristics') }}">
                            <i class="fa-solid fa-people-group d-md-none"></i>
                            Nosotros
                        </a>
                    </li>
                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link {{ session('section') === 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">
                            <i class="fa-solid fa-envelopes-bulk d-md-none"></i>
                            Contacto
                        </a>
                    </li>

                    <div class="d-none mx-2 d-lg-flex h-100">
                        <div class="vr"></div>
                    </div>

                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link {{ session('section') === 'login' ? 'active' : '' }}" href="{{ route('login') }}">
                            <i class="fa-solid fa-right-to-bracket d-md-none"></i>
                            Login
                        </a>
                    </li>
                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link rounded {{ session('section') === 'register' ? 'active' : '' }}" href="{{ route('register') }}" style="border:1px solid var(--color-blue-derivate)">
                            <i class="fa-solid fa-user-plus d-md-none"></i>
                            Registro
                        </a>
                    </li>

                </ul>

                <ul id="menu_top" class="navbar-nav d-sm-none flex-row flex-wrap align-content-start">
                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link" target="_blank" href="#Dolphyns">
                            <i class="fa-brands fa-facebook"></i>
                            Facebook
                        </a>
                    </li>
                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link" target="_blank" href="#Dolphyns">
                            <i class="fa-brands fa-square-instagram"></i>
                            Instagram
                        </a>
                    </li>
                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link" target="_blank" href="#Dolphyns">
                            <i class="fa-brands fa-linkedin"></i>
                            Linkedin
                        </a>
                    </li>
                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link" target="_blank" href="#Dolphyns">
                            <i class="fa-brands fa-youtube"></i>
                            Youtube
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
