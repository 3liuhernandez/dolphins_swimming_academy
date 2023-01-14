<section class="select_images">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators" style="z-index: 2;">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('imgs/img_banner.png') }}" class="w-100" alt="...">
                            <div class="container">
                                <div class="carousel-caption text-start pb-5" style="z-index: 23">
                                    <h1>Example headline.</h1>
                                    <p>Some representative placeholder content for the first slide of the carousel.</p>
                                    <a class="btn btn-sm bg_color-blue-derivate text-white" href="{{ route('register') }}">Regístrate hoy</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('imgs/img_banner3.png') }}" class="w-100" alt="...">
                            <div class="container">
                                <div class="carousel-caption" style="z-index: 0">
                                    <h1>Another example headline.</h1>
                                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                                    <a class="btn btn-sm bg_color-blue-derivate text-white" href="{{ route('class') }}">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('imgs/img_banner4.png') }}" class="w-100" alt="...">
                            <div class="container">
                                <div class="carousel-caption text-end pb-5" style="z-index: 23">
                                    <h1>One more for good measure.</h1>
                                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                                    <a class="btn btn-sm bg_color-blue-derivate text-white" href="#galery_card">Ver galeria</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev d-none d-lg-block" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next d-none d-lg-block" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>