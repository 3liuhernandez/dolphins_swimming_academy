<section class="select_images">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div id="carouselExampleligth" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators m-0 py-4">
                        <button type="button" data-bs-target="#carouselExampleligth" data-bs-slide-to="0" class="btn-select active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleligth" data-bs-slide-to="1" class="btn-select" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleligth" data-bs-slide-to="2" class="btn-select" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="{{ asset('imgs/img_banner.png') }}" style="height: 500px;width: 100%;" alt="...">
                            <div class="carousel-caption d-none mb-5 d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <img src="{{ asset('imgs/img_banner3.png') }}" style="height: 500px;width: 100%;" alt="...">
                            <div class="carousel-caption d-none mb-5 d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <img src="{{ asset('imgs/img_banner4.png') }}" style="height: 500px;width: 100%;" alt="...">
                            <div class="carousel-caption d-none mb-5 d-md-block">
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
            </div>
        </div>
    </div>
</section>
