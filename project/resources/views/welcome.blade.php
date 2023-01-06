@extends('layouts.master')

@section('body')
    <!-- Students section start -->
    <section class="students_section">
        <div class="container">
            <div class="row m-0">
                <div class="col-12">
                    <div class="text-welcome my-5 pt-5 mb-lg-0 text-center d-flex flex-column justify-content-around align-items-center">
                        <h1 class="display-2 fw-semibold text_color-blue-main">¡Bienvenidos nuevos estudiantes!</h1>
                        <p class="fw-semibold text_color-blue-derivate">
                            Regístrese ahora para recibir una lección de prueba de 25 minutos, ¡completamente gratis!
                        </p>
                        <button type="button" class="btn btn-md px-5 bg_color-blue-main text-white mt-4" href="#">Haga click para registrarse</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Students section end -->

    <!-- class section start-->
    <section class="card_section">
        <div class="container p-sm-3 py-lg-5 my-4">
            <div class="col-12 px-2">
                <h2 class="fw-semibold display-5">Clases</h2>
            </div>
            <div class="row m-0 g-4 p-3 p-md-3 p-lg-4 row-cols-1 row-cols-sm-2 row-cols-md-3 flex-wrap justify-content-center">
                <?php for($i = 0; $i < 6; $i++) { ?>
                <div class="col">
                    <div class="card shadow border-0">
                        <a class="nav-link" href="#"><img src="{{ asset('imgs/img_banner.png') }}" class="img-fluid"
                                alt="..."></a>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="m-0 text_color-blue-derivate fw-semibold">Entrenamientos</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                <div class="btns mt-5 text-center">
                    <button type="button" class="btn btn-md px-5 bg_color-blue-main text-white mt-4" href="#">Ver mas</button>
                </div>
            </div>

        </div>
    </section>
    <!-- class section end -->
    {{--  --}}
    <!-- information section start -->
    <section class="information_section">
        <div class="container">
            <div class="row m-0">
                <div class="col-12 p-0 mt-0 my-lg-5 mt-lg-0">
                    <div class="text-profesional my-5 py-5 text-center d-flex flex-column justify-content-center align-items-center">
                        <h2 class="display-3 mb-5 fw-semibold text_color-blue-main">Natacion Profesional</h2>
                        <p class="fw-semibold lh-sm text_color-blue-derivate">
                            Él buscará la educación del estudiante, pero esto sucederá al mismo tiempo
                            que con un gran trabajo y dolor. De hecho, para ir al más mínimo detalle, nadie
                            puede lograr ningún tipo de formación en el entrenamiento, pero sucede
                            mismo tiempo que con mucho esfuerzo y dolor. De hecho, para llegar al más
                            mínimo detalle, nadie debería ejercer ninguno de ellos.
                        </p>
                        <button type="button" class="btn btn-md px-5 bg_color-blue-main text-white mt-5" href="#">Haga click para registrarse</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- information section end -->

    <!-- opening hours section start -->
    <section class="opening_section">
        <div class="container">
            <div class="row m-0">
                <div class="col-12 text-center my-lg-5">
                    <div class="information_horarios">
                        <h2 class="display-4 fw-semibold mt-5 text_color-blue-main">horario de apertura</h2>
                        <p class="fw-semibold text_color-blue-derivate my-3">Es importante seguir el proceso de coaching, pero es hora de trabajar</p>
                    </div>
                </div>
                <div class="col-12 p-0 py-5">
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
                        <h2 class="display-4 fw-semibold text_color-blue-main ">Niveles de Natacion</h2>
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
                    <div class="col-12 col-lg-2 shortcode_right"><img src="{{ asset('imgs/nivel1.jpg') }}" class="img-fluid rounded" alt="..."></div>
                </div>

                <div class="row m-0 p-5 bg-primary bg-opacity-25 flex-column-reverse">
                    <div class="col-12 col-lg-2 shortcode_right"><img src="{{ asset('imgs/nivel2.jpg') }}" class="img-fluid rounded" alt="..."></div>
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

    </section>
    <!-- shortcode section end -->
@endsection
