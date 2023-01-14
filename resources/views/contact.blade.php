@extends('layouts.master')

@section('body')
    <section id="contact">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-12 p-0 text-white bg_color-blue-derivate p-3 p-sm-5 d-flex flex-column flex-md-row">
                    <div class="link_enlaces d-flex justify-content-around align-items-center flex-wrap w-100">
                        <h2 class="display-6 fw-semibold text-center">Contáctenos</h2>
                        <ul class="navbar-nav d-flex flex-row">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <img src="{{ asset('imgs/icons/icon_facebook.png') }}" class="icons rounded" alt="Icono F m-0acebook">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <img src="{{ asset('imgs/icons/icon_twiter.png') }}" class="icons rounded" alt="Icono m-0 Tuiter">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <img src="{{ asset('imgs/icons/icon_whatsapp.png') }}" class="icons rounded" alt="Icono W m-0hatsapp">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <img src="{{ asset('imgs/icons/icon_youtube.png') }}" class="icons rounded" alt="Icono  m-0Youtube">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="divider my-4"></div>

        <div class="container">
            <div class="row m-0">
                <div class="col-12 col-lg-8">
                    <div class="ayuda border p-3">
                        <h3 class="text-center fw-semibold my-3 text_color-blue-derivate">¿En qué le podemos ayudar?</h3>
                        {{-- <h4 class="my-2">Contacta con Triatlón Noticias</h4> --}}
                        <div class="divider my-4"></div>
                        <form action="#eviando.." method="post">
                            <div class="col-12 col-md-8 col-lg-6">
                                <div class="input-group input-group-sm mb-2">
                                    <span class="input-group-text bg_color-blue-derivate">
                                        <i class="bi bi-person-plus-fill text-white"></i>
                                    </span>
                                    <input type="text" name="name" id="name" class="form-control form-control-sm text-dark ps-2" placeholder="Nombre" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-8 col-lg-6">
                                <div class="input-group input-group-sm mb-2">
                                    <span class="input-group-text bg_color-blue-derivate">
                                        <i class="bi bi-envelope-at-fill text-white"></i>
                                    </span>
                                    <input type="email" name="email" id="email" class="form-control form-control-sm text-dark ps-2" placeholder="Correo Electronico" required>
                                </div>
                            </div>
                            <div class="col-12 form_cheked">
                                <label class="fw-semibold" for="">El motivo del contacto
                                    <span class="text_color-blue-derivate me-1">*</span>
                                </label>
                                <ul class="nav flex-column my-3">
                                    <li class="nav-item">
                                        <input type="radio" id="noticias" name="motivo" value="Enviar Noticias" required>
                                        <label class="" for="noticias">Enviar Noticias</label>
                                    </li>
                                    <li class="nav-item">
                                        <input type="radio" id="incidencias" name="motivo" value="Incidencias" required>
                                        <label class="" for="incidencias">Incidencias</label>
                                    </li>
                                    <li class="nav-item">
                                        <input type="radio" id="publicidad" name="motivo" value="Publicidad" required>
                                        <label class="" for="publicidad">Publicidad</label>
                                    </li>
                                    <li class="nav-item">
                                        <input type="radio" id="otros" name="motivo" required>
                                        <label class="" for="otros">Otros</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12">
                                <label class="fw-semibold">Terminos legales
                                    <span class="text_color-blue-derivate me-1">*</span>
                                </label>
                                <ul class="nav">
                                    <li class="nav-item">
                                        <div class="d-flex">
                                            <label class="" for="servicio">
                                                <input class="me-2" type="checkbox" id="servicio" name="" value="He leído y acepto el  
                                                <a rel=&quot;nofollow noopener noreferrer&quot; href=&quot;#&quot;>Aviso Legal</a> y la  
                                                <a target=&quot;_blank&quot; rel=&quot;nofollow noopener noreferrer&quot; href=&quot;#&quot;>Política de Privacidad</a>" required>
                                                He leído y acepto el
                                                <a target="_blank" href="#">Aviso Legal</a> y la
                                                <a target="_blank" href="#">Política de Privacidad</a>
                                            </label>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="d-flex">
                                            <label for="terminos">
                                                <input class="me-2" type="checkbox" id="terminos" name="" value="Acepto recibir la información que la entidad considere oportuno enviarme por correo electrónico o medio de comunicación electrónica equivalente. (Es posible darse de baja en cualquier momento)" required> 
                                                Acepto recibir la información que la entidad considere oportuno enviarme por correo electrónico o medio de comunicación electrónica equivalente. (Es posible darse de baja en cualquier momento)
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="divider py-3"></div>

                            <div class="col-12">
                                <div class="input-group input-group-sm mb-2">
                                    <span class="input-group-text bg_color-blue-derivate">
                                        <i class="bi bi-file-text-fill text-white"></i>
                                    </span>
                                    <textarea class="form-control form-control-sm text-dark" name="mensaje" id="mensaje" cols="10" rows="2" placeholder="Comentario / Mensaje" required></textarea>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mt-3 col-6 mx-auto">
                                <button class="btn text-white w-75 bg_color-blue-derivate" type="submit">Enviar</button>
                            </div>
                        </form>

                        <div class="divider py-4 border-bottom"></div>

                        <h3 class="text-center fw-semibold my-3 text_color-blue-derivate">Información sobre protección de datos.</h3>
                        <p class="text-muted">
                            De conformidad con el reglamento europeo en materia de protección de datos 2016/679 del 
                            parlamento europeo y del consejo del 27 de abril del 2016 relativo a la protección de 
                            datos de las personas físicas (RGPD), te recuerdo que tus datos (email y nombre) son 
                            objeto de tratamiento por parte de Desafio Comunicación. Estos datos son gestionados 
                            con la finalidad de informar y comunicar todo aquello relativo a la prestación de las 
                            actividades relacionadas con la web triatlonnoticias.com 
                        </p>
                        <ul class="text-muted">
                            <li><span class="fw-semibold text-dark">Responsable:</span> Luciano Ángel Moncada Fernández</li>
                            <li><span class="fw-semibold text-dark">Finalidad:</span> Poder contestar los mensajes de los usuarios enviados a la dirección de email de contacto.</li>
                            <li><span class="fw-semibold text-dark">Legitimación:</span> Consentimiento del interesado</li>
                            <li><span class="fw-semibold text-dark">Destinatarios:</span> El sitio de Triatlón Noticias</li>
                            <li><span class="fw-semibold text-dark">Derechos:</span> Tiene derecho a Acceder, rectificar y suprimir los datos, así como otros derechos, como se explica en nuestra <a href="#">política de privacidad</a>.</li>
                            <li><span class="fw-semibold text-dark">Plazo de conservación de los datos:</span> Hasta que no se solicite su supresión por el interesado.</li>
                            <li><span class="fw-semibold text-dark">Información adicional:</span> Puede consultar la información adicional y detallada sobre Protección de Datos Personales en mi <a href="#">política de privacidad</a>.</li>
                        </ul>

                        <div class="divider py-2"></div>

                        <p class="text-muted">
                            Recuerda que todos tus datos serán tratados con la máxima confidencialidad según las 
                            vigentes leyes 2016/679 de protección de datos de personas físicas (RGPD), y 34/2002 
                            de Servicios de la sociedad de la información y de comercio electrónico (LSSI-CE).
                        </p>

                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="asside border text-center pt-3">
                        <div class="bg-dark mb-3 mx-auto py-1 px-3 w-50 mb-2" style="border-radius: 0 50pc 0 50pc;">
                            <h6 class="text-white text-center m-0">Sponsored by</h6>
                        </div>
                        <figure class="figure">
                            <img src="https://www.triatlonnoticias.com/wp-content/uploads/2022/12/ICAN_2023.gif" width="280" height="280" class="figure-img img-fluid rounded m-0" alt="">
                        </figure>
                        <figure class="figure">
                            <img src="https://www.triatlonnoticias.com/wp-content/uploads/2022/06/2023-baner-triatlon-noticias-308x314px.gif" width="280" height="280" class="figure-img img-fluid rounded m-0" alt="">
                        </figure>
                    </div>

                    <div class="divider my-4"></div>

                    <div class="col-12">
                        <div class="asside border text-center p-3 pt-lg-3">
                            <div class="bg-dark mb-3 mx-auto py-1 px-3 w-50 mb-2" style="border-radius: 0 50pc 0 50pc;">
                                <h6 class="text-white text-center m-0">Partner</h6>
                            </div>
                            <figure class="figure">
                                <img src="https://www.triatlonnoticias.com/wp-content/uploads/2022/11/HALF_SEVILLA.jpeg.webp" width="280" height="280" class="figure-img img-fluid rounded m-0" alt="">
                            </figure>
                            <figure class="figure">
                                <img src="https://www.triatlonnoticias.com/wp-content/uploads/2022/11/banner_compex.gif" width="280" height="280" class="figure-img img-fluid rounded m-0" alt="">
                            </figure>
                            <figure class="figure">
                                <img src="https://www.triatlonnoticias.com/wp-content/uploads/2022/11/banner_triton_2023.gif" width="280" height="280" class="figure-img img-fluid rounded m-0" alt="">
                            </figure>
                            <figure class="figure">
                                <img src="https://www.triatlonnoticias.com/wp-content/uploads/2022/11/BANNER-PC23-CAST-308x314-px.jpg.webp" width="280" height="280" class="figure-img img-fluid rounded m-0" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="divider my-4"></div>

    </section>
@endsection
