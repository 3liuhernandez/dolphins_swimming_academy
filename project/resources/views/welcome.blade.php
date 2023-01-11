@extends('layouts.master')

@section('body')
    <!-- Students section start -->
    <section class="students_section">
        <div class="container">
            <div class="row m-0">
                <div class="col-12">
                    <div class="text-welcome my-5 pt-5 mb-lg-0 text-center d-flex flex-column justify-content-around align-items-center">
                        <h1 class="display-2 fw-semibold text_color-blue-main w-75 lh-1" style="text-shadow: 1px 1px 2px #7c7c7c;">¡Bienvenidos nuevos estudiantes!</h1>
                        <p class="fw-semibold text_color-blue-derivate">
                            Regístrese ahora para recibir una lección de prueba de 25 minutos, ¡completamente gratis!
                        </p>
                        <button type="button" class="btn btn-md bg_color-blue-derivate text-white mt-4" href="#">Haga click para registrarse</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Students section end -->

    <!-- class section start-->
    <section class="card_section">
        <div class="container p-sm-3 py-lg-0 my-5">
            <div class="col-12 px-2">
                <h2 class="fw-semibold display-5 text_color-blue-main m-0" style="text-shadow: 1px 1px 2px #7c7c7c;">Clases</h2>
            </div>
            <div class="row m-0 g-4 p-3 p-md-3 p-lg-0 row-cols-1 row-cols-sm-2 row-cols-md-3 flex-wrap justify-content-center">
                <?php for($i = 0; $i < 6; $i++) { ?>
                <div class="col">
                    <div class="card shadow border-0">
                        <a class="nav-link" href="#"><img src="{{ asset('imgs/img_banner.png') }}" class="img-fluid" alt="..."></a>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="m-0 text_color-blue-derivate fw-semibold">Entrenamientos</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                <div class="btns mt-5 text-center">
                    <button type="button" class="btn btn-md px-5 bg_color-blue-derivate text-white mt-4" href="#">Ver mas</button>
                </div>
            </div>

        </div>
    </section>
    <!-- class section end -->

    <!-- information section start -->
    <section class="information_section">
        <div class="container">
            <div class="row m-0">
                <div class="col-12 p-0 mt-0 my-lg-5 mt-lg-0">
                    <div class="my-4 py-5 text-center d-flex flex-column justify-content-center align-items-center">
                        <h2 class="display-3 mb-5 fw-semibold text_color-blue-main" style="text-shadow: 1px 1px 2px #7c7c7c;">Natacion Profesional</h2>
                        <p class="fw-semibold lh-sm text_color-blue-derivate w-75">
                            Él buscará la educación del estudiante, pero esto sucederá al mismo tiempo
                            que con un gran trabajo y dolor. De hecho, para ir al más mínimo detalle, nadie
                            puede lograr ningún tipo de formación en el entrenamiento, pero sucede
                            mismo tiempo que con mucho esfuerzo y dolor. De hecho, para llegar al más
                            mínimo detalle, nadie debería ejercer ninguno de ellos.
                        </p>
                        <button type="button" class="btn btn-md px-5 bg_color-blue-derivate text-white mt-5" href="#">Haga click para registrarse</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- information section end -->

    <!-- information youtube start -->
    <section class="api-youtube">
        <div class="container">
            <div class="row">
                <div class="title-iframe my-5 pt-4">
                    <h2 class="text-center m-0 fw-semibold text_color-blue-main">Síguenos en nuestro canal de YouTube</h2>
                </div>
                <div class="row box-iframe d-flex justify-content-center">
                    <div class="col col-lg-8 video-iframe p-3" style="background: var(--color-blue-derivate">
                        <iframe class="rounded w-100 h-100" style="height:50.5vh !important" src="https://www.youtube.com/embed/hu_CdkWZdFk" title="Como Nadar sin Cansarse" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <ul class="col-12 col-lg-4 nav m-0 px-0 py-3 bg_color-blue-derivate" style="height: 55.6vh;">
                        <div class="lista-iframe overflow-y-scroll h-100">
                            <li class="nav-item w-100 border-top border-bottom border-primary my-1 px-0">
                                <a class="nav-link d-flex justify-content-evenly text_color-white-main align-items-center" title="Como Nadar sin Cansarse en AGUAS ABIERTAS" href="https://www.youtube.com/embed/cKkLBBLNvpk" data-youtubeid="cKkLBBLNvpk">
                                    <img src="https://i.ytimg.com/vi/hu_CdkWZdFk/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLBDRgOJJQVNCrKcZdkdUeh3h10nvw" alt="..” AGUAS ABIERTAS" style="width: 23%; vertical-align: top">
                                    <span style="width: 50%;">Como Nadar sin Cansarse</span>
                                </a>
                            </li>
                            <li class="nav-item w-100 border-bottom border-primary my-1">
                                <a class="nav-link d-flex justify-content-evenly text_color-white-main align-items-center" title="DESAFÍO OLÍMPICO - Nastya y Artem aprende a nadar en la piscina" href="https://www.youtube.com/embed/BEAsbtpK3Bc" data-youtubeid="BEAsbtpK3Bc">
                                    <img src="https://i.ytimg.com/vi/cKkLBBLNvpk/mqdefault.jpg" alt="..” AGUAS ABIERTAS" style="width: 23%; vertical-align: top">
                                    <span style="width: 50%;">DESAFÍO OLÍMPICO - Nastya y Artem aprende a nadar en la piscina</span>
                                </a>
                            </li>
                            <li class="nav-item w-100 border-bottom border-primary my-1">
                                <a class="nav-link d-flex justify-content-evenly text_color-white-main align-items-center" title="Episodio 3 | “A day in the life…” AGUAS ABIERTAS" href="https://www.youtube.com/embed/cKkLBBLNvpk" data-youtubeid="cKkLBBLNvpk">
                                    <img src="https://i.ytimg.com/vi/cKkLBBLNvpk/mqdefault.jpg" alt="Episodio 3 | “A day in the life…” AGUAS ABIERTAS" style="width: 23%; vertical-align: top">
                                <span style="width: 50%;">Episodio 2 | “A day in the life…” AGUAS ABIERTAS</span>
                                </a>
                            </li>
                            <li class="nav-item w-100 border-bottom border-primary my-1">
                                <a class="nav-link d-flex justify-content-evenly text_color-white-main align-items-center" title="PORTIA DEL RIO PONCHA SU BOLETO A SANTIAGO 2023" href="https://www.youtube.com/embed/5lVa5T-b7_Q" data-youtubeid="5lVa5T-b7_Q">
                                    <img src="https://i.ytimg.com/vi/5lVa5T-b7_Q/mqdefault.jpg" alt="PORTIA DEL RIO PONCHA SU BOLETO A SANTIAGO 2023" style="width: 23%; vertical-align: top">
                                    <span style="width: 50%;">PORTIA DEL RIO PONCHA SU BOLETO A SANTIAGO 2023</span>
                                </a>
                            </li>
                            <li class="nav-item w-100 border-bottom border-primary my-1">
                                <a class="nav-link d-flex justify-content-evenly text_color-white-main align-items-center" title="APRENDE A NADAR | Club Acuático de Santurce" href="https://www.youtube.com/embed/3CJxZuONLTk" data-youtubeid="3CJxZuONLTk">
                                    <img src="https://i.ytimg.com/vi/3CJxZuONLTk/mqdefault.jpg" alt="APRENDE A NADAR | Club Acuático de Santurce" style="width: 23%; vertical-align: top">
                                    <span style="width: 50%;">APRENDE A NADAR | Club Acuático de Santurce</span>
                                </a>
                            </li>
                            <li class="nav-item w-100 border-bottom border-primary my-1">
                                <a class="nav-link d-flex justify-content-evenly text_color-white-main align-items-center" title="BTS | CCCAN NATACIÓN 2022" href="https://www.youtube.com/embed/n8MH4Pi2z7E" data-youtubeid="n8MH4Pi2z7E">
                                    <img src="https://i.ytimg.com/vi/n8MH4Pi2z7E/mqdefault.jpg" alt="BTS | CCCAN NATACIÓN 2022" style="width: 23%; vertical-align: top">
                                    <span style="width: 50%;">BTS | CCCAN NATACIÓN 2022</span>
                                </a>
                            </li>
                            <li class="nav-item w-100 border-bottom border-primary my-1">
                                <a class="nav-link d-flex justify-content-evenly text_color-white-main align-items-center" title="PING PONG CON POLO ACUÁTICO FEMENINO" href="https://www.youtube.com/embed/AHRj2X-HN2w" data-youtubeid="AHRj2X-HN2w">
                                    <img src="https://i.ytimg.com/vi/AHRj2X-HN2w/mqdefault.jpg" alt="PING PONG CON POLO ACUÁTICO FEMENINO" style="width: 23%; vertical-align: top">
                                    <span style="width: 50%;">PING PONG CON POLO ACUÁTICO FEMENINO</span>
                                </a>
                            </li>
                            <li class="nav-item w-100 border-bottom border-primary my-1">
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
    <section class="opening_section">
        <div class="container">
            <div class="row m-0">
                <div class="col-12 text-center mt-5 ">
                    <div class="information_horarios">
                        <h2 class="display-3 fw-semibold mt-5 text_color-blue-main" style="text-shadow: 1px 1px 2px #7c7c7c;">horario de apertura</h2>
                        <p class="fw-semibold text_color-blue-derivate my-3">
                            Es importante seguir el proceso de coaching,
                            pero es hora de trabajar
                        </p>
                    </div>
                </div>
                <div class="col-12 p-0 pt-3 pb-5">
                    <div class="table-responsive rounded border">
                        <table class="table m-0">
                            <thead class="bg_color-blue-main text-white small">
                                <tr>
                                    <th class="px-4" scope="col">Nombres de alumnos</th>
                                    <th class="px-4" scope="col">Horarios de Instruccion</th>
                                    <th class="px-4" scope="col">Instructores</th>
                                </tr>
                            </thead>
                            <tbody class="small">
                                <tr>
                                    <td class="px-4">Luis Moran</td>
                                    <td class="px-4">9:00 AM - 11:00 AM</td>
                                    <td class="px-4">Aaron Chapman</td>
                                </tr>
                                <tr>
                                    <td class="px-4">Alberto Farias</td>
                                    <td class="px-4">8:00 AM - 9:00 AM</td>
                                    <td class="px-4">Adam Stewart</td>
                                </tr>
                                <tr>
                                    <td class="px-4">Reinaldo Quintero</td>
                                    <td class="px-4">9:00 AM - 10:00 AM</td>
                                    <td class="px-4">Aaron Chapman</td>
                                </tr>
                                <tr>
                                    <td class="px-4">Simon Dias</td>
                                    <td class="px-4">8:00 AM - 9:00 AM</td>
                                    <td class="px-4">Donna Wilson</td>
                                </tr>
                                <tr>
                                    <td class="px-4">Eliu Mantequilla</td>
                                    <td class="px-4">9:00 AM - 11:00 AM</td>
                                    <td class="px-4">Donna Wilson</td>
                                </tr>
                                <tr>
                                    <td class="px-4">Marcos Antonio</td>
                                    <td class="px-4">8:00 AM - 9:00 AM</td>
                                    <td class="px-4">Randy Porter</td>
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
    <section class="shortcode_section">
        <div class="container">
            <div class="row m-0 my-5 py-5">
                <div class="col-12">
                    <div class="niveles_natacion text-center border-bottom">
                        <h2 class="display-3 fw-semibold text_color-blue-main" style="text-shadow: 1px 1px 2px #7c7c7c;">Niveles de Natacion</h2>
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
                    <div class="col-12 col-lg-2 shortcode_right"><img src="{{ asset('imgs/nivel1.jpg') }}"
                            class="img-fluid rounded" alt="..."></div>
                </div>

                <div class="row m-0 p-5 bg-primary bg-opacity-25">
                    <div class="col-12 col-lg-2 shortcode_right"><img src="{{ asset('imgs/nivel2.jpg') }}"
                            class="img-fluid rounded" alt="..."></div>
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
                    <div class="col-12 col-lg-2 shortcode_right"><img src="{{ asset('imgs/nivel3.jpg') }}" class="img-fluid rounded" alt="..."></div>
                </div>
            </div>
        </div>

        <!-- section contact start -->
        <section class="contact">
                <div class="container bg-light border-top border-bottom rounded my-5 py-3">
                    <h2 class="fw-semibold text-center mb-3 text_color-blue-derivate">Contactame !</h2>
                    <p class="text-center mb-4 mb-lg-0">¿Tiene usted alguna pregunta? Por favor, no dude en contactarnos directamente. Nuestro equipo se comunicará contigo en cuestión de horas para ayudarte.</p>
                    <div class="row m-0">
                        <div class="col-12 col-lg-8 mb-md-0 mb-3 p-md-3">
                            <form action="#eviando.." method="POST">
                                <div class="row m-0">
                                    <div class="col-12 col-md-6">
                                        <div class="input-group input-group-sm mb-2">
                                            <span class="input-group-text bg_color-blue-derivate"><i class="bi bi-person-plus-fill text-white"></i></span>
                                            <input type="text" name="name" id="name" class="form-control form-control-sm text-dark ps-2" placeholder="Ingrese su Nombre" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-group input-group-sm mb-2">
                                            <span class="input-group-text bg_color-blue-derivate"><i class="bi bi-person-plus-fill text-white"></i></span>
                                            <input type="text" name="lastName" id="apellido" class="form-control form-control-sm text-dark ps-2" placeholder="Ingrese su Apellido" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-0">
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
                                </div>
                                <div class="row m-0">
                                    <div class="col-12">
                                        <div class="input-group input-group-sm mb-2">
                                            <span class="input-group-text bg_color-blue-derivate"><i class="bi bi-file-text-fill text-white"></i></span>
                                            <textarea class="form-control form-control-sm text-dark" name="mensaje" id="mensaje" cols="10" rows="2" placeholder="Escribenos tus comentarios"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center col-6 mx-auto">
                                    <button class="btn text-white w-75 bg_color-blue-derivate" type="submit">Enviar</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 col-lg-4 my-4 my-lg-0 d-flex justify-content-center p-3">
                            <iframe class="rounded img-fluid" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d250953.15110838244!2d-71.77411525196692!3d10.64599806263847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e89998e7a5bd625%3A0xce0904e0ea8de74b!2sMaracaibo%2C%20Zulia%2C%20Venezuela!5e0!3m2!1ses!2sus!4v1668629272011!5m2!1ses!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
        </section>
        <!-- section contact end -->
    </section>
    <!-- shortcode section end -->
@endsection
