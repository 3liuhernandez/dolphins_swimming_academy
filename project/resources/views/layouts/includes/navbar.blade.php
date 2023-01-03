<!-- header section start -->
<div class="header_section">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="logo"><a href="{{route('home')}}"><img src="{{asset('imgs/logo_blue.jpg')}}"></a></div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="trainings.html">TRAININGS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="classes.html">CLASSES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shows.html">SHOWS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shortcodes.html">SHORTCODES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">INGRESO</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">REGISTRO</a>
                </li> --}}
            </ul>
        </div>
    </nav>
</div>
<!-- header section end -->
