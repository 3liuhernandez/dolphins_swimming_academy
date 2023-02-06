@extends('layouts.master')

@section('body')
    <!-- ====== Carrusel Section ====== -->
    <section id="section_class">
        <div class="container-fluid p-0" id="carrusel">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <div id="myCarousel" class="carousel slide carousel-fade" data-bs-interval="7000" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('imgs/images_carrusel/banner_carrusel4.WebP') }}" style="width: 100%;height:50vh" alt="..." loading="lazy">
                            </div>
                            <?php for ($i=0; $i < 6; $i++) { ?>
                            @if ($i === 0)
                                <div class="carousel-item">
                                    <img src="{{ asset('imgs/images_carrusel/banner_carrusel3.WebP') }}" style="width: 100%;height:50vh" alt="..." loading="lazy">
                                </div>
                            @elseif($i === 1)
                                <div class="carousel-item">
                                    <img src="{{ asset('imgs/images_carrusel/banner_carrusel2.WebP') }}" style="width: 100%;height:50vh" alt="..." loading="lazy">
                                </div>
                            @elseif($i === 2)
                                <div class="carousel-item">
                                    <img src="{{ asset('imgs/images_carrusel/banner_carrusel5.WebP') }}" style="width: 100%;height:50vh" alt="..." loading="lazy">
                                </div>
                            @elseif($i === 3)
                                <div class="carousel-item">
                                    <img src="{{ asset('imgs/images_carrusel/banner_carrusel6.WebP') }}" style="width: 100%;height:50vh" alt="..." loading="lazy">
                                </div>
                            @elseif($i === 4)
                                <div class="carousel-item">
                                    <img src="{{ asset('imgs/images_carrusel/banner_carrusel3.WebP') }}" style="width: 100%;height:50vh" alt="..." loading="lazy">
                                </div>
                            @elseif($i)
                            @endif
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= profile Section ======= -->
    <section id="profile" class="profile">
        <div class="container">
            
            <div class="row m-0 g-5 gx-lg-4">
                <div class="titles mt-4 pt-5">
                    <h2 class="title_section">INSTRUCTORES</h2>
                    <h4 class="subtitle_section">PROFESIONALES DE NUESTRA ACADEMIA</h4>
                </div>
                
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member shadow">
                        <div class="member-img">
                            <img src="{{ asset('imgs/images_instructors/photo3.WebP') }}" class="img-fluid" alt="" loading="lazy">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Name example</h4>
                            <span>Performance Area example</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member shadow">
                        <div class="member-img">
                            <img src="{{ asset('imgs/images_instructors/photo2.WebP') }}" class="img-fluid" alt="" loading="lazy">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Name example</h4>
                            <span>Performance Area example</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member shadow">
                        <div class="member-img">
                            <img src="{{ asset('imgs/images_instructors/photo1.WebP') }}" class="img-fluid" alt="" loading="lazy">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Name example</h4>
                            <span>Performance Area example</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member shadow">
                        <div class="member-img">
                            <img src="{{ asset('imgs/images_instructors/photo4.WebP') }}" class="img-fluid" alt="" loading="lazy">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>name example</h4>
                            <span>Performance Area example</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <hr>

    <!-- feature section -->
    <section id="features">
        <div class="container">
            <div class="row m-0">
                
                <div class="col-md-7">
                    <h2 class="featurette-heading text_color-blue-derivate lh-1">First featurette heading
                        <br>
                        <span class="text-muted">It'll blow your mind.</span>
                    </h2>
                    <p class="lead"> Some great placeholder content for the first featurette here. Imagine some exciting prose here.
                    </p>
                </div>
    
                <div class="col-md-5">
                    <figure class="figure border rounded p-3">
                        <img src="https://i.pinimg.com/originals/6a/f6/69/6af669296f9314db344375fb046f570a.gif" class="figure-img img-fluid rounded" alt="" loading="lazy">
                        <figcaption class="figure-caption text-start text_color-blue-derivate ">
                            Dolphins Swimming Academy
                        </figcaption>
                    </figure>
                </div>
            </div>
    
            <div class="row m-0">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading  text_color-blue-derivate lh-1">Oh yeah, it’s that good 
                        <br>
                        <span class="text-muted">See for yourself.</span>
                    </h2>
                    <p class="lead">
                        Another featurette? Of course. More placeholder content here to give you an idea of
                        how this layout would work with some actual real-world content in place.
                    </p>
                </div>
                <div class="col-md-5 order-md-1">
                    <figure class="figure border rounded p-3">
                        <img src="https://www.triatlonnoticias.com/wp-content/uploads/2020/11/natacion_estilo_braza.gif" class="figure-img img-fluid rounded" alt="" loading="lazy">
                        <figcaption class="figure-caption text-start text_color-blue-derivate ">
                            Dolphins Swimming Academy
                        </figcaption>
                    </figure>
                </div>
            </div>
    
            <div class="row m-0">
                <div class="col-md-7">
                    <h2 class="featurette-heading  text_color-blue-derivate lh-1">
                        And lastly, this one 
                        <br>
                        <span class="text-muted">Checkmate.</span>
                    </h2>
                    <p class="lead">
                        And yes, this is the last block of representative placeholder content. Again, not
                        really intended to be actually read, simply here to give you a better view of what this would look
                        like with some actual content. Your content.
                    </p>
                </div>
                <div class="col-md-5">
                    <figure class="figure border rounded p-3">
                        <img src="https://www.arenaswim.com/media/immagini/267_z_breaststroke_swim.gif?width=1200&height=630&mode=crop" class="figure-img img-fluid rounded" alt="" loading="lazy">
                        <figcaption class="figure-caption text-start text_color-blue-derivate ">
                            Dolphins Swimming Academy
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    
@endsection
