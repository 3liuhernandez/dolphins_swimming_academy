<aside id="asside" class="sticky-top">
    <div class="height-static">
        <div class="panel-content">
            <div class="img-content mb-md-3 d-none d-md-block">
                <a href="{{ route('admin.home') }}" class="nav-link text-center">
                    <img src="{{ asset('imgs/images_logos/logo-administracion.png') }}" alt="logo">
                </a>
            </div>

            <ul class="nav flex-md-column flex-row mb-auto justify-content-around p-3">
                <p class="d-none d-md-block">ADMINISTRACIÓN</p>
                <li class="nav-item mb-md-3 d-flex align-items-center list-selected">
                    <a href="{{ route('admin.home') }}"
                        class="nav-link w-100 p-md-2 {{ session('section') === 'home' ? 'active' : '' }}">
                        <i class="bi bi-speedometer h4 me-md-3"></i>
                        <span class="d-none d-md-inline">DASHBOARD</span>
                    </a>
                </li>
                
                <p class="d-none d-md-block">GESTION DE USUARIOS</p>

                <li class="nav-item mb-md-3 d-flex align-items-center list-selected">
                    <a href="{{ route('parents') }}" class="nav-link w-100 p-md-2 {{ session('section') === 'parents' ? 'active' : '' }}">
                        <i class="bi bi-bricks h4 me-md-3"></i>
                        <span class="d-none d-md-inline">PADRES</span>
                    </a>
                </li>
    
                <li class="nav-item mb-md-3 d-flex align-items-center list-selected">
                    <a href="{{ route('students') }}" class="nav-link w-100 p-md-2 {{ session('section') === 'students' ? 'active' : '' }}">
                        <i class="bi bi-card-text h4 me-md-3"></i>
                        <span class="d-none d-md-inline">ESTUDIANTES</span>
                    </a>
                </li>
    
                <li class="nav-item mb-md-3 d-flex align-items-center list-selected">
                    <a href="#" class="nav-link w-100 p-md-2 {{ session('section') === 'planes' ? 'active' : '' }}">
                        <i class="bi bi-people h4 me-md-3"></i>
                        <span class="d-none d-md-inline">PLANES</span>
                    </a>
                </li>
        
                <p class="d-none d-md-block">CONFIGURACIONES</p>
    
                <li class="nav-item mb-md-3 d-flex align-items-center list-selected">
                    <a href="{{ route('perfil') }}" class="nav-link w-100 p-md-2 {{ session('section') === 'perfil' ? 'active' : '' }}">
                        <i class="bi bi-person-gear h4 me-md-3"></i>
                        <span class="d-none d-md-inline">MI PERFIL</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</aside>