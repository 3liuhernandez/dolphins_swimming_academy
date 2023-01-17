@extends('layouts.master')

@section('body')
    <section id="caracteristicas">
        <div class="container">
            <div class="row m-0">
                <div class="shadow-lg my-4 border p-0 rounded">
                    
                    <div class="col-12 d-flex mb-4 rounded-top">
                        <div class="col-8 col-lg-9 d-flex rounded-top justify-content-center align-items-center container-title bg_color-blue-derivate">
                            <span class="display-6 fw-semibold text-white text-center">ACTIVIDADES INFANTILES Y JUVENILES</span>
                        </div>
                        <div class="col-4 col-lg-3 container-img p-0">
                            <img src="{{ asset('imgs/imagenes_promociones/img_academia.jpeg') }}" class="img-banner img-fluid" alt="">
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-8 text-center mx-auto py-2 bg_color-blue-derivate my-5">
                        <h4 class="text-white">ESCUELA DE NATACIÓN INFANTIL</h4>
                    </div>
                    
                    <div class="container p-md-3 p-lg-5">
                        <div class="col-12 mb-4 mb-lg-5">
                            <h6 class="title_section">Descripción de la actividad</h6>
                            <p class="fw-semibold text-muted lh-1 my-4">
                                Actividad que permite adquirir niveles de natación en creciente progresión, y pasar de nivel en
                                nivel a través de clases dirigidas de una hora adaptadas a las habilidades que presenten los niños
                                y niñas, compartiendo buenos momentos en el medio acuático.
                            </p>
                            <h3 class="subtitle_section">OBJETIVOS</h3>
                        </div>

                        <div class="col-12">
                            <h5 class="text_color-blue-derivate">Nivel 1</h5>
                            <ul class="pt-3 ps-2 ps-md-4">
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        1. 
                                    <p class="lh-1 m-0 ms-3">
                                        Realizar desplazamientos en diferentes direcciones en distancias superiores a 10m.
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        2. 
                                    <p class="lh-1 m-0 ms-3">
                                        Correcta coordinación de los diferentes segmentos. (Mano-Pié-Vista)
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        3. 
                                    <p class="lh-1 m-0 ms-3">
                                        Desarrollo de la capacidad perceptiva dominante. (Lateralidad).
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        4. 
                                    <p class="lh-1 m-0 ms-3">
                                        Adecuación de la capacidad respiratoria (Boca-Nariz) y control de la misma. (Duración e Intensidad).
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        5. 
                                    <p class="lh-1 m-0 ms-3">
                                        Ejecución correcta de las batidas en crol y espalda.
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        6. 
                                    <p class="lh-1 m-0 ms-3">
                                        Realización de apoyos desde la pared (deslizamientos) antes de comenzar el ejercicio.
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        7. 
                                    <p class="lh-1 m-0 ms-3">
                                        Dominar las batidas de crol con respiración lateral y conseguir sacar los brazos del agua de manera alternativa.
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        8. 
                                    <p class="lh-1 m-0 ms-3">
                                        Posición hidrodinámica correcta de Espalda (relajación de la nuca) y lograr sacar los brazos de manera alternativa.
                                    </p>
                                </div>
                            </ul>
                        </div>

                        <hr class="featurette-divider">

                        <div class="col-12">
                            <h5 class="text_color-blue-derivate">Nivel 2</h5>
                            <ul class="pt-3 ps-2 ps-md-4">
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        1. 
                                    <p class="lh-1 m-0 ms-3">
                                        Realización de desplazamientos en diferentes direcciones en los diferentes estilos.
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        2. 
                                    <p class="lh-1 m-0 ms-3">
                                        Propulsiones, efectivas, capacidades motoras.
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        3. 
                                    <p class="lh-1 m-0 ms-3">
                                        Respiración Bilateral en el Crol. 
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        4. 
                                    <p class="lh-1 m-0 ms-3">
                                        Mantener una postura correcta en 50m pies de Crol con tabla pequeña.(flexión activa)
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        5. 
                                    <p class="lh-1 m-0 ms-3">
                                        Mantener la postura hidrodinámica horizontal en unos 50 pies Espalda con las manos pegadas al cuerpo.
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        6. 
                                    <p class="lh-1 m-0 ms-3">
                                        Control del salto de cabeza, longitud, altitud, profundidad.
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        7. 
                                    <p class="lh-1 m-0 ms-3">
                                        Impulsos desde la pared tanto dorsal como ventral con posterior control de las acciones, profundidad y longitud.
                                    </p>
                                </div>
                            </ul>
                        </div>

                        <hr class="featurette-divider">

                        <div class="col-12">
                            <h5 class="text_color-blue-derivate">Nivel 3</h5>
                            <ul class="pt-3 ps-2 ps-md-4">
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        1. 
                                    <p class="lh-1 m-0 ms-3">
                                        Realizar desplazamientos en diferentes direcciones en cada uno de los estilos y poder variar durante el mismo.
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        2. 
                                    <p class="lh-1 m-0 ms-3">
                                        Coordinación correcta de las diferentes técnicas de los estilos.
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        3. 
                                    <p class="lh-1 m-0 ms-3">
                                        Realización de ejercicios con variaciones en la velocidad de ejecución de los mismos.
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        4. 
                                    <p class="lh-1 m-0 ms-3">
                                        Realización de ejercicios con mayor o menor intensidad en función de la duración. (Conocimiento de sus propias capacidades).
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        5. 
                                    <p class="lh-1 m-0 ms-3">
                                        Dominio de la Respiración Nasal y Bucal.
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        6. 
                                    <p class="lh-1 m-0 ms-3">
                                        Batidas Crol con correcta posición de los pies.(Flexión Activa de la Pierna).
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        7. 
                                    <p class="lh-1 m-0 ms-3">
                                        Batidas Espalda con correcta posición de los pies. (Flexión Activa de la Pierna).
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        8. 
                                    <p class="lh-1 m-0 ms-3">
                                        Batidas de Braza con colocación correcta de los tobillos y empuje de los empeines.
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        9. 
                                    <p class="lh-1 m-0 ms-3">
                                        Correcta ejecución del Movimiento Ondulatorio. (Patada Sirena).
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        10. 
                                    <p class="lh-1 m-0 ms-3">
                                        Realizar saltos de cabeza con deslizamientos.
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        11. 
                                    <p class="lh-1 m-0 ms-3">
                                        Giros y Volteretas seguidas de nado.
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        12. 
                                    <p class="lh-1 m-0 ms-3">
                                        Realizar virajes con deslizamientos.
                                    </p>
                                </div>
                            </ul>
                        </div>

                        <hr class="featurette-divider">

                        <div class="col-12">
                            <h5 class="text_color-blue-derivate">Nivel 4</h5>
                            <ul class="pt-3 ps-2 ps-md-4">
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        1.
                                    <p class="lh-1 m-0 ms-3">
                                        Realizar desplazamientos y cambios de dirección con objetos sin perder el control del mismo.
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        2.
                                    <p class="lh-1 m-0 ms-3">
                                        Coordinación y ejecución correcta de cada una de las especificaciones de los distintos estilos.
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        3.
                                    <p class="lh-1 m-0 ms-3">
                                        Realización y control de sus propias capacidades de fuerza-resistencia.
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        4.
                                    <p class="lh-1 m-0 ms-3">
                                        Batidas diagonales en propulsión alternativa y simultánea.
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        5.
                                    <p class="lh-1 m-0 ms-3">
                                        Crol; Coordinación y ejecución correcta de las variantes de la respiración y mantener un nivel técnico óptimo durante ejercicios de larga duración con posibilidad de variantes.
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        6.
                                    <p class="lh-1 m-0 ms-3">
                                        Espalda; Realización y ejecución correcta de la brazada con posición hidrodinámica correcta y variación de la propulsión.(Atención: ROLIDO).
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        7.
                                    <p class="lh-1 m-0 ms-3">
                                        Braza; Respetar las referencias básicas de coordinación entre brazos, piernas y respiración.
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        8.
                                    <p class="lh-1 m-0 ms-3">
                                        Mariposa; Coordinar la acción propulsora de las piernas con los brazos.
                                    </p>
                                </div>
                                <div class="numerate mb-2 d-flex align-items-center fw-semibold text-muted">
                                        9.
                                    <p class="lh-1 m-0 ms-3">
                                        Ejecución correcta de los virajes en los diferentes estilos.
                                    </p>
                                </div>
                            </ul>
                        </div>
                    </div>

                    <!-- CONTAINER CATACTERISTICAS -->
                    <div class="container p-md-3 p-lg-5">
                        <div class="col-12 mb-4 mb-lg-5">
                            <h6 class="title_section">Descripción de la actividad</h6>
                            <p class="fw-semibold text-muted lh-1 my-4">
                                Actividad que permite paliar o reducir alguna patología asociada a problemas posturales, de
                                columna, de equilibrio de fuerzas o de la musculatura de la espalda, a través de ejercicios adaptados y controlados por personal 
                                sanitario altamente cualificado.
                            </p>
                            <h3 class="subtitle_section">Características</h3>
                        </div>
                        
                        <div class="col-12">
                            <h5 class="text_color-blue-derivate">Grupos</h5>
                            <div class="d-flex align-items-start pt-3">
                                <strong class="me-3 text_color-blue-derivate"> &middot; </strong>
                                <p class="fw-semibold text-muted">
                                    Un grupo de entrenamiento puede verse como “su equipo”. Todos son bienvenidos a ser miembros
                                    de GoSwim Group, donde compartimos videos todos los días, directamente a su cuenta de correo
                                    electrónico. Si su equipo local decide que les gustaría compartir contenido directamente con
                                    sus nadadores, pueden configurar su propio grupo de entrenamiento y decidir qué videos
                                    reciben sus nadadores a diario.
                                </p>
                            </div>
                            <div class="d-flex align-items-start pt-3">
                                <strong class="me-3 text_color-blue-derivate"> &middot; </strong>
                                <p class="fw-semibold text-muted">
                                    Con un Grupo de Entrenamiento, los entrenadores tienen la capacidad de moldear el contenido
                                    a su propia imagen. USA Swimming ha seleccionado a GoSwim como su socio de video técnico,
                                    porque ofrecemos MUCHAS opciones diferentes para la técnica, en lugar de una solución única
                                    para cada parte de la brazada.
                                </p>
                            </div>
                        </div>
                        
                        <hr class="featurette-divider">
                        
                        <div class="col-12">
                            <h5 class="text_color-blue-derivate">Cursos</h5>
                            <div class="d-flex align-items-start pt-3">
                                <strong class="me-3 text_color-blue-derivate"> &middot; </strong>
                                <p class="fw-semibold text-muted">
                                    Nuestros cursos son un grupo de videos que se enfocan en el mismo tema. Ya sea el enfoque en
                                    un solo atleta o el enfoque en una sola habilidad, nuestros cursos siguen un camino para
                                    desarrollar una mejor técnica mientras se enfocan en una habilidad o en un atleta a la vez.
                                </p>
                            </div>
                            <div class="d-flex align-items-start pt-3">
                                <strong class="me-3 text_color-blue-derivate"> &middot; </strong>
                                <p>
                                    Los miembros tienen la capacidad de autodirigir estos cursos, ya sea con un "observador
                                    compulsivo", donde pueden ver todas las lecciones del curso de una sola vez, o a través de
                                    nuestra función programada, que permite la entrega diaria de cada lección directamente a su
                                    cuenta de correo electrónico. La decisión es tuya.
                                </p>
                            </div>
                        </div>
                        
                        <hr class="featurette-divider">
                        
                        <div class="col-12">
                            <h5 class="text_color-blue-derivate">Lecciones</h5>
                            <div class="d-flex align-items-start pt-3">
                                <strong class="me-3 text_color-blue-derivate"> &middot; </strong>
                                <p class="fw-semibold text-muted">
                                    Nuestras Lecciones son los videos individuales que residen dentro de un curso. Si bien
                                    muchas Lecciones son buenas por sí mismas, cuando se integran en un curso de contenido
                                    similar, cada lección cobra nueva vida. Para ver cómo se usan lecciones similares de
                                    diferentes maneras, cómo cada lección puede impactar a un nadador en varios estilos o en
                                    varias habilidades, las lecciones son buenas, pero en un curso, son mejores.
                                </p>
                            </div>
                            <div class="d-flex align-items-start pt-3">
                                <strong class="me-3 text_color-blue-derivate"> &middot; </strong>
                                <p class="fw-semibold text-muted">
                                    Los miembros actualizados tienen la capacidad de ver CUALQUIER lección, en CUALQUIER
                                    momento. Las Lecciones individuales recomendarán Lecciones adicionales que lo ayudarán a
                                    desarrollar la habilidad o descubrir un nuevo aspecto de la habilidad.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
