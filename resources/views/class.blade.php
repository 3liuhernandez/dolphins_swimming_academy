@extends('layouts.master')

@section('body')

    <section id="section_class">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('imgs/img_banner_carusel_home.png') }}" style="width: 100%;height:50vh" alt="...">
                            </div>    
                            <?php for ($i=0; $i < 6; $i++) { ?>
                                @if ($i === 0)
                                    <div class="carousel-item">
                                        <img src="{{ asset('imgs/img_banner_carusel_home-2.png') }}" style="width: 100%;height:50vh" alt="...">
                                    </div>
                                    @elseif($i === 1)
                                        <div class="carousel-item">
                                            <img src="{{ asset('imgs/img_banner_carusel_home-3.png') }}" style="width: 100%;height:50vh" alt="...">
                                        </div>

                                    @elseif($i=== 2)
                                        <div class="carousel-item">
                                            <img src="{{ asset('imgs/img_banner_carusel_home-4.png') }}" style="width: 100%;height:50vh" alt="...">
                                        </div>

                                    @elseif($i === 3)
                                        <div class="carousel-item">
                                            <img src="{{ asset('imgs/img_banner_carusel_home-5.png') }}" style="width: 100%;height:50vh" alt="...">
                                        </div>

                                    @elseif($i === 4)
                                        <div class="carousel-item">
                                            <img src="{{ asset('imgs/img_banner_carusel_home-6.png') }}" style="width: 100%;height:50vh" alt="...">
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

    <section id="section_instructor">
        <div class="container marketing">
            <div class="row row-cols-sm-2 g-4 row-cols-lg-4 m-0 justify-content-center">
                <div class="col">
                    <div class="card text-center">
                        <div class="card-header">
                            <strong class="card-title mb-3 text_color-blue-derivate">Instructor Academy</strong>
                        </div>
                        <div class="card-body">
                            <div class="mx-auto d-flex flex-wrap justify-content-center">
                                <img class="rounded mx-auto d-block" width="130" height="100" src="https://st3.depositphotos.com/1518767/14955/i/600/depositphotos_149557154-stock-photo-swim-coach-holding-stopwatch-at.jpg" alt="Card image cap">
                                <div class="location mt-3">
                                    <h5 class="text-sm-center mt-2 mb-1">Steven Lee</h5>
                                    <i class="bi bi-geo-alt-fill">
                                        <span class="text-muted small lh-1"><small>California, United States</small></span>
                                    </i>
                                </div>
                            </div>
                            <hr class="my-2">
                            <div class="card-text text-sm-center">
                                <button type="button" class="btn btn-small bg_color-blue-derivate text-white p-1 w-50" data-bs-toggle="modal" role="button" data-bs-target="#staticBackdrop">Ver perfil</button>
                            </div>
                        </div>
                    </div>
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
                                    <button type="button" class="btn btn-md px-5 bg_color-blue-derivate text-white" onclick="location.href='{{ route('register') }}'">Registrate gratis</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card text-center">
                        <div class="card-header">
                            <strong class="card-title mb-3 text_color-blue-derivate">Instructor Academy</strong>
                        </div>
                        <div class="card-body">
                            <div class="mx-auto d-flex flex-wrap justify-content-center">
                                <img class="rounded mx-auto d-block" width="130" height="100" src="https://st2.depositphotos.com/1518767/5725/i/600/depositphotos_57252277-stock-photo-cute-swimming-class-listening-to.jpg" alt="Card image cap">
                                <div class="location mt-3">
                                    <h5 class="text-sm-center mt-2 mb-1">Steven Lee</h5>
                                    <i class="bi bi-geo-alt-fill">
                                        <span class="text-muted small lh-1"><small>California, United States</small></span>
                                    </i>
                                </div>
                            </div>
                            <hr class="my-2">
                            <div class="card-text text-sm-center">
                                <button type="button" class="btn btn-small bg_color-blue-derivate text-white p-1 w-50" data-bs-toggle="modal" role="button" data-bs-target="#staticBackdrop">Ver perfil</button>
                            </div>
                        </div>
                    </div>

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
                                    <button type="button" class="btn btn-md px-5 bg_color-blue-derivate text-white" onclick="location.href='{{ route('register') }}'">Registrate gratis</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card text-center">
                        <div class="card-header">
                            <strong class="card-title mb-3 text_color-blue-derivate">Instructor Academy</strong>
                        </div>
                        <div class="card-body">
                            <div class="mx-auto d-flex flex-wrap justify-content-center">
                                <img class="rounded mx-auto d-block" width="130" height="100" src="https://st2.depositphotos.com/1518767/5691/i/600/depositphotos_56913629-stock-photo-handsome-swimming-instructor-smiling-at.jpg" alt="Card image cap">
                                <div class="location mt-3">
                                    <h5 class="text-sm-center mt-2 mb-1">Steven Lee</h5>
                                    <i class="bi bi-geo-alt-fill">
                                        <span class="text-muted small lh-1"><small>California, United States</small></span>
                                    </i>
                                </div>
                            </div>
                            <hr class="my-2">
                            <div class="card-text text-sm-center">
                                <button type="button" class="btn btn-small bg_color-blue-derivate text-white p-1 w-50" data-bs-toggle="modal" role="button" data-bs-target="#staticBackdrop">Ver perfil</button>
                            </div>
                        </div>
                    </div>
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
                                    <button type="button" class="btn btn-md px-5 bg_color-blue-derivate text-white" onclick="location.href='{{ route('register') }}'">Registrate gratis</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card text-center">
                        <div class="card-header">
                            <strong class="card-title mb-3 text_color-blue-derivate">Instructor Academy</strong>
                        </div>
                        <div class="card-body">
                            <div class="mx-auto d-flex flex-wrap justify-content-center">
                                <img class="rounded mx-auto d-block" width="130" height="100" src="https://st2.depositphotos.com/1518767/5691/i/600/depositphotos_56913629-stock-photo-handsome-swimming-instructor-smiling-at.jpg" alt="Card image cap">
                                <div class="location mt-3">
                                    <h5 class="text-sm-center mt-2 mb-1">Steven Lee</h5>
                                    
                                    <i class="bi bi-geo-alt-fill">
                                        <span class="text-muted small lh-1"><small>California, United States</small></span>
                                    </i>
                                </div>
                            </div>
                            <hr class="my-2">
                            <div class="card-text text-sm-center">
                                <button type="button" class="btn btn-small bg_color-blue-derivate text-white p-1 w-50" data-bs-toggle="modal" role="button" data-bs-target="#staticBackdrop">Ver perfil</button>
                            </div>
                        </div>
                    </div>
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
                                    <button type="button" class="btn btn-md px-5 bg_color-blue-derivate text-white" onclick="location.href='{{ route('register') }}'">Registrate gratis</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gy-4 row-cols-2 row-cols-md-4">
                <div class="col">
                    <div class="card border-0 shadow-none">
                        <div class="card-body text-center d-flex flex-column align-items-center p-0"><img class="rounded-circle mb-3 fit-cover" width="130" height="130" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                            <h5 class="fw-bold text-primary card-title mb-0"><strong>John Smith</strong></h5>
                            <p class="text-muted card-text mb-2">Erat netus</p>
                            <ul class="list-inline fs-6 text-muted w-100 mb-0">
                                <li class="list-inline-item text-center">
                                    <div class="d-flex flex-column align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                        </svg>
                                    </div>
                                </li>
                                <li class="list-inline-item text-center">
                                    <div class="d-flex flex-column align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                        </svg>
                                    </div>
                                </li>
                                <li class="list-inline-item text-center">
                                    <div class="d-flex flex-column align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                                        </svg>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-none">
                        <div class="card-body text-center d-flex flex-column align-items-center p-0"><img class="rounded-circle mb-3 fit-cover" width="130" height="130" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                            <h5 class="fw-bold text-primary card-title mb-0"><strong>John Smith</strong></h5>
                            <p class="text-muted card-text mb-2">Erat netus</p>
                            <ul class="list-inline fs-6 text-muted w-100 mb-0">
                                <li class="list-inline-item text-center">
                                    <div class="d-flex flex-column align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                        </svg>
                                    </div>
                                </li>
                                <li class="list-inline-item text-center">
                                    <div class="d-flex flex-column align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                        </svg>
                                    </div>
                                </li>
                                <li class="list-inline-item text-center">
                                    <div class="d-flex flex-column align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                                        </svg>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-none">
                        <div class="card-body text-center d-flex flex-column align-items-center p-0"><img class="rounded-circle mb-3 fit-cover" width="130" height="130" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                            <h5 class="fw-bold text-primary card-title mb-0"><strong>John Smith</strong></h5>
                            <p class="text-muted card-text mb-2">Erat netus</p>
                            <ul class="list-inline fs-6 text-muted w-100 mb-0">
                                <li class="list-inline-item text-center">
                                    <div class="d-flex flex-column align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                        </svg>
                                    </div>
                                </li>
                                <li class="list-inline-item text-center">
                                    <div class="d-flex flex-column align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                        </svg>
                                    </div>
                                </li>
                                <li class="list-inline-item text-center">
                                    <div class="d-flex flex-column align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                                        </svg>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-none">
                        <div class="card-body text-center d-flex flex-column align-items-center p-0"><img class="rounded-circle mb-3 fit-cover" width="130" height="130" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                            <h5 class="fw-bold text-primary card-title mb-0"><strong>John Smith</strong></h5>
                            <p class="text-muted card-text mb-2">Erat netus</p>
                            <ul class="list-inline fs-6 text-muted w-100 mb-0">
                                <li class="list-inline-item text-center">
                                    <div class="d-flex flex-column align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                        </svg>
                                    </div>
                                </li>
                                <li class="list-inline-item text-center">
                                    <div class="d-flex flex-column align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                        </svg>
                                    </div>
                                </li>
                                <li class="list-inline-item text-center">
                                    <div class="d-flex flex-column align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                                        </svg>
                                    </div>
                                </li>
                            </ul>
                        </div>
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
                    <figure class="figure border rounded p-3">
                        <img src="https://i.pinimg.com/originals/6a/f6/69/6af669296f9314db344375fb046f570a.gif"
                            class="figure-img img-fluid rounded" alt="">
                        <figcaption class="figure-caption text-start text_color-blue-derivate fw-semibold">Dolphins Swimming Academy</figcaption>
                    </figure>
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
                    <figure class="figure border rounded p-3">
                        <img src="https://www.triatlonnoticias.com/wp-content/uploads/2020/11/natacion_estilo_braza.gif" class="figure-img img-fluid rounded" alt="">
                        <figcaption class="figure-caption text-start text_color-blue-derivate fw-semibold">Dolphins Swimming Academy</figcaption>
                    </figure>
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
                    <figure class="figure border rounded p-3">
                        <img src="https://www.arenaswim.com/media/immagini/267_z_breaststroke_swim.gif?width=1200&height=630&mode=crop" class="figure-img img-fluid rounded" alt="">
                        <figcaption class="figure-caption text-start text_color-blue-derivate fw-semibold">Dolphins Swimming Academy</figcaption>
                    </figure>
                </div>
            </div>
            <hr class="featurette-divider">
        </div>
    </section>

@endsection
