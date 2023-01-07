<aside class=" col-sm-3 col-lg-2 flex-grow-sm-1 flex-shrink-1 flex-grow-0 sticky-top p-0 pb-3 pb-lg-0">
    <div class="bg-light border border-top-0 p-1 h-100">
        <ul class="nav nav-pills flex-sm-column flex-row mb-auto justify-content-between p-md-3">
            <li class="nav-item mb-md-3 active">
                <a href="{{ route('admin.home') }}" class="nav-link">
                    <img src="{{ asset('imgs/logo_white.jpg') }}" style="width: 100px; height: 80px;" alt="logo">
                    <hr>
                </a>
            </li>
            <li class="nav-item mb-md-3">
                <a href="{{ route('admin.home') }}" class="nav-link">
                    <i class="bi bi-speedometer h4 me-3"></i>
                    <span class="d-none d-sm-inline">Dashboard</span>
                </a>
            </li>
            <li class="nav-item mb-md-3">
                <a href="{{ route('students') }}" class="nav-link">
                    <i class="bi bi-card-text h4 me-3"></i>
                    <span class="d-none d-sm-inline">Estudiantes</span>
                </a>
            </li>
            <li class="nav-item mb-md-3">
                <a href="#" class="nav-link">
                    <i class="bi bi-bricks h4 me-3"></i>
                    <span class="d-none d-sm-inline">Representates</span>
                </a>
            </li>

            <li class="nav-item mb-md-3">
                <a href="#" class="nav-link">
                    <i class="bi bi-people h4 me-3"></i>
                    <span class="d-none d-sm-inline">Planes</span>
                </a>
            </li>

            <li class="nav-item mb-md-3">
                <a href="#" class="nav-link">
                    <i class="bi bi-people h4 me-3"></i>
                    <span class="d-none d-sm-inline">Usuarios</span>
                </a>
            </li>


            <li class="nav-item mb-md-3">
                <a href="{{ route('admin.logout') }}" class="nav-link">
                    <hr>
                    <i class="bi bi-user h4 me-3"></i>
                    <span class="d-none d-sm-inline">Cerrar sesión</span>
                </a>
            </li>
        </ul>
    </div>
</aside>