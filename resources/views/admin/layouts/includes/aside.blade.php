<div class="container-fluid overflow-hidden">
    <div class="row vh-100 overflow-auto">
        <div class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 bg-dark bg-gradient d-flex sticky-top">
            <div class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-white">
                <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start">
                    {{-- <li class="nav-item">
                        <a href="{{ route('admin.home') }}" class="nav-link w-100 p-md-2 {{ session('section') === 'home' ? 'active' : '' }}>
                            <i class="fs-5 bi-house"></i>
                            <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li> --}}

                    <li>
                        <a href="{{ route('admin.home') }}" data-bs-toggle="collapse" class="nav-link w-100 p-md-2 {{ session('section') === 'home' ? 'active' : '' }}">
                            <i class="fs-5 bi-speedometer2"></i>
                            <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('students') }}" class="nav-link w-100 p-md-2 {{ session('section') === 'students' ? 'active' : '' }}">
                            <i class="fs-5 bi-table"></i>
                            <span class="ms-1 d-none d-sm-inline">Estudiantes</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="nav-link px-sm-0 px-2">
                            <i class="fs-5 bi-grid"></i>
                            <span class="ms-1 d-none d-sm-inline">Products</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="nav-link px-sm-0 px-2">
                            <i class="fs-5 bi-people"></i>
                            <span class="ms-1 d-none d-sm-inline">Customers</span>
                        </a>
                    </li>
                </ul>

                <div class="dropdown py-sm-4 mt-sm-auto ms-auto ms-sm-0 flex-shrink-1">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" width="28" height="28" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">Administrador</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a href="{{ route('admin.logout') }}" class="nav-link w-100 p-md-2">
                                <i class="bi bi-power h4 me-md-2"></i>
                                <span class="d-none d-sm-inline">Cerrar sesión</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
