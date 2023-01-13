@extends('layouts.master')

@section('body')
    <section id="section_class">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators" style="z-index: 5;">
                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('imgs/hijos_clases_natacion.png') }}" class="img-fluid w-100" alt="...">
                                {{-- <div class="container">
                                    <div class="carousel-caption text-start mb-5">
                                        <h1>Example headline.</h1>
                                        <p>Some representative placeholder content for the first slide of the carousel.</p>
                                        <a class="btn btn-sm bg_color-blue-derivate text-white" href="{{ route('register') }}">Regístrate hoy</a>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('imgs/natacion_instructor-_ninos.png') }}" class="img-fluid w-100" alt="...">
                                {{-- <div class="container">
                                    <div class="carousel-caption">
                                        <h1>Another example headline.</h1>
                                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                                        <a class="btn btn-sm bg_color-blue-derivate text-white" href="{{ route('class') }}">Learn more</a>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('imgs/natacion_instructor_ninos2.png') }}" class="img-fluid w-100" alt="...">
                                {{-- <div class="container">
                                    <div class="carousel-caption text-end mb-5">
                                        <h1>One more for good measure.</h1>
                                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                                        <a class="btn btn-sm bg_color-blue-derivate text-white" href="#galery_card">Ver galeria</a>
                                    </div>
                                </div> --}}
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
            </div>
        </div>
    </section>

    <!-- Marketing messaging and featurettes ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <section id="section_instructor">
        <div class="container marketing">
            <div class="row row-cols-sm-2 row-cols-md-2 m-0 justify-content-center">
                <div class="col-10 col-sm-10 col-md-6 col-lg-4">
                    <div class="box-card d-flex justify-content-center justify-content-sm-evnely justify-content-md-center align-items-center flex-wrap shadow-sm rounded p-3 border">
                        <img src="https://st2.depositphotos.com/1518767/5691/i/600/depositphotos_56913629-stock-photo-handsome-swimming-instructor-smiling-at.jpg" class="rounded-circle" width="140" height="140" alt="">
                        <div class="col-8 col-lg-12 text-inf d-flex flex-column">
                            <h2 class="fw-semibold text_color-blue-derivate">Instructor Nombre</h2>
                            {{-- <ul class="navbar-nav">
                                <li class="nav-item">Nivel Intruccion: <span class="text_color-blue-derivate">3</span></li>
                                <li class="nav-item">Experiencia: <span class="text_color-blue-derivate">100%</span></li>
                                <li class="nav-item">Edad:</li>
                            </ul> --}}
                        </div>
                        <p class="text-muted fw-semibold">
                            Some representative placeholder content for the three columns of text below the carousel. This is the
                            first column.
                        </p>
                        <button type="button" class="btn w-75 bg_color-blue-derivate text-white fw-semibold" href="#">View details &raquo;</button>
                    </div>
                </div>
                <div class="col-10 col-sm-10 col-md-6 col-lg-4">
                    <div class="box-card d-flex justify-content-center justify-content-sm-evnely justify-content-md-center align-items-center flex-wrap shadow-sm rounded p-3 border">
                        <img src="https://st2.depositphotos.com/1518767/5725/i/600/depositphotos_57252277-stock-photo-cute-swimming-class-listening-to.jpg" class="rounded-circle" width="140" height="140" alt="">
                        <div class="col-8 col-lg-12 text-inf d-flex flex-column">
                            <h2 class="fw-semibold text_color-blue-derivate">Instructor Nombre</h2>
                            {{-- <ul class="navbar-nav">
                                <li class="nav-item">Nivel Intruccion: <span class="text_color-blue-derivate">3</span></li>
                                <li class="nav-item">Experiencia: <span class="text_color-blue-derivate">100%</span></li>
                                <li class="nav-item">Edad:</li>
                            </ul> --}}
                        </div>
                        <p class="text-muted fw-semibold">
                            Another exciting bit of representative placeholder content. This time, we've moved on to the second
                            column.
                        </p>
                        <button type="button" class="btn w-75 mx-auto bg_color-blue-derivate text-white fw-semibold" href="#">View details &raquo;</button>
                    </div>
                </div>
                <div class="col-10 col-sm-10 col-md-6 col-lg-4">
                    <div class="box-card d-flex justify-content-center justify-content-sm-evnely justify-content-md-center align-items-center flex-wrap shadow-sm rounded p-3 border">
                        <img src="https://st3.depositphotos.com/1518767/14955/i/600/depositphotos_149557154-stock-photo-swim-coach-holding-stopwatch-at.jpg" class="rounded-circle" width="140" height="140" alt="">
                        <div class="col-8 col-lg-12 text-inf d-flex flex-column">
                            <h2 class="fw-semibold text_color-blue-derivate">Instructor Nombre</h2>
                            {{-- <ul class="navbar-nav">
                                <li class="nav-item">Nivel Intruccion: <span class="text_color-blue-derivate">3</span></li>
                                <li class="nav-item">Experiencia: <span class="text_color-blue-derivate">100%</span></li>
                                <li class="nav-item">Edad:</li>
                            </ul> --}}
                        </div>
                        <p class="text-muted fw-semibold">
                            And lastly this, the third column of representative placeholder content. 
                            This time, we've moved on to the second</p>
                        <button type="button" class="btn w-75 mx-auto bg_color-blue-derivate text-white fw-semibold" href="#">View details &raquo;</button>
                    </div>
                </div>
            </div>

            <!-- START THE FEATURETTES -->
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-semibold fw-semibold text_color-blue-derivate lh-1">First featurette heading<br> 
                        <span class="text-muted">It'll blow your mind.</span>
                    </h2>
                    <p class="lead">
                        Some great placeholder content for the first featurette here. Imagine some exciting
                        prose here.
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="https://i.pinimg.com/originals/6a/f6/69/6af669296f9314db344375fb046f570a.gif" class="figure-img img-fluid rounded" alt="">
                    {{-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                    </svg> --}}
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-semibold text_color-blue-derivate lh-1">Oh yeah, it’s that good <br>
                        <span class="text-muted">See for yourself.</span>
                    </h2>
                    <p class="lead">
                        Another featurette? Of course. More placeholder content here to give you an idea of
                        how this layout would work with some actual real-world content in place.
                    </p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="https://www.triatlonnoticias.com/wp-content/uploads/2020/11/natacion_estilo_braza.gif" class="figure-img img-fluid rounded" alt="">
                    {{-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                    </svg> --}}
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-semibold text_color-blue-derivate lh-1">And lastly, this one <br>
                        <span class="text-muted">Checkmate.</span>
                    </h2>
                    <p class="lead">
                        And yes, this is the last block of representative placeholder content. Again, not
                        really intended to be actually read, simply here to give you a better view of what this would look
                        like with some actual content. Your content.
                    </p>
                </div>
                <div class="col-md-5">
                    {{-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                    </svg> --}}
                    <figure class="figure border">
                        <img src="https://www.arenaswim.com/media/immagini/267_z_breaststroke_swim.gif?width=1200&height=630&mode=crop" class="figure-img img-fluid rounded" alt="">
                        <figcaption class="figure-caption text-start">Some Word</figcaption>
                    </figure>
                </div>
            </div>
            {{-- <hr class="featurette-divider"> --}}
        </div>
    </section>

@endsection
