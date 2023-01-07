<aside class="col-sm-3 col-lg-2 flex-grow-sm-1 flex-shrink-1 flex-grow-0 sticky-top p-0 pb-3 pb-lg-0">
    <div class="panel_container bg-light border border-top-0 p-1 h-100">
        <ul class="nav nav-pills flex-sm-column flex-row mb-auto justify-content-around p-3">

            <li class="nav-item mb-md-3 d-none d-lg-block d-flex flex-column align-items-center selected">
                <a href="{{ route('admin.home') }}" class="nav-link text-center">
                    <img src="{{ asset('imgs/logo_white.jpg') }}" style="width: 150px; height: 100px;" alt="logo">
                </a>
            </li>

            <hr class="d-none d-md-block">

            <li class="nav-item mb-md-3 d-flex align-items-center selected">
                <a href="{{ route('admin.home') }}"
                    class="nav-link w-100 p-md-2 {{ session('section') === 'home' ? 'active' : '' }}">
                    <i class="bi bi-speedometer h4 me-md-3"></i>
                    <span class="d-none d-sm-inline">Dashboard</span>
                </a>
            </li>

            <li class="nav-item mb-md-3 d-flex align-items-center selected">
                <a href="{{ route('students') }}"
                    class="nav-link w-100 p-md-2 {{ session('section') === 'students' ? 'active' : '' }}">
                    <i class="bi bi-card-text h4 me-md-3"></i>
                    <span class="d-none d-sm-inline">Estudiantes</span>
                </a>
            </li>

            <li class="nav-item mb-md-3 d-flex align-items-center selected">
                <a href="#" class="nav-link w-100 p-md-2 {{ session('section') === 'parents' ? 'active' : '' }}">
                    <i class="bi bi-bricks h4 me-md-3"></i>
                    <span class="d-none d-sm-inline">Representates</span>
                </a>
            </li>

            <li class="nav-item mb-md-3 d-flex align-items-center selected">
                <a href="#" class="nav-link w-100 p-md-2 {{ session('section') === 'planes' ? 'active' : '' }}">
                    <i class="bi bi-people h4 me-md-3"></i>
                    <span class="d-none d-sm-inline">Planes</span>
                </a>
            </li>

            <li class="nav-item mb-md-3 d-flex align-items-center selected">
                <a href="#" class="nav-link w-100 p-md-2 {{ session('section') === 'users' ? 'active' : '' }}">
                    <i class="bi bi-people h4 me-md-3"></i>
                    <span class="d-none d-sm-inline">Usuarios</span>
                </a>
            </li>

            <hr class="d-none d-md-block">

            <li class="nav-item mb-md-3 d-flex align-items-center selected">
                <a href="{{ route('admin.logout') }}" class="nav-link w-100 p-md-2">
                    <i class="bi bi-power h4 me-md-2"></i>
                    <span class="d-none d-sm-inline">Cerrar sesión</span>
                </a>
            </li>

        </ul>
    </div>
</aside>
