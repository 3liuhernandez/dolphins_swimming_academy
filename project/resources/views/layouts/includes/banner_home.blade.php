{{-- <!-- banner section start -->
<div class="banner_section layout_padding">
    <div class="container-fluid">
        <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner_taital">
                                <h1 class="dance_text">Dance beat</h1>
                                <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magn</p>
                                <div class="about_bt"><a href="about.html">About Us</a></div>
                                <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="image_1"><img src="{{asset('template/images/img-1.png')}}"></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner_taital">
                                <h1 class="dance_text">Dance beat</h1>
                                <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magn</p>
                                <div class="about_bt"><a href="about.html">About Us</a></div>
                                <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="image_1"><img src="{{asset('template/images/img-1.png')}}"></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner_taital">
                                <h1 class="dance_text">Dance beat</h1>
                                <p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magn</p>
                                <div class="about_bt"><a href="about.html">About Us</a></div>
                                <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="image_1"><img src="{{asset('template/images/img-1.png')}}"></div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                <i class="fa fa-left"><img src="{{asset('template/images/left-icon.png')}}"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                <i class="fa fa-right"><img src="{{asset('template/images/right-icon.png')}}"></i>
            </a>
        </div>
    </div>
</div>
<div class="ram">
    <div class="border_bg"></div>
</div>
<!-- banner section end --> --}}

<div id="carouselExampleligth m-0" class="carousel carousel-ligth slide">
    <div class="carousel-indicators m-0">
        <button type="button" data-bs-target="#carouselExampleligth" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleligth" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleligth" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item  active" data-bs-interval="10000">
            <img src="{{ asset('imgs/img_banner.png') }}" style="height: 500px; width: 100%" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item " data-bs-interval="2000">
            <img src="{{ asset('imgs/img_banner3.png') }}" style="height: 500px; width: 100%" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item " data-bs-interval="2000">
            <img src="{{ asset('imgs/img_banner4.png') }}" style="height: 500px; width: 100%" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev d-none d-xl-block" type="button" data-bs-target="#carouselExampleligth" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next d-none d-xl-block" type="button" data-bs-target="#carouselExampleligth" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
