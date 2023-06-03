@extends('layouts.master')

@section('body')
    <!-- Students section start -->
    <section id="students_section">
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <div class="text-welcome">
                        <h1 class="display-2 fw-normal">¡Bienvenidos nuevos estudiantes!</h1>
                        <p class="text-muted fw-normal">
                            Concebimos al ejercicio como un apoyo para lograr alcanzar un estado de salud física y
                            emocional,
                            dado no solo por la ausencia de enfermedad, sino también por la posibilidad de disfrutar de las
                            diferentes
                            alternativas de actividad y socialización que nos ofrece el medio circundante.
                        </p>
                        {{-- <a class="btn btn-md bg_color-blue-derivate text-white fw-semibold px-5" href="{{ route('register') }}">Registrate</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Students section end -->

    <!-- stadistic section start -->
    <section id="stadistic_section">
        <div class="container" id="icon-grid">
            {{-- <div class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-4 m-0 gx-4 gy-3 flex-wrap justify-content-center"> --}}
            <div class="row">
                <?php for($i=0; $i < 3 ; $i++) { ?>
                    <div class="col-6">
                        <div class="d-flex flex-wrap justify-content-center">
                            @if ($i === 0)
                                
                            @elseif($i === 1)
                                
                            @elseif($i === 2)
                                
                            @endif
                        </div>
                    </div>
                <?php }?>
                    <div class="col-6 col-sm-6 col-md-12 col-lg-3 mx-auto">
                        <div class="d-flex flex-wrap justify-content-center align-items-center py-3 py-lg-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
                                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
                            </svg>
                            <div class="text-center text-center border rounded p-3 mt-3 mt-lg-0 ms-md-3 ms-lg-0">
                                <h3 class="fw-bold mb-0 fs-4 border-bottom">Featured title</h3>
                                <p class="m-0">Paragraph of text beneath the heading to explain the heading.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- stadistic section end -->

    <!-- about section start -->
    <section id="about">
        <div class="container py-lg-4">
            <div class="row">
                <h2 class="title_section fw-semibold display-5 d-flex justify-content-sm-start align-items-center">
                    Acerca de <span class="me-2"></span></h2>
                <p class="subtitle_section">Quienes somos</p>

                <div class="col-lg-6">
                    <p class="text_inf">
                        Es importante cuidar al paciente, ser seguido por el médico,
                        pero es un momento de mucho dolor y sufrimiento.
                    </p>
                    <ul class="nav">
                        <li class="nav-item small">
                            <i class="bi bi-check-all text_color-blue-derivate fs-4 me-2"></i>
                            <p class="m-0">No trabajo para nada excepto para sacarle algún provecho</p>
                        </li>
                        <li class="nav-item small">
                            <i class="bi bi-check-all text_color-blue-derivate fs-4 me-2"></i>
                            <p class="m-0">Duda o dolor irrure en las reprimendas en el placer que quiere</p>
                        </li>
                        <li class="nav-item small">
                            <i class="bi bi-check-all text_color-blue-derivate fs-4 me-2"></i>
                            <p class="m-0">No trabajo para nada excepto para sacarle algún provecho</p>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p class="text_inf">
                        No trabajo en absoluto excepto para sacar alguna ventaja de ello.
                        No te enojes con el dolor en la reprimenda en el placer que quiere ser un cabello del
                        dolor en la esperanza de que no haya crianza. A menos que estén cegados por la lujuria,
                        no salen, están en falta quienes abandonan sus deberes y ablandan su corazón,
                        eso es trabajo.
                    </p>
                    <!-- <a class="btn btn-md bg_color-blue-derivate text-white fw-semibold px-5" href="#">Aprende más</a> -->
                </div>

            </div>
        </div>
    </section>
    <!-- about section end -->

    <svg class="svg" preserveAspectRatio="none" viewBox="0 0 1000 100">
        <path d="M0 0v25.8c4.2 1.1 8.1 4.1 11 9.1 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 3.7-6.4 9.2-9.6 14.6-9.6 5.5 0 10.9 3.2 14.6 9.6 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 3.7-6.4 9.2-9.6 14.6-9.6 5.5 0 10.9 3.2 14.6 9.6 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.5-12.9 22-12.9 29.3 0 6.1 10.9 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19.2 10.9 25.3 0 7.4-13.3 21.9-13.2 29.3 0 6.1 10.9 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 1.9 3.2 4.3 5.5 7 6.8V0H0z"/><path d="M993 40.9c-7.4-12.8-21.9-12.8-29.3 0-6.3 10.8-19 10.8-25.3 0-7.4-12.8-21.9-12.8-29.3 0-6.3 10.8-19 10.8-25.3 0-7.4-12.8-21.9-12.8-29.3 0-6.3 10.8-19 10.8-25.3 0-7.4-12.8-21.9-12.8-29.3 0-6.3 10.8-19 10.8-25.3 0-7.4-12.8-21.9-12.8-29.3 0-6.3 10.8-19 10.8-25.3 0-7.4-12.8-21.9-12.8-29.3 0-6.3 10.8-19 10.8-25.3 0-7.4-12.8-21.9-12.8-29.3 0-6.3 10.8-19 10.8-25.3 0-7.4-12.8-21.9-12.8-29.3 0-6.3 10.8-19 10.8-25.3 0-7.4-12.8-21.9-12.8-29.3 0-6.3 10.8-19 10.8-25.3 0-7.4-12.8-21.9-12.8-29.3 0-6.3 10.8-19 10.8-25.3 0-7.4-12.8-21.9-12.8-29.3 0-6.3 10.8-19 10.8-25.3 0-3.7-6.4-9.2-9.6-14.6-9.6-5.5 0-10.9 3.2-14.6 9.6-6.3 10.8-19 10.8-25.3 0-7.4-12.8-21.9-12.8-29.3 0-6.3 10.8-19 10.8-25.3 0-7.4-12.8-21.9-12.8-29.3 0-6.3 10.8-19 10.8-25.3 0-3.7-6.4-9.2-9.6-14.6-9.6-5.5 0-10.9 3.2-14.6 9.6-6.3 10.8-19 10.8-25.3 0-7.4-12.8-21.9-12.8-29.3 0-6.3 10.8-19 10.8-25.3 0-7.4-12.8-21.9-12.8-29.3 0-6.3 10.8-19 10.8-25.3 0-7.4-12.8-21.9-12.8-29.3 0-6.3 10.8-19 10.8-25.3 0-2.9-4.9-6.8-8-11-9.1V38c4.2 1.1 8.1 4.1 11 9.1 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 3.7-6.4 9.2-9.6 14.6-9.6 5.5 0 10.9 3.2 14.6 9.6 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 3.7-6.4 9.2-9.6 14.6-9.6 5.5 0 10.9 3.2 14.6 9.6 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 1.9 3.2 4.3 5.5 7 6.8v-6.2c-2.7-1.3-5.1-3.6-7-6.8z"/><path d="M991 50.9c-6.3-10.8-19-10.8-25.3 0-7.4 12.8-21.9 12.8-29.3 0-6.3-10.8-19-10.8-25.3 0-7.4 12.8-21.9 12.8-29.3 0-6.3-10.8-19-10.8-25.3 0-7.4 12.8-21.9 12.8-29.3 0-6.3-10.8-19-10.8-25.3 0-7.4 12.8-21.9 12.8-29.3 0-6.3-10.8-19-10.8-25.3 0-7.4 12.8-21.9 12.8-29.3 0-6.3-10.8-19-10.8-25.3 0-7.4 12.8-21.9 12.8-29.3 0-6.3-10.8-19-10.8-25.3 0-7.4 12.8-21.9 12.8-29.3 0-6.3-10.8-19-10.8-25.3 0-7.4 12.8-21.9 12.8-29.3 0-6.3-10.8-19-10.8-25.3 0-7.4 12.8-21.9 12.8-29.3 0-6.3-10.8-19-10.8-25.3 0-7.4 12.8-21.9 12.8-29.3 0-6.3-10.8-19-10.8-25.3 0-7.4 12.8-21.9 12.8-29.3 0-6.3-10.8-19-10.8-25.3 0-7.4 12.8-21.9 12.8-29.3 0-6.3-10.8-19-10.8-25.3 0-7.4 12.8-21.9 12.8-29.3 0-6.3-10.8-19-10.8-25.3 0-7.4 12.8-21.9 12.8-29.3 0-6.3-10.8-19-10.8-25.3 0-7.4 12.8-21.9 12.8-29.3 0-6.3-10.8-19-10.8-25.3 0-7.4 12.8-21.9 12.8-29.3 0-6.3-10.8-19-10.8-25.3 0-7.4 12.8-21.9 12.8-29.3 0-6.3-10.8-19-10.8-25.3 0-7.4 12.8-21.9 12.8-29.3 0-2.3-4-5.5-6.5-8.9-7.6V49c4.2 1.1 8.1 4.1 11 9.1 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 3.7-6.4 9.2-9.6 14.6-9.6 5.5 0 10.9 3.2 14.6 9.6 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 3.7-6.4 9.2-9.6 14.6-9.6 5.5 0 10.9 3.2 14.6 9.6 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 6.3 10.8 19 10.8 25.3 0 7.4-12.8 21.9-12.8 29.3 0 1.9 3.2 4.3 5.5 7 6.8v-5.6c-3.3-1.5-6.5-4.3-8.9-8.4z"/>
    </svg>

    <!-- galeria photo academy -->
    <section id="galeria" class="galeria">
        <div class="container">
            <h2 class="title_section fw-semibold display-5 d-flex justify-content-sm-start align-items-center ps-2">Galeria <span class="me-2"></span></h2>
            <p class="subtitle_section ps-2">Nuestros mejores alumnos</p>
            <div class="row row-cols-sm-1 row-cols-md-3 row-cols-lg-4 galeria-container">
                
                <div class="col-12 galeria-item">
                    <img src="{{ asset('imgs/images_academia/photo_1.WebP') }}" class="img-fluid preview-img" alt="" loading="lazy">
                    <div class="galeria-info">
                        <h4>App 1</h4>
                        <a href="#" title="Ver imagen" class="preview-link glightbox">
                            <i class="bi bi-zoom-in"></i>
                        </a>
                        <a href="#" title="More Details" class="details-link">
                            <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div>
        
                <div class="col-12 galeria-item">
                    <img src="{{ asset('imgs/images_academia/photo_2.WebP') }}" class="img-fluid preview-img" alt="" loading="lazy">
                    <div class="galeria-info">
                        <h4>Product 1</h4>
                        <a href="#" title="Product 1" class="preview-link">
                            <i class="bi bi-zoom-in"></i>
                        </a>
                        <a href="#" title="More Details" class="details-link">
                            <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div>
    
                <div class="col-12 galeria-item">
                    <img src="{{ asset('imgs/images_academia/photo_3.WebP') }}" class="img-fluid preview-img" alt="" loading="lazy">
                    <div class="galeria-info">
                        <h4>Branding 1</h4>
                        <a href="#" title="Branding 1" class="preview-link">
                            <i class="bi bi-zoom-in"></i>
                        </a>
                        <a href="#" title="More Details" class="details-link">
                            <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div>

                <div class="col-12 galeria-item">
                    <img src="{{ asset('imgs/images_academia/photo_4.WebP') }}" class="img-fluid preview-img" alt="" loading="lazy">
                    <div class="galeria-info">
                        <h4>Books 1</h4>
                        <a href="#" title="Branding 1" class="preview-link">
                            <i class="bi bi-zoom-in"></i>
                        </a>
                        <a href="#" title="More Details" class="details-link">
                            <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div>
    
                <div class="col-12 galeria-item">
                    <img src="{{ asset('imgs/images_academia/photo_5.WebP') }}" class="img-fluid preview-img" alt="" loading="lazy">
                    <div class="galeria-info">
                        <h4>App 2</h4>
                        <a href="#" title="App 2" class="preview-link">
                            <i class="bi bi-zoom-in"></i>
                        </a>
                        <a href="#" title="More Details" class="details-link">
                            <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div>
    
                <div class="col-12 galeria-item">
                    <img src="{{ asset('imgs/images_academia/photo_6.WebP') }}" class="img-fluid preview-img" alt="" loading="lazy">
                    <div class="galeria-info">
                        <h4>Product 2</h4>
                        <a href="#" title="Product 2" class="preview-link">
                            <i class="bi bi-zoom-in"></i>
                        </a>
                        <a href="#" title="More Details" class="details-link">
                            <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div>
    
                <div class="col-12 galeria-item">
                    <img src="{{ asset('imgs/images_academia/photo_7.WebP') }}" class="img-fluid preview-img" alt="" loading="lazy">
                    <div class="galeria-info">
                        <h4>Branding 2</h4>
                        <a href="#" title="Branding 2" class="preview-link">
                            <i class="bi bi-zoom-in"></i>
                        </a>
                        <a href="#" title="More Details" class="details-link">
                            <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div>
    
                <div class="col-12 galeria-item">
                    <img src="{{ asset('imgs/images_academia/photo_8.WebP') }}" class="img-fluid preview-img" alt="" loading="lazy">
                    <div class="galeria-info">
                        <h4>Books 2</h4>
                        <a href="#" title="Branding 2" class="preview-link">
                            <i class="bi bi-zoom-in"></i>
                        </a>
                        <a href="#" title="More Details" class="details-link">
                            <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div>
    
                <div class="col-12 galeria-item">
                    <img src="{{ asset('imgs/images_academia/photo_9.WebP') }}" class="img-fluid preview-img" alt="" loading="lazy">
                        <div class="galeria-info">
                        <h4>App 3</h4>
                        <a href="#" title="App 3" class="preview-link">
                            <i class="bi bi-zoom-in"></i>
                        </a>
                        <a href="#" title="More Details" class="details-link">
                            <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div>
    
                <div class="col-12 galeria-item">
                    <img src="{{ asset('imgs/images_academia/photo_10.WebP') }}" class="img-fluid preview-img" alt="" loading="lazy">
                    <div class="galeria-info">
                        <h4>Product 3</h4>
                        <a href="#" title="Product 3" class="preview-link">
                            <i class="bi bi-zoom-in"></i>
                        </a>
                        <a href="" title="More Details" class="details-link">
                            <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div>
    
                <div class="col-12 galeria-item">
                    <img src="{{ asset('imgs/images_academia/photo_11.WebP') }}" class="img-fluid preview-img" alt="" loading="lazy">
                    <div class="galeria-info">
                        <h4>Branding 3</h4>
                        <a href="#" title="Branding 2" class="preview-link">
                            <i class="bi bi-zoom-in"></i>
                        </a>
                        <a href="#" title="More Details" class="details-link">
                            <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div>
    
                <div class="col-12 galeria-item">
                    <img src="{{ asset('imgs/images_academia/photo_12.WebP') }}" class="img-fluid preview-img" alt="" loading="lazy">
                    <div class="galeria-info">
                        <h4>Books 3</h4>
                        <a href="#" title="Branding 3" class="preview-link">
                            <i class="bi bi-zoom-in"></i>
                        </a>
                        <a href="#" title="More Details" class="details-link">
                            <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div>
                
                </div>
            </div>
    </section>
    <!-- galeria photo academy end -->

    <!-- services section start -->
    <section id="services">
        <div class="container">
            <div class="row">
                <h2 class="title_section fw-semibold display-5 d-flex justify-content-sm-start align-items-center"> Servicios <span class="me-2"></span></h2>
                <p class="subtitle_section">lo que ofrecemos</p>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box shadow">
                        <div class="icon">
                            <i class="bi bi-briefcase" style="color: #ff689b;"></i>
                        </div>
                        <h4 class="title"><a class="nav-link" href="#">Primer objetivo:</a></h4>
                        <h6 class="title">Motricidad:</h6>
                        <p class="description">
                            Todo lo que la práctica de la natación logra en estimulación, coordinación,
                            equilibrio, la parte neuromotora, disciplina, mejoramiento de logros.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                    <div class="icon-box shadow">
                        <div class="icon">
                            <i class="bi bi-book" style="color: #e9bf06;"></i>
                        </div>
                        <h4 class="title"><a class="nav-link" href="#">Segundo objetivo:</a></h4>
                        <h6 class="title">Motricidad:</h6>
                        <p class="description">
                            Todo lo que la práctica de la natación logra en estimulación, coordinación,
                            equilibrio, la parte neuromotora, disciplina, mejoramiento de logros.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
                    <div class="icon-box shadow">
                        <div class="icon">
                            <i class="bi bi-card-checklist" style="color: #3fcdc7;"></i>
                        </div>
                        <h4 class="title"><a class="nav-link" href="#">Tercer objetivo:</a></h4>
                        <h6 class="title">Estilos:</h6>
                        <p class="description">
                            Aprender los estilos de la natación competitiva: libre, espalda,
                            pecho Y mariposa con los parámetros técnicos de la natación actual.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="icon-box shadow">
                        <div class="icon">
                            <i class="bi bi-binoculars" style="color:#41cf2e;"></i>
                        </div>
                        <h4 class="title"><a class="nav-link" href="#">grandes dolores</a></h4>
                        <p class="description">
                            A menos que estén cegados por la lujuria, no salen, están en falta quienes
                            abandonan sus deberes, el alma se ablanda, es decir, se afana.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="icon-box shadow">
                        <div class="icon">
                            <i class="bi bi-globe" style="color: #d6ff22;"></i>
                        </div>
                        <h4 class="title"><a class="nav-link" href="#">Ninguno</a></h4>
                        <p class="description">
                            Pero en verdad ambos acusamos a los que son dignos de justo odio,
                            que se ablandan con la adulación de los placeres presentes.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="icon-box shadow">
                        <div class="icon">
                            <i class="bi bi-clock" style="color: #4680ff;"></i>
                        </div>
                        <h4 class="title"><a class="nav-link" href="">Al mismo tiempo</a></h4>
                        <p class="description">
                            Y ciertamente la distinción entre estas cosas es fácil y conveniente.
                            Para el tiempo libre, cuando es libre para nosotros elegir
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services section end -->

    <!-- information section start -->
    <section id="natacion_profesional_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-profesional py-5 text-center d-flex flex-column justify-content-center align-items-center">
                        <h2 class="display-4 fw-semibold text-white lh-1">Natacion Profesional <span class="me-2"></span></h2>
                        <p class="fw-semibold text-white my-4 my-lg-3">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                            Qui inventore animi soluta, quisquam itaque voluptates illum explicabo 
                            ipsa at eum eos vel possimus obcaecati distinctio perspiciatis 
                            veniam consequuntur mollitia? Sapiente.
                        </p>
                        {{-- <button type="button" class="btn btn-md bg_color-blue-derivate text-white fw-semibold px-5" onclick="location.href='{{ route('login') }}'">Unete gratis</button> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- information section end -->

    <!-- information youtube start -->
    <section id="iframe-youtube">
        <div class="container">
            <div class="row my-5 py-5 m-0">
                {{-- <h2 class="text-center display-4 lh-1 mx-auto fw-semibold text_color-blue-derivate">Síguenos en nuestro canal de YouTube</h2> --}}
                <h2 class="title_section fw-semibold display-5 d-flex justify-content-sm-start align-items-center">Síguenos
                    <span class="me-2"></span></h2>
                <p class="subtitle_section">en nuestro canal de YouTube</p>
                <div class="row p-0 my-4 mx-0 box-iframe d-flex justify-content-center">
                    <div class="col col-lg-8 video-iframe p-3 border-dark border-bottom" style="background:#222">
                        <iframe class="rounded w-100 h-100" src="https://www.youtube.com/embed/hu_CdkWZdFk" title="Como Nadar sin Cansarse" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <ul class="col-12 col-lg-4 nav m-0 px-0 py-3" style="height:50vh;background:#111;">
                        <div class="lista-iframe overflow-y-scroll h-100">
                            <ul>
                                <li class="nav-item border-dark border-bottom w-100">
                                    <a class="nav-link d-flex justify-content-evenly text_color-white-main align-items-center" title="Como Nadar sin Cansarse en AGUAS ABIERTAS" href="https://www.youtube.com/embed/cKkLBBLNvpk" data-youtubeid="cKkLBBLNvpk">
                                        <img src="https://i.ytimg.com/vi/hu_CdkWZdFk/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLBDRgOJJQVNCrKcZdkdUeh3h10nvw" alt="..” AGUAS ABIERTAS" style="width: 23%; vertical-align: top" loading="lazy">
                                        <span style="width: 50%;">Como Nadar sin Cansarse</span>
                                    </a>
                                </li>
                                <li class="nav-item border-dark border-bottom w-100">
                                    <a class="nav-link d-flex justify-content-evenly text_color-white-main align-items-center" title="DESAFÍO OLÍMPICO - Nastya y Artem aprende a nadar en la piscina" href="https://www.youtube.com/embed/BEAsbtpK3Bc" data-youtubeid="BEAsbtpK3Bc">
                                        <img src="https://i.ytimg.com/vi/cKkLBBLNvpk/mqdefault.jpg" alt="..” AGUAS ABIERTAS" style="width: 23%; vertical-align: top" loading="lazy">
                                        <span style="width: 50%;">DESAFÍO OLÍMPICO - Nastya y Artem aprende a nadar en la piscina</span>
                                    </a>
                                </li>
                                <li class="nav-item border-dark border-bottom w-100">
                                    <a class="nav-link d-flex justify-content-evenly text_color-white-main align-items-center" title="Episodio 3 | “A day in the life…” AGUAS ABIERTAS" href="https://www.youtube.com/embed/cKkLBBLNvpk" data-youtubeid="cKkLBBLNvpk">
                                        <img src="https://i.ytimg.com/vi/cKkLBBLNvpk/mqdefault.jpg" alt="Episodio 3 | “A day in the life…” AGUAS ABIERTAS" style="width: 23%; vertical-align: top" loading="lazy">
                                        <span style="width: 50%;">Episodio 2 | “A day in the life…” AGUAS ABIERTAS</span>
                                    </a>
                                </li>
                                <li class="nav-item border-dark border-bottom w-100">
                                    <a class="nav-link d-flex justify-content-evenly text_color-white-main align-items-center" title="PORTIA DEL RIO PONCHA SU BOLETO A SANTIAGO 2023" href="https://www.youtube.com/embed/5lVa5T-b7_Q" data-youtubeid="5lVa5T-b7_Q">
                                        <img src="https://i.ytimg.com/vi/5lVa5T-b7_Q/mqdefault.jpg" alt="PORTIA DEL RIO PONCHA SU BOLETO A SANTIAGO 2023" style="width: 23%; vertical-align: top" loading="lazy">
                                        <span style="width: 50%;">PORTIA DEL RIO PONCHA SU BOLETO A SANTIAGO 2023</span>
                                    </a>
                                </li>
                                <li class="nav-item border-dark border-bottom w-100">
                                    <a class="nav-link d-flex justify-content-evenly text_color-white-main align-items-center" title="APRENDE A NADAR | Club Acuático de Santurce" href="https://www.youtube.com/embed/3CJxZuONLTk" data-youtubeid="3CJxZuONLTk">
                                        <img src="https://i.ytimg.com/vi/3CJxZuONLTk/mqdefault.jpg" alt="APRENDE A NADAR | Club Acuático de Santurce" style="width: 23%; vertical-align: top" loading="lazy">
                                        <span style="width: 50%;">APRENDE A NADAR | Club Acuático de Santurce</span>
                                    </a>
                                </li>
                                <li class="nav-item border-dark border-bottom w-100">
                                    <a class="nav-link d-flex justify-content-evenly text_color-white-main align-items-center" title="BTS | CCCAN NATACIÓN 2022" href="https://www.youtube.com/embed/n8MH4Pi2z7E" data-youtubeid="n8MH4Pi2z7E">
                                        <img src="https://i.ytimg.com/vi/n8MH4Pi2z7E/mqdefault.jpg" alt="BTS | CCCAN NATACIÓN 2022" style="width: 23%; vertical-align: top" loading="lazy">
                                        <span style="width: 50%;">BTS | CCCAN NATACIÓN 2022</span>
                                    </a>
                                </li>
                                <li class="nav-item border-dark border-bottom w-100">
                                    <a class="nav-link d-flex justify-content-evenly text_color-white-main align-items-center" title="PING PONG CON POLO ACUÁTICO FEMENINO" href="https://www.youtube.com/embed/AHRj2X-HN2w" data-youtubeid="AHRj2X-HN2w">
                                        <img src="https://i.ytimg.com/vi/AHRj2X-HN2w/mqdefault.jpg" alt="PING PONG CON POLO ACUÁTICO FEMENINO" style="width: 23%; vertical-align: top" loading="lazy">
                                        <span style="width: 50%;">PING PONG CON POLO ACUÁTICO FEMENINO</span>
                                    </a>
                                </li>
                                <li class="nav-item border-dark border-bottom w-100">
                                    <a class="nav-link d-flex justify-content-evenly text_color-white-main align-items-center" title="BTS | CCCAN NATACIÓN 2022" href="https://www.youtube.com/embed/n8MH4Pi2z7E" data-youtubeid="n8MH4Pi2z7E">
                                        <img src="https://i.ytimg.com/vi/d6rKa_lp3e0/mqdefault.jpg" alt="BTS | CCCAN NATACIÓN 2022" style="width: 23%; vertical-align: top" loading="lazy">
                                        <span style="width: 50%;">BTS | CCCAN NATACIÓN 2022</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- information youtube end -->

    <!-- opening hours section start -->
    <section id="opening_section">
        <div class="container">
            <div class="row row mx-0 my-5 py-5">
                <h2 class="title_section fw-semibold display-5 d-flex justify-content-sm-start align-items-center">Horario</h2>
                <p class="subtitle_section mb-3">Horarios flexibles</p>
                <div class="col-12">
                    <div class="table-responsive rounded border">
                        <table class="table m-0">
                            <thead class="bg_color-blue-derivate text-white small">
                                <tr>
                                    <th class="" scope="col">Nombres de alumnos</th>
                                    <th class="" scope="col">Horarios de Instruccion</th>
                                    <th class="" scope="col">Instructores</th>
                                </tr>
                            </thead>
                            <tbody class="small">
                                <tr>
                                    <td class="">Luis Moran</td>
                                    <td class="">9:00 AM - 11:00 AM</td>
                                    <td class="">Aaron Chapman</td>
                                </tr>
                                <tr>
                                    <td class="">Alberto Farias</td>
                                    <td class="">8:00 AM - 9:00 AM</td>
                                    <td class="">Adam Stewart</td>
                                </tr>
                                <tr>
                                    <td class="">Reinaldo Quintero</td>
                                    <td class="">9:00 AM - 10:00 AM</td>
                                    <td class="">Aaron Chapman</td>
                                </tr>
                                <tr>
                                    <td class="">Simon Dias</td>
                                    <td class="">8:00 AM - 9:00 AM</td>
                                    <td class="">Donna Wilson</td>
                                </tr>
                                <tr>
                                    <td class="">Luis Manrrique</td>
                                    <td class="">9:00 AM - 11:00 AM</td>
                                    <td class="">Donna Wilson</td>
                                </tr>
                                <tr>
                                    <td class="">Marcos Antonio</td>
                                    <td class="">8:00 AM - 9:00 AM</td>
                                    <td class="">Randy Porter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- opening hours section end -->

    <!-- feature section start -->
    <section id="features">
        <div class="container">
            <div class="row">
                <h2 class="title_section fw-semibold display-5 d-flex justify-content-sm-start align-items-center">Niveles <span class="mx-2"> de </span> Natacion <span class="me-2"></span></h2>
                <p class="subtitle_section">Texto informacion</p>
                <ul id="" class="nav nav-tabs row d-flex border-0 m-0 justify-content-between align-items-center" role="tablist">
                    
                    <li class="nav-item col-2">
                        <a class="nav-link show active px-lg-2" onmousedown="sonido.play()" data-bs-toggle="tab" href="#tab-1" aria-selected="true" role="tab">
                            <i class="fa-solid fa-info"></i>
                            <h4 class="d-none d-lg-block">Información</h4>
                        </a>
                    </li>

                    <li class="nav-item col-2">
                        <a class="nav-link show px-lg-2" onmousedown="sonido.play()" data-bs-toggle="tab" href="#tab-2" aria-selected="false" role="tab" tabindex="-1">
                            <i class="bi bi-geo-alt"></i>
                            <h4 class="d-none d-lg-block">Aprendiz</h4>
                        </a>
                    </li>

                    <li class="nav-item col-2">
                        <a class="nav-link px-lg-2" onmousedown="sonido.play()" data-bs-toggle="tab" href="#tab-3" aria-selected="false" role="tab" tabindex="-1">
                            <i class="bi bi-fingerprint"></i>
                            <h4 class="d-none d-lg-block">Intermedio</h4>
                        </a>
                    </li>

                    <li class="nav-item col-2">
                        <a class="nav-link px-lg-2" onmousedown="sonido.play()" data-bs-toggle="tab" href="#tab-4" aria-selected="false" role="tab" tabindex="-1">
                            <i class="bi bi-person-bounding-box"></i>
                            <h4 class="d-none d-lg-block"></h4>
                        </a>
                    </li>

                    <li class="nav-item col-2">
                        <a class="nav-link px-lg-2" onmousedown="sonido.play()" data-bs-toggle="tab" href="#tab-5" aria-selected="false" role="tab" tabindex="-1">
                            <i class="bi bi-shop-window">Avanzado</i>
                            <h4 class="d-none d-lg-block"></h4>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    
                    {{-- 1 --}}
                    <div class="tab-pane active show" id="tab-1" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3 class="my-3">Proveen los placeres más dignos, como si los placeres del cuerpo fueran asumidos.</h3>
                                <p class="fst-italic lh-1">
                                    Es importante cuidar al paciente, ser seguido por el médico, pero es un
                                    momento de mucho dolor y sufrimiento.
                                </p>
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-check-all text_color-blue-derivate fs-4 me-2"></i>
                                        <p class="lh-1">
                                            No trabajo en absoluto excepto para sacar alguna ventaja de ello.
                                        </p>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-check-all text_color-blue-derivate fs-4 me-2"></i>
                                        <p class="lh-1">
                                            Duda o dolor irrure en las reprimendas en el placer que desea.
                                        </p>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-check-all text_color-blue-derivate fs-4 me-2"></i>
                                        <p class="lh-1">
                                            No trabajo en absoluto excepto para sacar alguna ventaja de ello.
                                            Duis aureur irrure dolor in reprehendit in placer tridetas storacaperda
                                            mastir dolor eu fu una brevet.
                                        </p>
                                    </li>
                                </ul>
                                <p class="lh-1">
                                    No trabajo en absoluto excepto para sacar alguna ventaja de ello.
                                    No te enojes con el dolor en la reprimenda en el placer que quiere
                                    ser un cabello del dolor en la esperanza de que no haya crianza. A
                                    menos que estén cegados por la lujuria, no salen, están en falta quienes
                                    abandonan sus deberes, el alma se ablanda, es decir, se afana.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 img-container order-lg-2 d-flex align-items-center pt-3 justify-content-center">
                                <img src="{{ asset('imgs/images_levels_natation/nivel_principiante.WebP') }}" class="img-fluid" width="60%" height="60%"  alt="..." loading="lazy">
                            </div>
                        </div>
                    </div>
                    
                    {{-- 2 --}}
                    <div class="tab-pane" id="tab-2" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3 class="my-3">Ni debéis el ejercicio de quienes os deben los deberes de resiliencia</h3>
                                <p class="lh-1">
                                    No trabajo en absoluto excepto para sacar alguna ventaja de ello.
                                    No te enojes con el dolor en la reprimenda en el placer que quiere
                                    ser un cabello del dolor en la esperanza de que no haya crianza. A
                                    menos que estén cegados por la lujuria, no salen, están en falta quienes
                                    abandonan sus deberes, el alma se ablanda, es decir, se afana.
                                </p>
                                <p class="fst-italic lh-1">
                                    Es importante cuidar al paciente, ser seguido por el médico,
                                    pero es un momento de mucho dolor y sufrimiento.
                                </p>
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-check-all text_color-blue-derivate fs-4 me-2"></i>
                                        <p class="lh-1">
                                            No trabajo en absoluto excepto para sacar alguna ventaja de ello.
                                        </p>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-check-all text_color-blue-derivate fs-4 me-2"></i>
                                        <p class="lh-1">
                                            Duda o dolor irrure en las reprimendas en el placer que desea.
                                        </p>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-check-all text_color-blue-derivate fs-4 me-2"></i>
                                        <p class="lh-1">
                                            Proveen resiliencia, ni para los dolores más duros de las cosas,
                                            ue aquellos que a. Ni el dolor mismo ni el placer sino
                                        </p>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-check-all text_color-blue-derivate fs-4 me-2"></i>
                                        <p class="lh-1">
                                            No trabajo en absoluto excepto para sacar alguna ventaja de ello.
                                            Duis aureur irrure dolor in reprehendit in placer tridetas storacaperda
                                            mastir dolor eu fu una brevet.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div
                                class="col-lg-6 order-1 img-container order-lg-2 d-flex align-items-center pt-3 justify-content-center">
                                <img src="{{ asset('imgs/images_levels_natation/nivel_intermedio.WebP') }}" width="60%" height="60%" class="img-fluid" alt="..." loading="lazy">
                            </div>
                        </div>
                    </div>
                    
                    {{-- 3 --}}
                    <div class="tab-pane" id="tab-3" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3 class="my-3">Con los placeres del placer los acusamos de repudiarlos, pero de sufrir para
                                    ser aceptados</h3>
                                <p class="lh-1">
                                    No trabajo en absoluto excepto para sacar alguna ventaja de ello. No
                                    te enojes con el dolor en la reprimenda en el placer que quiere ser un
                                    cabello del dolor en la esperanza de que no haya crianza. A menos que estén
                                    cegados por la lujuria, no salen, están en falta quienes abandonan sus deberes,
                                    el alma se ablanda, es decir, se afana.
                                </p>
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-check-all text_color-blue-derivate fs-4 me-2"></i>
                                        <p class="lh-1">
                                            No trabajo en absoluto excepto para sacar alguna ventaja de ello.
                                        </p>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-check-all text_color-blue-derivate fs-4 me-2"></i>
                                        <p class="lh-1">
                                            Duda o dolor irrure en las reprimendas en el placer que desea.
                                        </p>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-check-all text_color-blue-derivate fs-4 me-2"></i>
                                        <p class="lh-1">
                                            Proveen resiliencia, ni para los dolores más duros de las cosas,
                                            que aquellos que a. Ni el dolor mismo ni el placer sino
                                        </p>
                                    </li>
                                </ul>
                                <p class="fst-italic lh-1">
                                    Es importante cuidar al paciente, ser seguido por el médico,
                                    pero es un momento de mucho dolor y sufrimiento.
                                </p>
                            </div>
                            <div
                                class="col-lg-6 order-1 img-container order-lg-2 d-flex align-items-center pt-3 justify-content-center">
                                <img src="{{ asset('imgs/images_levels_natation/nivel_moderado.WebP') }}" width="60%" height="60%" class="img-fluid" alt="..." loading="lazy">
                            </div>
                        </div>
                    </div>
                    
                    {{-- 4 --}}
                    <div class="tab-pane" id="tab-4" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3 class="my-3">
                                    Que cada uno huya de ellos, les explicaré que son los dolores
                                    más duros para seguir al descubridor de las cosas.
                                </h3>
                                <p class="lh-1">
                                    No trabajo en absoluto excepto para sacar alguna ventaja de ello.
                                    No te enojes con el dolor en la reprimenda en el placer que quiere
                                    ser un cabello del dolor en la esperanza de que no haya crianza.
                                    A menos que estén cegados por la lujuria, no salen, están en falta
                                    quienes abandonan sus deberes, el alma se ablanda, es decir, se afana.
                                </p>
                                <p class="fst-italic lh-1">
                                    Es importante cuidar al paciente, ser seguido por el médico,
                                    pero es un momento de mucho dolor y sufrimiento.
                                </p>
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-check-all text_color-blue-derivate fs-4 me-2"></i>
                                        <p class="lh-1">
                                            No trabajo en absoluto excepto para sacar alguna ventaja de ello.
                                        </p>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-check-all text_color-blue-derivate fs-4 me-2"></i>
                                        <p class="lh-1">
                                            Duda o dolor irrure en las reprimendas en el placer que desea.
                                        </p>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-check-all text_color-blue-derivate fs-4 me-2"></i>
                                        <p class="lh-1">
                                            No trabajo en absoluto excepto para sacar alguna ventaja de ello.
                                            Duis aureur irrure dolor in reprehendit in placer tridetas storacaperda
                                            mastir dolor eu fu una brevet.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 img-container order-lg-2 d-flex align-items-center pt-3 justify-content-center">
                                <img src="{{ asset('imgs/images_levels_natation/nivel_avanzado.WebP') }}" width="60%" height="60%" class="img-fluid" alt="..." loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature section end -->

    <!-- section contact start -->
    <section id="contact">
        <div class="container">
            <div class="row mt-3">
                <h2 class="title_section fw-semibold display-5 d-flex justify-content-sm-start align-items-center">contacto<span class="me-2"></span></h2>
                <p class="subtitle_section mb-5">Contáctenos</p>
                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="fa-sharp fa-solid fa-map-location"></i>
                            <h4>Localización:</h4>
                            <p>A108 Adam Street, Nueva York, NY 535022</p>
                        </div>
                        <div class="email">
                            <i class="fa-solid fa-envelopes-bulk"></i>
                            <h4>Correo electrónico:</h4>
                            <p>info@ejemplo.com</p>
                        </div>
                        <div class="phone">
                            <i class="fa-solid fa-phone-volume"></i>
                            <h4>Llamada:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">
                    <form action="#" method="post" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" required>
                            </div>
                            <div class="col-md-6 form-group mt-2 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Tu correo electrónico" required>
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="sujeto" required>
                        </div>
                        <div class="form-group mt-2">
                            <textarea class="form-control" name="message" rows="5" placeholder="mensaje" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-md px-5 bg_color-blue-derivate text-white">Enviar mensaje</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- section contact end -->
@endsection
