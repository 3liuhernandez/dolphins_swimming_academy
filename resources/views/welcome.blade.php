@extends('layouts.master')

@section('body')
    <!-- Students section start -->
    <section id="students_section">
        <div class="container my-5">
            <div class="row mx-0">
                <div class="col-12">
                    <div class="text-welcome py-3 my-0 my-sm-3 my-md-4 my-lg-5 text-center d-flex flex-column justify-content-around align-items-center">
                        <h1 class="display-3 fw-semibold lh-1">¡Bienvenidos nuevos estudiantes!</h1>
                        <p class="fw-semibold text-muted my-4 my-lg-3">
                            Concebimos al ejercicio como un apoyo para lograr alcanzar un estado de salud física y
                            emocional,
                            dado no solo por la ausencia de enfermedad, sino también por la posibilidad de disfrutar de las
                            diferentes
                            alternativas de actividad y socialización que nos ofrece el medio circundante.
                        </p>
                        <a class="btn btn-md bg_color-blue-derivate text-white fw-semibold px-5" href="{{ route('register') }}">Registrate</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Students section end -->

    <!-- stadistic section start -->
    <section id="stadistic_section">
        <div class="container py-3 py-lg-5" id="icon-grid">
            <div class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-4 m-0 gx-4 gy-3 flex-wrap justify-content-center">
                
                <?php for($i=0; $i < 3 ; $i++) { ?>
                    <div class="col-9">
                        <div class="d-flex flex-wrap justify-content-center p-3">
                            @if ($i === 0)
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                    class="bi bi-bootstrap-reboot" viewBox="0 0 16 16">
                                    <path d="M1.161 8a6.84 6.84 0 1 0 6.842-6.84.58.58 0 1 1 0-1.16 8 8 0 1 1-6.556 3.412l-.663-.577a.58.58 0 0 1 .227-.997l2.52-.69a.58.58 0 0 1 .728.633l-.332 2.592a.58.58 0 0 1-.956.364l-.643-.56A6.812 6.812 0 0 0 1.16 8z" />
                                    <path d="M6.641 11.671V8.843h1.57l1.498 2.828h1.314L9.377 8.665c.897-.3 1.427-1.106 1.427-2.1 0-1.37-.943-2.246-2.456-2.246H5.5v7.352h1.141zm0-3.75V5.277h1.57c.881 0 1.416.499 1.416 1.32 0 .84-.504 1.324-1.386 1.324h-1.6z" />
                                </svg>
                            @elseif($i === 1)
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                    class="bi bi-cpu-fill" viewBox="0 0 16 16">
                                    <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
                                    <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z" />
                                </svg>
                            @elseif($i === 2)
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                    class="bi bi-calendar3" viewBox="0 0 16 16">
                                    <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                    <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                </svg>
                            @endif
                            <div class="text-center border rounded p-3 mt-3">
                                <h3 class="fw-bold mb-0 fs-4 border-bottom">Featured title</h3>
                                <p class="m-0">Paragraph of text beneath the heading to explain the heading.</p>
                            </div>
                        </div>
                    </div>
                <?php }?>

                <div class="col-9 col-sm-6 col-md-12 col-lg-3 mx-auto">
                    <div class="d-flex flex-wrap justify-content-center align-items-center p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
                            <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
                        </svg>
                        <div class="text-center text-center border rounded p-3 mt-3 ms-md-3 ms-lg-0">
                            <h3 class="fw-bold mb-0 fs-4 border-bottom">Featured title</h3>
                            <p class="m-0">Paragraph of text beneath the heading to explain the heading.</p>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </section>
    <!-- stadistic section end -->

    <!-- about section start -->
    <section id="about">
        <div class="container py-lg-5">
            <div class="row m-0">
                <h2 class="title_section fw-semibold display-5 d-flex justify-content-sm-start align-items-center">
                    Acerca de <span class="me-2"></span></h2>
                <p class="subtitle_section">Quienes somos</p>

                <div class="col-lg-6">
                    <p class="lh-1 text_inf">
                        Es importante cuidar al paciente, ser seguido por el médico,
                        pero es un momento de mucho dolor y sufrimiento.
                    </p>
                    <ul class="nav">
                        <li class="nav-item small">
                            <i class="bi bi-check-all text_color-blue-derivate fs-4 me-2"></i>
                            <p class="m-0 lh-1">No trabajo para nada excepto para sacarle algún provecho</p>
                        </li>
                        <li class="nav-item small">
                            <i class="bi bi-check-all text_color-blue-derivate fs-4 me-2"></i>
                            <p class="m-0 lh-1">Duda o dolor irrure en las reprimendas en el placer que quiere</p>
                        </li>
                        <li class="nav-item small">
                            <i class="bi bi-check-all text_color-blue-derivate fs-4 me-2"></i>
                            <p class="m-0 lh-1">No trabajo para nada excepto para sacarle algún provecho</p>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p class="lh-1 text_inf">
                        No trabajo en absoluto excepto para sacar alguna ventaja de ello.
                        No te enojes con el dolor en la reprimenda en el placer que quiere ser un cabello del
                        dolor en la esperanza de que no haya crianza. A menos que estén cegados por la lujuria,
                        no salen, están en falta quienes abandonan sus deberes y ablandan su corazón,
                        eso es trabajo.
                    </p>
                    <a class="btn btn-md bg_color-blue-derivate text-white fw-semibold px-5" href="#">Aprende más</a>
                </div>

            </div>
        </div>
    </section>
    <!-- about section end -->

    <!-- class section start-->
    <section id="galeria_section">
        <div class="container p-sm-3 py-lg-0 my-5">
            <h2 class="title_section fw-semibold display-5 d-flex justify-content-sm-start align-items-center ps-2">Galeria <span class="me-2"></span></h2>
            <p class="subtitle_section ps-2">Nuestros mejores alumnos</p>
            <div class="row m-0 g-2 g-lg-4 py-2 py-md-3 p-lg-0 row-cols-1 row-cols-sm-2 row-cols-md-3 flex-wrap justify-content-center ">
                <?php for($i = 0; $i < 6; $i++) { ?>
                    <div class="col">
                        <div class="card border mx-1 mx-lg-0">
                            <!-- Button trigger modal -->
                            <a class="nav-link" data-bs-toggle="modal" role="button" data-bs-target="#staticBackdrop">
                                @if ($i == 0)
                                    <img src="{{ asset('imgs/img_banner.png') }}" class="img-fluid w-100 p-3" alt="...">
                                @elseif($i == 1)
                                    <img src="{{ asset('imgs/img_banner2.png') }}" class="img-fluid w-100 p-3" alt="...">
                                @elseif($i == 2)
                                    <img src="{{ asset('imgs/img_banner3.png') }}" class="img-fluid w-100 p-3" alt="...">
                                @elseif($i == 3)
                                    <img src="{{ asset('imgs/img_banner4.png') }}" class="img-fluid w-100 p-3" alt="...">
                                @else
                                    <img src="{{ asset('imgs/img_banner.png') }}" class="img-fluid w-100 p-3" alt="...">
                                @endif
                            </a>

                            <div class="card-body">
                                <div class="d-flex justify-content-center align-items-center">
                                    <p class="m-0 text_color-blue-derivate fw-semibold">Entrenamientos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog mb-5">
                        <div class="modal-content">
                            <div class="modal-header bg_color-blue-derivate">
                                <h2 class="modal-title fs-4 lh-1 text-center text-white fw-bold w-100" id="staticBackdropLabel">Aprende en nuestra academia</h2>
                                <button type="button" class="btn-close me-2 text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row m-0">
                                    <div class="col-12 col-sm-6">
                                        <h4 class="text-center text_color-blue-derivate">Perfil Baby name</h4>
                                        <img src="{{ asset('imgs/img_banner.png') }}" class="img-fluid my-3" alt="...">
                                        <ul>
                                            <p class="m-m fw-semibold text_color-blue-derivate">Nivel de aprendizaje</p>
                                            <li>Edad: 2 años</li>
                                            <li>Nombre: relleno</li>
                                            <li>Apellido: relleno</li>
                                            <li>Prof: relleno</li>
                                            <li>Nivel: Principiante</li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <p class="small">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Odio eius maiores iste debitis veniam iste!
                                        </p>
                                        <p class="small m-0">
                                            Laborum cumque reprehenderit esse,
                                            veritatis aspernatur, quibusdam amet, animi voluptatibus nulla sapiente
                                            commodi natus. Iste, animi.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-md px-5 bg_color-blue-derivate text-white" onclick="location.href='{{ route('register') }}'">Registrate gratis</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="btns mt-5 mt-md-4 text-center">
                    <button type="button" class="btn btn-md px-5 bg_color-blue-derivate text-white" onclick="location.href='{{ route('class') }}'">Ver clases</button>
                </div>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path
                d="M0,0v25.8c4.2,1.1,8.1,4.1,11,9.1c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0
                c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0c3.7-6.4,9.2-9.6,14.6-9.6
                c5.5,0,10.9,3.2,14.6,9.6c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0
                c6.3,10.8,19,10.8,25.3,0c3.7-6.4,9.2-9.6,14.6-9.6c5.5,0,10.9,3.2,14.6,9.6c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0
                c6.3,10.8,19,10.8,25.3,0c7.5-12.9,22-12.9,29.3,0c6.1,10.9,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0
                c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0
                c6.3,10.8,19.2,10.9,25.3,0c7.4-13.3,21.9-13.2,29.3,0c6.1,10.9,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0
                c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0
                c1.9,3.2,4.3,5.5,7,6.8V0H0z">
            </path>
            <path
                d="M993,40.9c-7.4-12.8-21.9-12.8-29.3,0c-6.3,10.8-19,10.8-25.3,0c-7.4-12.8-21.9-12.8-29.3,0c-6.3,10.8-19,10.8-25.3,0
                c-7.4-12.8-21.9-12.8-29.3,0c-6.3,10.8-19,10.8-25.3,0c-7.4-12.8-21.9-12.8-29.3,0c-6.3,10.8-19,10.8-25.3,0
                c-7.4-12.8-21.9-12.8-29.3,0c-6.3,10.8-19,10.8-25.3,0c-7.4-12.8-21.9-12.8-29.3,0c-6.3,10.8-19,10.8-25.3,0
                c-7.4-12.8-21.9-12.8-29.3,0c-6.3,10.8-19,10.8-25.3,0c-7.4-12.8-21.9-12.8-29.3,0c-6.3,10.8-19,10.8-25.3,0
                c-7.4-12.8-21.9-12.8-29.3,0c-6.3,10.8-19,10.8-25.3,0c-7.4-12.8-21.9-12.8-29.3,0c-6.3,10.8-19,10.8-25.3,0
                c-7.4-12.8-21.9-12.8-29.3,0c-6.3,10.8-19,10.8-25.3,0c-3.7-6.4-9.2-9.6-14.6-9.6c-5.5,0-10.9,3.2-14.6,9.6
                c-6.3,10.8-19,10.8-25.3,0c-7.4-12.8-21.9-12.8-29.3,0c-6.3,10.8-19,10.8-25.3,0c-7.4-12.8-21.9-12.8-29.3,0
                c-6.3,10.8-19,10.8-25.3,0c-3.7-6.4-9.2-9.6-14.6-9.6c-5.5,0-10.9,3.2-14.6,9.6c-6.3,10.8-19,10.8-25.3,0
                c-7.4-12.8-21.9-12.8-29.3,0c-6.3,10.8-19,10.8-25.3,0c-7.4-12.8-21.9-12.8-29.3,0c-6.3,10.8-19,10.8-25.3,0
                c-7.4-12.8-21.9-12.8-29.3,0c-6.3,10.8-19,10.8-25.3,0c-2.9-4.9-6.8-8-11-9.1V38c4.2,1.1,8.1,4.1,11,9.1c6.3,10.8,19,10.8,25.3,0
                c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0
                c6.3,10.8,19,10.8,25.3,0c3.7-6.4,9.2-9.6,14.6-9.6c5.5,0,10.9,3.2,14.6,9.6c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0
                c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0c3.7-6.4,9.2-9.6,14.6-9.6c5.5,0,10.9,3.2,14.6,9.6
                c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0
                c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0
                c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0
                c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0
                c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0c1.9,3.2,4.3,5.5,7,6.8v-6.2C997.3,46.4,994.9,44.1,993,40.9z">
            </path>
            <path
                d="M991,50.9c-6.3-10.8-19-10.8-25.3,0c-7.4,12.8-21.9,12.8-29.3,0c-6.3-10.8-19-10.8-25.3,0c-7.4,12.8-21.9,12.8-29.3,0
                c-6.3-10.8-19-10.8-25.3,0c-7.4,12.8-21.9,12.8-29.3,0c-6.3-10.8-19-10.8-25.3,0c-7.4,12.8-21.9,12.8-29.3,0
                c-6.3-10.8-19-10.8-25.3,0c-7.4,12.8-21.9,12.8-29.3,0c-6.3-10.8-19-10.8-25.3,0c-7.4,12.8-21.9,12.8-29.3,0
                c-6.3-10.8-19-10.8-25.3,0c-7.4,12.8-21.9,12.8-29.3,0c-6.3-10.8-19-10.8-25.3,0c-7.4,12.8-21.9,12.8-29.3,0
                c-6.3-10.8-19-10.8-25.3,0c-7.4,12.8-21.9,12.8-29.3,0c-6.3-10.8-19-10.8-25.3,0c-7.4,12.8-21.9,12.8-29.3,0
                c-6.3-10.8-19-10.8-25.3,0c-7.4,12.8-21.9,12.8-29.3,0c-6.3-10.8-19-10.8-25.3,0c-7.4,12.8-21.9,12.8-29.3,0
                c-6.3-10.8-19-10.8-25.3,0c-7.4,12.8-21.9,12.8-29.3,0c-6.3-10.8-19-10.8-25.3,0c-7.4,12.8-21.9,12.8-29.3,0
                c-6.3-10.8-19-10.8-25.3,0c-7.4,12.8-21.9,12.8-29.3,0c-6.3-10.8-19-10.8-25.3,0c-7.4,12.8-21.9,12.8-29.3,0
                c-6.3-10.8-19-10.8-25.3,0c-7.4,12.8-21.9,12.8-29.3,0c-6.3-10.8-19-10.8-25.3,0c-7.4,12.8-21.9,12.8-29.3,0
                c-2.3-4-5.5-6.5-8.9-7.6V49c4.2,1.1,8.1,4.1,11,9.1c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0
                c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0c3.7-6.4,9.2-9.6,14.6-9.6
                c5.5,0,10.9,3.2,14.6,9.6c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0
                c6.3,10.8,19,10.8,25.3,0c3.7-6.4,9.2-9.6,14.6-9.6c5.5,0,10.9,3.2,14.6,9.6c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0
                c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0
                c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0
                c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0
                c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0c6.3,10.8,19,10.8,25.3,0c7.4-12.8,21.9-12.8,29.3,0
                c1.9,3.2,4.3,5.5,7,6.8v-5.6C996.6,57.8,993.4,55,991,50.9z">
            </path>
        </svg>
    </section>
    <!-- class section end -->

    <!-- services section start -->
    <section id="services">
        <div class="container">
            <div class="row m-0">
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
            <div class="row m-0">
                <div class="col-12">
                    <div class="text-profesional py-5 text-center d-flex flex-column justify-content-center align-items-center">
                        <h2 class="display-4 fw-semibold text-white lh-1">Natacion Profesional <span class="me-2"></span></h2>
                        <p class="fw-semibold text-white my-4 my-lg-3">
                            Él buscará la educación del estudiante, pero esto sucederá al mismo tiempo
                            que con un gran trabajo y dolor. De hecho, para ir al más mínimo detalle, nadie
                            puede lograr ningún tipo de formación en el entrenamiento, pero sucede
                            mismo tiempo que con mucho esfuerzo y dolor. De hecho, para llegar al más
                            mínimo detalle, nadie debería ejercer ninguno de ellos.
                        </p>
                        <button type="button" class="btn btn-md bg_color-blue-derivate text-white fw-semibold px-5" onclick="location.href='{{ route('register') }}'">Unete gratis</button>
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
                            <li class="nav-item border-dark border-bottom w-100">
                                <a class="nav-link d-flex justify-content-evenly text_color-white-main align-items-center" title="Como Nadar sin Cansarse en AGUAS ABIERTAS" href="https://www.youtube.com/embed/cKkLBBLNvpk" data-youtubeid="cKkLBBLNvpk">
                                    <img src="https://i.ytimg.com/vi/hu_CdkWZdFk/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLBDRgOJJQVNCrKcZdkdUeh3h10nvw" alt="..” AGUAS ABIERTAS" style="width: 23%; vertical-align: top">
                                    <span style="width: 50%;">Como Nadar sin Cansarse</span>
                                </a>
                            </li>
                            <li class="nav-item border-dark border-bottom w-100">
                                <a class="nav-link d-flex justify-content-evenly text_color-white-main align-items-center" title="DESAFÍO OLÍMPICO - Nastya y Artem aprende a nadar en la piscina" href="https://www.youtube.com/embed/BEAsbtpK3Bc" data-youtubeid="BEAsbtpK3Bc">
                                    <img src="https://i.ytimg.com/vi/cKkLBBLNvpk/mqdefault.jpg" alt="..” AGUAS ABIERTAS" style="width: 23%; vertical-align: top">
                                    <span style="width: 50%;">DESAFÍO OLÍMPICO - Nastya y Artem aprende a nadar en la piscina</span>
                                </a>
                            </li>
                            <li class="nav-item border-dark border-bottom w-100">
                                <a class="nav-link d-flex justify-content-evenly text_color-white-main align-items-center" title="Episodio 3 | “A day in the life…” AGUAS ABIERTAS" href="https://www.youtube.com/embed/cKkLBBLNvpk" data-youtubeid="cKkLBBLNvpk">
                                    <img src="https://i.ytimg.com/vi/cKkLBBLNvpk/mqdefault.jpg" alt="Episodio 3 | “A day in the life…” AGUAS ABIERTAS" style="width: 23%; vertical-align: top">
                                    <span style="width: 50%;">Episodio 2 | “A day in the life…” AGUAS ABIERTAS</span>
                                </a>
                            </li>
                            <li class="nav-item border-dark border-bottom w-100">
                                <a class="nav-link d-flex justify-content-evenly text_color-white-main align-items-center" title="PORTIA DEL RIO PONCHA SU BOLETO A SANTIAGO 2023" href="https://www.youtube.com/embed/5lVa5T-b7_Q" data-youtubeid="5lVa5T-b7_Q">
                                    <img src="https://i.ytimg.com/vi/5lVa5T-b7_Q/mqdefault.jpg" alt="PORTIA DEL RIO PONCHA SU BOLETO A SANTIAGO 2023" style="width: 23%; vertical-align: top">
                                    <span style="width: 50%;">PORTIA DEL RIO PONCHA SU BOLETO A SANTIAGO 2023</span>
                                </a>
                            </li>
                            <li class="nav-item border-dark border-bottom w-100">
                                <a class="nav-link d-flex justify-content-evenly text_color-white-main align-items-center" title="APRENDE A NADAR | Club Acuático de Santurce" href="https://www.youtube.com/embed/3CJxZuONLTk" data-youtubeid="3CJxZuONLTk">
                                    <img src="https://i.ytimg.com/vi/3CJxZuONLTk/mqdefault.jpg" alt="APRENDE A NADAR | Club Acuático de Santurce" style="width: 23%; vertical-align: top">
                                    <span style="width: 50%;">APRENDE A NADAR | Club Acuático de Santurce</span>
                                </a>
                            </li>
                            <li class="nav-item border-dark border-bottom w-100">
                                <a class="nav-link d-flex justify-content-evenly text_color-white-main align-items-center" title="BTS | CCCAN NATACIÓN 2022" href="https://www.youtube.com/embed/n8MH4Pi2z7E" data-youtubeid="n8MH4Pi2z7E">
                                    <img src="https://i.ytimg.com/vi/n8MH4Pi2z7E/mqdefault.jpg" alt="BTS | CCCAN NATACIÓN 2022" style="width: 23%; vertical-align: top">
                                    <span style="width: 50%;">BTS | CCCAN NATACIÓN 2022</span>
                                </a>
                            </li>
                            <li class="nav-item border-dark border-bottom w-100">
                                <a class="nav-link d-flex justify-content-evenly text_color-white-main align-items-center" title="PING PONG CON POLO ACUÁTICO FEMENINO" href="https://www.youtube.com/embed/AHRj2X-HN2w" data-youtubeid="AHRj2X-HN2w">
                                    <img src="https://i.ytimg.com/vi/AHRj2X-HN2w/mqdefault.jpg" alt="PING PONG CON POLO ACUÁTICO FEMENINO" style="width: 23%; vertical-align: top">
                                    <span style="width: 50%;">PING PONG CON POLO ACUÁTICO FEMENINO</span>
                                </a>
                            </li>
                            <li class="nav-item border-dark border-bottom w-100">
                                <a class="nav-link d-flex justify-content-evenly text_color-white-main align-items-center" title="BTS | CCCAN NATACIÓN 2022" href="https://www.youtube.com/embed/n8MH4Pi2z7E" data-youtubeid="n8MH4Pi2z7E">
                                    <img src="https://i.ytimg.com/vi/d6rKa_lp3e0/mqdefault.jpg" alt="BTS | CCCAN NATACIÓN 2022" style="width: 23%; vertical-align: top">
                                    <span style="width: 50%;">BTS | CCCAN NATACIÓN 2022</span>
                                </a>
                            </li>
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
            <div class="row mx-0 my-5 py-5">
                <h2 class="title_section fw-semibold display-5 d-flex justify-content-sm-start align-items-center">Nuestros
                    <span class="mx-2">Horarios</span></h2>
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
                                    <td class="">Eliu Mantequilla</td>
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

            <h2 class="title_section fw-semibold display-5 d-flex justify-content-sm-start align-items-center ps-3">
                Niveles<span class="mx-2"> de </span>Natacion<span class="me-2"></span></h2>
            <p class="subtitle_section ps-3">Texto informacion</p>

            <ul class="nav nav-tabs row d-flex border-0 m-0" role="tablist">
                <li class="nav-item col-3">
                    <a class="nav-link show active py-0 px-lg-3 py-md-2" onmousedown="sonido.play()" data-bs-toggle="tab" href="#tab-1" aria-selected="true" role="tab">
                        <i class="bi bi-geo-alt p-0 pe-lg-3"></i>
                        <h4 class="d-none d-lg-block">Nivel principiante</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link py-0 px-lg-3 py-md-2" onmousedown="sonido.play()" data-bs-toggle="tab" href="#tab-2" aria-selected="false" role="tab" tabindex="-1">
                        <i class="bi bi-fingerprint p-0 pe-lg-3"></i>
                        <h4 class="d-none d-lg-block">Nivel aprendiz</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link py-0 px-lg-3 py-md-2" onmousedown="sonido.play()" data-bs-toggle="tab" href="#tab-3" aria-selected="false" role="tab" tabindex="-1">
                        <i class="bi bi-person-bounding-box p-0 pe-lg-3"></i>
                        <h4 class="d-none d-lg-block">Nivel intermedio</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link py-0 px-lg-3 py-md-2" onmousedown="sonido.play()" data-bs-toggle="tab" href="#tab-4" aria-selected="false" role="tab" tabindex="-1">
                        <i class="bi bi-shop-window p-0 pe-lg-3"></i>
                        <h4 class="d-none d-lg-block">Nivel avanzado</h4>
                    </a>
                </li>
            </ul>
            
            {{-- 1 --}}
            <div class="tab-content">
                <div class="tab-pane active show" id="tab-1" role="tabpanel">
                    <div class="row m-0">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3 class="my-3">Proveen los placeres más dignos, como si los placeres del cuerpo fueran
                                asumidos.</h3>
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
                        <div
                            class="col-lg-6 order-1 img-container order-lg-2 d-flex align-items-center pt-3 justify-content-center">
                            <img src="{{ asset('imgs/levels_natacion/nivel_principiante.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                {{-- 2 --}}
                <div class="tab-pane" id="tab-2" role="tabpanel">
                    <div class="row m-0">
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
                            <img src="{{ asset('imgs/levels_natacion/nivel_intermedio.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                {{-- 3 --}}
                <div class="tab-pane" id="tab-3" role="tabpanel">
                    <div class="row m-0">
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
                            <img src="{{ asset('imgs/levels_natacion/nivel_moderado.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                {{-- 4 --}}
                <div class="tab-pane" id="tab-4" role="tabpanel">
                    <div class="row m-0">
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
                            <img src="{{ asset('imgs/levels_natacion/nivel_avanzado.png') }}" alt="" class="img-fluid">
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
            <div class="row m-0 mt-5">
                <h2 class="title_section fw-semibold display-5 d-flex justify-content-sm-start align-items-center">contacto<span class="me-2"></span></h2>
                <p class="subtitle_section mb-5">Contáctenos</p>
                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Localización:</h4>
                            <p>A108 Adam Street, Nueva York, NY 535022</p>
                        </div>
                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Correo electrónico:</h4>
                            <p>info@ejemplo.com</p>
                        </div>
                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Llamada:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-8 mt-5 mt-lg-0">
                    <form action="#" method="post" class="php-email-form">
                        <div class="row m-0">
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
