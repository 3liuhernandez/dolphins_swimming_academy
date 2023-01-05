{{-- <!-- header section start -->
<div class="header_section">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="logo"><a href="{{route('home')}}"></a></div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                
            </ul>
        </div>
    </nav>
</div>
<!-- header section end -->
--}}

    <nav class="navbar navbar-expand-lg bg-dark navbar-light shadow p-0">
        <div class="container">
            <a class="navbar-brand m-0" href="#"><img src="{{ asset('imgs/logo_blue_bg_remove.png') }}" class="w-25" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon p-1"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h2 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h2>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item active">
                            <a class="nav-link p-2 text-white" href="{{ route('home') }}">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-2 text-white" href="trainings.html">TRAININGS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-2 text-white" href="classes.html">CLASSES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-2 text-white" href="shows.html">SHOWS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-2 text-white" href="shortcodes.html">SHORTCODES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-2 text-white" href="contact.html">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-2 text-white" href="{{ route('login') }}">INGRESO</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
