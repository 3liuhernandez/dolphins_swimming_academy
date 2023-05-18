<div id="navbar" class="container-fuid">
    <nav class="sticky-top navbar navbar-expand px-3">
        <a class="navbar-brand ps-3 indicador" href="{{ route('admin.home') }}">
            Dashboard
        </a>
        
        <span class="d-none d-md-inline-block form-inline ms-auto"></span>

        <div class="dropdown list-inline drp-user">
            <a class="dropdown-toggle nav-link ms-auto ms-md-0 me-3 me-lg-4 " id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="feather bi bi-person-fill"></i>
            </a>
            
            <div class="dropdown-menu dropdown-menu-end profile-notification" aria-labelledby="navbarDropdown">
                <div class="pro-head">
                    <img src="{{ asset('imgs/images_icons/manager_medium.png') }}" class="img-fluid rounded-circle" alt="User-Profile-Image">
                    <a class="nav-link" href="{{ route('home') }}"><span>Administrador</span></a>
                </div>
                <ul class="pro-body">
                    <li>
                        <a href="{{ route('perfil') }}" class="dropdown-item">
                            <i class="bi bi-person-fill"></i>
                            Mi perfil
                        </a>
                    </li>
                    <li>
                        <a href="email_inbox.html" class="dropdown-item">
                            <i class="bi bi-envelope"></i> 
                            Mensajes
                        </a>
                    </li>
                    <hr class="">
                    <li>
                        <a href="{{ route('admin.logout') }}" class="dropdown-item" title="Logout">
                            <i class="bi bi-box-arrow-right"></i>
                            Cerrar sesion
                        </a>
                    </li>
                </ul>
            </div>
        </div>


    </nav>
</div>
