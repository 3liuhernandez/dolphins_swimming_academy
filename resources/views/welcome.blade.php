@extends('layouts.master')

@section('body')
    <!-- Students section start -->
    <section id="students_section">
        <div class="container">
            <div class="row mb-5 mx-0">
                <div class="col-12">
                    <div class="text-welcome my-5 py-5 text-center d-flex flex-column justify-content-around align-items-center">
                        <h1 class="display-2 fw-semibold text-white lh-1 m-0" style="text-shadow: -7px -3px 9px #002644;">¡Bienvenidos nuevos estudiantes!</h1>
                        <p class="fw-semibold my-4 text-white">
                            Regístrese ahora para recibir una lección de prueba de 25 minutos, ¡completamente gratis!
                        </p>
                        <a class="btn btn-md bg_color-blue-derivate text-white fw-semibold px-5" role="button" href="{{ route('register') }}">Registrate</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Students section end -->

    <section id="information">
        <div class="container px-4 py-5" id="icon-grid">
            <h2 class="fw-semibold display-5 text_color-blue-derivate m-0" style="text-shadow: 1px 4px 4px #7c7c7c;">Icon grid</h2>
                <div class="row m-0 gap-0 gap-3 py-3">
                    <div class="col d-flex align-items-start shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="4rem" height="4rem" fill="currentColor" class="bi bi-bootstrap-reboot" viewBox="0 0 16 16">
                            <path d="M1.161 8a6.84 6.84 0 1 0 6.842-6.84.58.58 0 1 1 0-1.16 8 8 0 1 1-6.556 3.412l-.663-.577a.58.58 0 0 1 .227-.997l2.52-.69a.58.58 0 0 1 .728.633l-.332 2.592a.58.58 0 0 1-.956.364l-.643-.56A6.812 6.812 0 0 0 1.16 8z"/>
                            <path d="M6.641 11.671V8.843h1.57l1.498 2.828h1.314L9.377 8.665c.897-.3 1.427-1.106 1.427-2.1 0-1.37-.943-2.246-2.456-2.246H5.5v7.352h1.141zm0-3.75V5.277h1.57c.881 0 1.416.499 1.416 1.32 0 .84-.504 1.324-1.386 1.324h-1.6z"/>
                        </svg>
                        <div class="p-3">
                            <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
                            <p>Paragraph of text beneath the heading to explain the heading.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="4rem" height="4rem" fill="currentColor" class="bi bi-cpu-fill" viewBox="0 0 16 16">
                            <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
                            <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z"/>
                        </svg>
                        <div class="p-3">
                            <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
                            <p>Paragraph of text beneath the heading to explain the heading.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="4rem" height="4rem" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                            <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                            <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                        </svg>
                        <div class="p-3">
                            <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
                            <p>Paragraph of text beneath the heading to explain the heading.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="4rem" height="4rem" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                        </svg>
                        <div class="p-3">
                            <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
                            <p>Paragraph of text beneath the heading to explain the heading.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="4rem" height="4rem" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                            <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
                        </svg>
                        <div class="p-3">
                            <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
                            <p>Paragraph of text beneath the heading to explain the heading.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="4rem" height="4rem" fill="currentColor" class="bi bi-toggles2" viewBox="0 0 16 16">
                            <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z"/>
                            <path d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z"/>
                            <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z"/>
                        </svg>
                        <div class="p-3">
                            <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
                            <p>Paragraph of text beneath the heading to explain the heading.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="4rem" height="4rem" fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
                        </svg>
                        <div class="p-3">
                            <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
                            <p>Paragraph of text beneath the heading to explain the heading.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="4rem" height="4rem" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
                            <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z"/>
                        </svg>
                        <div class="p-3">
                            <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
                            <p>Paragraph of text beneath the heading to explain the heading.</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- class section start-->
    <section id="galeria">
        <div class="container p-sm-3 py-lg-0 my-5">
            <div class="col-12 px-2">
                <h2 class="fw-semibold display-5 text_color-blue-derivate m-0" style="text-shadow: 1px 4px 4px #7c7c7c;">Galeria</h2>
            </div>
            <div class="row m-0 g-4 py-2 py-md-3 p-lg-0 row-cols-1 row-cols-sm-2 row-cols-md-3 flex-wrap justify-content-center">
                <?php for($i = 0; $i < 6; $i++) { ?>
                <div class="col p-0 px-sm-2">
                    <div class="card border-0 shadow">
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
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                            Odio eius maiores iste debitis veniam iste!
                                            <br><br>
                                            Laborum cumque reprehenderit esse, 
                                            veritatis aspernatur, quibusdam amet, animi voluptatibus nulla sapiente 
                                            commodi natus. Iste, animi.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-md px-5 bg_color-blue-derivate text-white" href="{{route('register')}}">Registrate gratis</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="btns mt-5 mt-md-4 text-center">
                    <button type="button" class="btn btn-md px-5 bg_color-blue-derivate text-white" href="#">Ver mas</button>
                </div>
            </div>
        </div>
    </section>
    <!-- class section end -->

    <!-- information section start -->
    <section id="natacion_profesional">
        <div class="container">
            <div class="row m-0">
                <div class="col-12 p-0 mt-0 my-lg-5 mt-lg-0">
                    <div class="my-5 py-5 text-center d-flex flex-column justify-content-center align-items-center">
                        <h2 class="display-3 m-0 fw-semibold text-white lh-1" style="text-shadow: -7px -3px 9px #002644;">Natacion Profesional</h2>
                        <p class="fw-semibold lh-sm my-5 text-white">
                            Él buscará la educación del estudiante, pero esto sucederá al mismo tiempo
                            que con un gran trabajo y dolor. De hecho, para ir al más mínimo detalle, nadie
                            puede lograr ningún tipo de formación en el entrenamiento, pero sucede
                            mismo tiempo que con mucho esfuerzo y dolor. De hecho, para llegar al más
                            mínimo detalle, nadie debería ejercer ninguno de ellos.
                        </p>
                        <button type="button" class="btn btn-md px-5 bg_color-blue-derivate text-white fw-semibold" href="{{ route('register') }}">Haga click para registrarse</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- information section end -->

    <!-- information youtube start -->
    <section id="iframe-youtube">
        <div class="container">
            <div class="row my-5 py-5 mx-0">
                <div class="title-iframe p-0">
                    <h2 class="text-center display-3 lh-1 mx-auto fw-semibold text_color-blue-derivate">Síguenos en nuestro canal de YouTube</h2>
                </div>
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
                <div class="col-12 text-center p-0">
                    <div class="information_horarios">
                        <h2 class="display-3 fw-semibold text_color-blue-derivate" style="text-shadow: 1px 4px 4px #7c7c7c;">Horarios de apertura</h2>
                        <p class="fw-semibold text_color-blue-derivate pb-3 m-0">
                            Es importante seguir el proceso de coaching,
                            pero es hora de trabajar
                        </p>
                    </div>
                </div>
                <div class="col-12 p-0">
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

    <!-- shortcode section start -->
    <section id="nivel_natacion">
        <div class="container">
            <div class="row m-0 my-5 py-5">
                <div class="col-12">
                    <div class="niveles_natacion text-center border-bottom">
                        <h2 class="display-3 fw-semibold text_color-blue-derivate" style="text-shadow: 1px 4px 4px #7c7c7c;"> Niveles de Natacion</h2>
                        <p class="fw-semibold text_color-blue-derivate ">
                            amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore
                        </p>
                    </div>
                </div>
                <div class="row m-0 p-5 bg-primary bg-opacity-25">
                    <div class="col-12 col-lg-10 rounded">
                        <h2 class="bw-semibold text_color-blue-main">Nivel 1</h2>
                        <p class="fw-semibold text_color-blue-derivate">
                            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoconsectetur adipiscing
                        </p>
                    </div>
                    <div class="col-12 col-lg-2 shortcode_right">
                        <img src="{{ asset('imgs/nivel1.jpg') }}" class="img-fluid rounded" alt="...">
                    </div>
                </div>
                <div class="row m-0 p-5 bg-primary bg-opacity-25">
                    <div class="col-12 col-lg-2 shortcode_right">
                        <img src="{{ asset('imgs/nivel2.jpg') }}" class="img-fluid rounded" alt="...">
                    </div>
                    <div class="col-12 col-lg-10 rounded">
                        <h2 class="bw-semibold text_color-blue-main">Nivel 2</h2>
                        <p class="fw-semibold text_color-blue-derivate">
                            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoconsectetur
                            adipiscing
                        </p>
                    </div>
                </div>
                <div class="row m-0 p-5 bg-primary bg-opacity-25">
                    <div class="col-12 col-lg-10 rounded">
                        <h2 class="bw-semibold text_color-blue-main">Nivel 3</h2>
                        <p class="fw-semibold text_color-blue-derivate">
                            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoconsectetur adipiscing
                        </p>
                    </div>
                    <div class="col-12 col-lg-2 shortcode_right">
                        <img src="{{ asset('imgs/nivel3.jpg') }}" class="img-fluid rounded" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shortcode section end -->

    <!-- section contact start -->
    <section id="contact">
        <div class="container bg-light border rounded my-5 py-4 py-lg-5">
            <h2 class="fw-semibold display-3 text-center mb-3 text_color-blue-derivate">Contactame !</h2>
            <p class="text-center text-center my-3 w-75 mx-auto">
                ¿Tiene usted alguna pregunta? Por favor, no dude en contactarnos
                directamente. Nuestro equipo se comunicará contigo en cuestión de horas para ayudarte.
            </p>
            <div class="row m-0">
                <div class="col-12 col-lg-8 ps-0">
                    <form class="w-100 d-flex flex-wrap" action="#eviando.." method="POST">
                        <div class="col-12 col-md-6">
                            <div class="input-group input-group-sm mb-2">
                                <span class="input-group-text bg_color-blue-derivate"><i class="bi bi-person-plus-fill text-white"></i></span>
                                <input type="text" name="name" id="name" class="form-control form-control-sm text-dark ps-2" placeholder="Ingrese su Nombre" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="input-group input-group-sm mb-2">
                                <span class="input-group-text bg_color-blue-derivate"><i class="bi bi-person-plus-fill text-white"></i></span>
                                <input type="text" name="lastName" id="apellido" class="form-control form-control-sm text-dark ps-2" placeholder="Ingrese su Apellido" required="">
                            </div>
                        </div>
                        <div class="col-12 col-md-7">
                            <div class="input-group input-group-sm mb-2">
                                <span class="input-group-text bg_color-blue-derivate"><i class="bi bi-envelope-at-fill text-white"></i></span>
                                <input type="email" name="email" id="email" class="form-control form-control-sm text-dark ps-2" placeholder="Correo Electronico" required="">
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="input-group input-group-sm mb-2">
                                <span class="input-group-text bg_color-blue-derivate"><i class="bi bi-telephone-fill text-white"></i></span>
                                <input type="tel" name="tel" id="telefono" class="form-control form-control-sm text-dark ps-1" placeholder="Telef:" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group input-group-sm mb-2">
                                <span class="input-group-text bg_color-blue-derivate"><i class="bi bi-file-text-fill text-white"></i></span>
                                <textarea class="form-control form-control-sm text-dark" name="mensaje" id="mensaje" cols="10" rows="2" placeholder="Escribenos tus comentarios"></textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3 col-6 mx-auto">
                            <button class="btn text-white w-75 bg_color-blue-derivate" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-4 py-4 p-lg-0 d-flex justify-content-center">
                    <iframe class="rounded img-fluid" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d250953.15110838244!2d-71.77411525196692!3d10.64599806263847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e89998e7a5bd625%3A0xce0904e0ea8de74b!2sMaracaibo%2C%20Zulia%2C%20Venezuela!5e0!3m2!1ses!2sus!4v1668629272011!5m2!1ses!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- section contact end -->
@endsection
