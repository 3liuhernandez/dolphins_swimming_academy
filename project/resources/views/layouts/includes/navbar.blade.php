<nav class="navbar navbar-expand-lg navbar-light shadow p-0">
    <div class="container">
        <a class="navbar-brand m-0 p-0 selected" href="{{ route('home') }}"><img src="{{ asset('imgs/logo_white.jpg') }}" style="width: 100px; height: 80px;" alt="logo"></a>
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
                    <li class="nav-item selected">
                        <a class="nav-link rounded me-3 {{session('section') === 'home' ? 'active' : ''}}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item selected">
                        <a class="nav-link rounded me-3" href="">Trainings</a>
                    </li>
                    <li class="nav-item selected">
                        <a class="nav-link rounded me-3 {{session('section') === 'class' ? 'active' : ''}}" href="{{route('class')}}">Clases</a>
                    </li>
                    <li class="nav-item selected">
                        <a class="nav-link rounded me-3" href="">Shows</a>
                    </li>
                    <li class="nav-item selected">
                        <a class="nav-link rounded me-3" href="">Shortcodes</a>
                    </li>
                    <li class="nav-item selected">
                        <a class="nav-link rounded me-3 {{session('section') === 'contact' ? 'active' : ''}}" href="{{route('contact')}}">Contact</a>
                    </li>
                    <li class="nav-item selected">
                        <a class="nav-link rounded" href="{{ route('login') }}">Ingreso</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
