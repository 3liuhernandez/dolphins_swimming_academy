<nav class="navbar navbar-expand-lg bg-white shadow p-0 p-lg-auto">
    <div class="container">
        <a class="nav-link navbar-brand m-0 p-0 selected" href="{{ route('home') }}">
            <img src="{{ asset('imgs/images_logos/logo_whitebgremove.WebP') }}" style="width: 50%; vertical-align: top" alt="logo">
        </a>
        <button class="navbar-toggler p-1" aria-label="menu items" onmousedown="sonido.play()" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header border-bottom text-center py-1">
                <div class="col-11">
                    <h4 class="display-5 offcanvas-title w-100 text-center text_color-blue-derivate py-2" id="offcanvasNavbarLabel">Dolphins Swimming</h4>
                </div>
                <div class="col-1">
                    <button type="button" class="btn-close mt-1" onmousedown="sonido.play()" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
            </div>
            <div class="offcanvas-body d-flex flex-column justify-content-between flex-lg-row justify-content-lg-end">
                
                <ul id="menu_top" class="navbar-nav justify-content-lg-end flex-row flex-wrap">
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link {{ session('section') === 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link {{ session('section') === 'class' ? 'active' : '' }}" href="{{ route('class') }}">Clases</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link {{ session('section') === 'plans' ? 'active' : '' }}" href="{{ route('plans') }}">Planes</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link {{ session('section') === 'characteristics' ? 'active' : '' }}" href="{{ route('characteristics') }}">Nosotros</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link {{ session('section') === 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">Contacto</a>
                    </li>

                    <div class="d-none mx-2 d-lg-flex h-100">
                        <div class="vr"></div>
                    </div>

                    <li class="nav-item col-6 me-lg-2 col-lg-auto selected">
                        <a class="nav-link {{ session('section') === 'login' ? 'active' : '' }}" href="{{ route('login') }}">Ingresar</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded p-lg-1 {{ session('section') === 'register' ? 'active' : '' }}" href="{{ route('register') }}" style="border: 1px solid var(--color-blue-derivate)">Registrarse</a>
                    </li>
                    
                </ul>

                <ul class="navbar-nav flex-row flex-wrap pt-4 border-top d-lg-none">
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded" href="#" target="_blank" rel="">
                            <i class="bi bi-facebook"></i>
                            <small class="d-lg-none ms-3">Facebook</small>
                        </a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded" href="#" target="_blank" rel="">
                            <i class="bi bi-twitter"></i>
                            <small class="d-lg-none ms-3">Twitter</small>
                        </a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded" href="#"target="_blank" rel="">
                            <i class="bi bi-instagram"></i>
                            <small class="d-lg-none ms-3">Instagram</small>
                        </a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto selected">
                        <a class="nav-link rounded" href="#" rel="">
                            <i class="bi bi-person-workspace"></i>
                            <small class="d-lg-none ms-3">Galeria</small>
                        </a>
                    </li>
                </ul>
            
            </div>
        </div>
    </div>
</nav>
