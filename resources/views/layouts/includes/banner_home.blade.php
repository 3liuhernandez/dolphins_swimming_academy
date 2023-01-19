<section class="select_images d-flex flex-column justify-content-end align-items-center">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div id="myCarousel" class="carousel slide carousel-fade" data-bs-interval="7000" data-bs-ride="carousel">
                    <div class="carousel-indicators d-none d-lg-block" style="z-index: 2;">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner">
                        <!-- caption 1 -->
                        <div class="carousel-item active" id="item-carusel">
                            <img src="{{ asset('imgs/img_banner_carusel_home.png') }}" alt="...">
                            <div class="carousel-caption mb-lg-3 m-0">
                                <h2>Another example headline.</h2>
                                <p class="small lh-1 m-0 mx-auto w-75">Some representative placeholder content for the second slide of the carousel. </p>
                            </div>
                        </div>
                        <!-- caption 2 -->
                        <div class="carousel-item" id="item-carusel">
                            <img src="{{ asset('imgs/img_banner_carusel_home-2.png') }}" alt="...">
                            <div class="carousel-caption mb-lg-3 text-start m-0">
                                <h2>Example headline.</h2>
                                <p class="small lh-1 m-0 w-75 ">Some representative placeholder content for the first slide of the carousel.</p>
                            </div>
                        </div>
                        <!-- caption 3 -->
                        <div class="carousel-item" id="item-carusel">
                            <img src="{{ asset('imgs/img_banner_carusel_home-3.png') }}" alt="...">
                            <div class="carousel-caption mb-lg-3 text-end d-flex flex-column align-items-end m-0">
                                <h2>One more for good measure.</h2>
                                <p class="small lh-1 m-0 w-75 ">Some representative placeholder content for the third slide of this carousel.</p>
                            </div>
                        </div>
                        <!-- caption 4 -->
                        <div class="carousel-item" id="item-carusel">
                            <img src="{{ asset('imgs/img_banner_carusel_home-4.png') }}" alt="...">
                            <div class="carousel-caption mb-lg-3 text-start m-0">
                                <h2>Example headline.</h2>
                                <p class="small lh-1 m-0 w-75 ">Some representative placeholder content for the first slide of the carousel.</p>
                            </div>
                        </div>
                        <div class="carousel-item" id="item-carusel">
                            <img src="{{ asset('imgs/img_banner_carusel_home-5.png') }}" alt="...">
                            <div class="carousel-caption mb-lg-3 text-end d-flex flex-column align-items-end m-0">
                                <h2>One more for good measure.</h2>
                                <p class="small lh-1 m-0 w-75 ">Some representative placeholder content for the third slide of this carousel.</p>
                            </div>
                        </div>
                        <!-- caption 5 -->
                        <div class="carousel-item" id="item-carusel">
                            <img src="{{ asset('imgs/img_banner_carusel_home-6.png') }}" alt="...">
                            <div class="carousel-caption mb-lg-3 m-0">
                                <h2>Another example headline.</h2>
                                <p class="small lh-1 m-0 mx-auto w-75 ">Some representative placeholder content for the second slide of the carousel.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-12 p-0" id="svg-move">
                <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
                    <defs>
                        <path id="wave-path"
                            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
                    </defs>
                    <g class="wave1">
                        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
                        </use>
                    </g>
                    <g class="wave2">
                        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
                        </use>
                    </g>
                    <g class="wave3">
                        <use xlink:href="#wave-path" x="50" y="9" fill="#fff"></use>
                    </g>
                </svg>
            </div>
        </div>
    </div>
</section>
