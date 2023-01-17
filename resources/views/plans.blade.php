@extends('layouts.master')

@section('body')
    <section id="section_planss">
        <div class="container">
            <div class="row m-0">
                <div class="shadow-lg my-4 border rounded p-0">
                    <div class="col-12 px-0 py-4 bg_color-blue-derivate mb-4 rounded-top">
                        <div class="text-center pt-md-4 pb-md-2 text-white">
                            <h1 class="fw-semibold text-white m-0">INSCÌBETE CON ESTILO</h1>
                            <form class="d-flex d-flex justify-content-end mt-3 mt-md-0 me-4">
                                <a class="btn btn-sm bg-white text-dark" href="#" type="submit">
                                    <i class="bi-cart-fill me-1"></i>
                                        Carrito
                                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                                </a>
                            </form>
                        </div>
                    </div>
                    <div class="container p-md-3 p-lg-5">
                        <div class="row g-4 g-lg-5 mb-3 mb-lg-0 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 justify-content-center">
                            
                            <div class="col-9">
                                <div class="card h-100">
                                    <!-- no venta badge -->
                                    <div class="badge bg-danger px-2 text-white position-absolute" title="No esta en venta" style="top: 0.5rem; right: 0.5rem">not for sale</div>
                                    <!-- imagen del producto -->
                                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                    <!-- detalles del producto -->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- nombre del producto-->
                                            <h5 class="fw-bolder">Fancy Product</h5>
                                            <!-- precio del producto-->
                                            <span>$40.00 </span> / <span> $80.00</span>
                                        </div>
                                    </div>
                                    <!-- comprar producto-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center">
                                            <button type="button" disabled class="btn btn-small px-4 bg_color-blue-derivate text-white btn-sm" data-bs-toggle="modal" role="button" data-bs-target="#staticBackdrop">Ver plan</button>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog mb-5">
                                                <div class="modal-content">
                                                    <div class="modal-header bg_color-blue-derivate">
                                                        <h2 class="modal-title fs-4 lh-1 text-center text-white fw-bold w-100" id="staticBackdropLabel">Aprende en nuestra academia</h2>
                                                        <button type="button" class="btn-close me-2 text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body px-0 px-md-3">
                                                        <div class="row m-0">
                                                            <div class="col-12 col-sm-6">
                                                                <figure class="figure">
                                                                    <img src="{{ asset('imgs/fotos_academia/photo_2.jpg') }}" class="figure-img img-fluid rounded" alt="">
                                                                    <figcaption class="figure-caption text-center text-lg-start fw-bold small">Dolphins Swimming Academy</figcaption>
                                                                </figure>
                                                                <ul>
                                                                    <h6 class="m-m fw-semibold text_color-blue-derivate">Nivel de aprendizaje</h6>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <h4 class="text-center text_color-blue-derivate">Description Plan</h4>
                                                                <p class="small text-muted lh-1">
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                                    Odio eius maiores iste debitis veniam iste!
                                                                </p>
                                                                <p class="m-0 small text-muted lh-1">
                                                                    Laborum cumque reprehenderit esse, 
                                                                    veritatis aspernatur, quibusdam amet, animi voluptatibus nulla sapiente 
                                                                    commodi natus. Iste, animi.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a class="btn btn-sm bg_color-blue-derivate text-white mt-auto" href="#">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-9">
                                <div class="card h-100">
                                    <!-- venta badge-->
                                    <div class="badge bg-success px-2 text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                    <!-- imagen del producto -->
                                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                    <!-- detalles del producto -->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- nombre del producto-->
                                            <h5 class="fw-bolder">Special Item</h5>
                                            <!-- producto reviews-->
                                            <div class="d-flex justify-content-center small text-warning mb-2">
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                            </div>
                                            <!-- precio del producto-->
                                            <span class="text-muted text-decoration-line-through">$20.00 </span> / <span> $18.00</span>
                                        </div>
                                    </div>
                                    <!-- comprar producto-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center">
                                            <button type="button" class="btn btn-small px-4 bg_color-blue-derivate text-white btn-sm" data-bs-toggle="modal" role="button" data-bs-target="#staticBackdrop">Ver plan</button>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog mb-5">
                                                <div class="modal-content">
                                                    <div class="modal-header bg_color-blue-derivate">
                                                        <h2 class="modal-title fs-4 lh-1 text-center text-white fw-bold w-100" id="staticBackdropLabel">Aprende en nuestra academia</h2>
                                                        <button type="button" class="btn-close me-2 text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body px-0 px-md-3">
                                                        <div class="row m-0">
                                                            <div class="col-12 col-sm-6">
                                                                <figure class="figure">
                                                                    <img src="{{ asset('imgs/fotos_academia/photo_2.jpg') }}" class="figure-img img-fluid rounded" alt="">
                                                                    <figcaption class="figure-caption text-center text-lg-start fw-bold small">Dolphins Swimming Academy</figcaption>
                                                                </figure>
                                                                <ul>
                                                                    <h6 class="m-m fw-semibold text_color-blue-derivate">Nivel de aprendizaje</h6>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <h4 class="text-center text_color-blue-derivate">Description Plan</h4>
                                                                <p class="small text-muted lh-1">
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                                    Odio eius maiores iste debitis veniam iste!
                                                                </p>
                                                                <p class="m-0 small text-muted lh-1">
                                                                    Laborum cumque reprehenderit esse, 
                                                                    veritatis aspernatur, quibusdam amet, animi voluptatibus nulla sapiente 
                                                                    commodi natus. Iste, animi.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a class="btn btn-sm bg_color-blue-derivate text-white mt-auto" href="#">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-9">
                                <div class="card h-100">
                                    <!-- venta badge-->
                                    <div class="badge bg-success px-2 text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                    <!-- imagen del producto -->
                                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                    <!-- detalles del producto -->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- nombre del producto-->
                                            <h5 class="fw-bolder">Sale Item</h5>
                                            <!-- precio del procucto -->
                                            <span class="text-muted text-decoration-line-through">$50.00 </span> / <span> $25.00</span>
                                        </div>
                                    </div>
                                    <!-- comprar producto-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center">
                                            <button type="button" class="btn btn-small px-4 bg_color-blue-derivate text-white btn-sm" data-bs-toggle="modal" role="button" data-bs-target="#staticBackdrop">Ver plan</button>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog mb-5">
                                                <div class="modal-content">
                                                    <div class="modal-header bg_color-blue-derivate">
                                                        <h2 class="modal-title fs-4 lh-1 text-center text-white fw-bold w-100" id="staticBackdropLabel">Aprende en nuestra academia</h2>
                                                        <button type="button" class="btn-close me-2 text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body px-0 px-md-3">
                                                        <div class="row m-0">
                                                            <div class="col-12 col-sm-6">
                                                                <figure class="figure">
                                                                    <img src="{{ asset('imgs/fotos_academia/photo_2.jpg') }}" class="figure-img img-fluid rounded" alt="">
                                                                    <figcaption class="figure-caption text-center text-lg-start fw-bold small">Dolphins Swimming Academy</figcaption>
                                                                </figure>
                                                                <ul>
                                                                    <h6 class="m-m fw-semibold text_color-blue-derivate">Nivel de aprendizaje</h6>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <h4 class="text-center text_color-blue-derivate">Description Plan</h4>
                                                                <p class="small text-muted lh-1">
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                                    Odio eius maiores iste debitis veniam iste!
                                                                </p>
                                                                <p class="m-0 small text-muted lh-1">
                                                                    Laborum cumque reprehenderit esse, 
                                                                    veritatis aspernatur, quibusdam amet, animi voluptatibus nulla sapiente 
                                                                    commodi natus. Iste, animi.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a class="btn btn-sm bg_color-blue-derivate text-white mt-auto" href="#">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-9">
                                <div class="card h-100">
                                    <!-- no venta badge -->
                                    <div class="badge bg-danger px-2 text-white position-absolute" title="No esta en venta" style="top: 0.5rem; right: 0.5rem">not for sale</div>
                                    <!-- imagen del producto -->
                                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                    <!-- detalles del producto -->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- nombre del producto-->
                                            <h5 class="fw-bolder">Popular Item</h5>
                                            <!-- producto reviews-->
                                            <div class="d-flex justify-content-center small text-warning mb-2">
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                            </div>
                                            <!-- precio del producto-->
                                            <span>$40.00</span>
                                        </div>
                                    </div>
                                    <!-- comprar producto-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center">
                                            <button type="button" disabled class="btn btn-small px-4 bg_color-blue-derivate text-white btn-sm" data-bs-toggle="modal" role="button" data-bs-target="#staticBackdrop">Ver plan</button>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog mb-5">
                                                <div class="modal-content">
                                                    <div class="modal-header bg_color-blue-derivate">
                                                        <h2 class="modal-title fs-4 lh-1 text-center text-white fw-bold w-100" id="staticBackdropLabel">Aprende en nuestra academia</h2>
                                                        <button type="button" class="btn-close me-2 text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body px-0 px-md-3">
                                                        <div class="row m-0">
                                                            <div class="col-12 col-sm-6">
                                                                <figure class="figure">
                                                                    <img src="{{ asset('imgs/fotos_academia/photo_2.jpg') }}" class="figure-img img-fluid rounded" alt="">
                                                                    <figcaption class="figure-caption text-center text-lg-start fw-bold small">Dolphins Swimming Academy</figcaption>
                                                                </figure>
                                                                <ul>
                                                                    <h6 class="m-m fw-semibold text_color-blue-derivate">Nivel de aprendizaje</h6>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <h4 class="text-center text_color-blue-derivate">Description Plan</h4>
                                                                <p class="small text-muted lh-1">
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                                    Odio eius maiores iste debitis veniam iste!
                                                                </p>
                                                                <p class="m-0 small text-muted lh-1">
                                                                    Laborum cumque reprehenderit esse, 
                                                                    veritatis aspernatur, quibusdam amet, animi voluptatibus nulla sapiente 
                                                                    commodi natus. Iste, animi.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a class="btn btn-sm bg_color-blue-derivate text-white mt-auto" href="#">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-9">
                                <div class="card h-100">
                                    <!-- venta badge-->
                                    <div class="badge bg-success px-2 text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                    <!-- imagen del producto -->
                                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                    <!-- detalles del producto -->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- nombre del producto-->
                                            <h5 class="fw-bolder">Sale Item</h5>
                                            <!-- precio del producto-->
                                            <span class="text-muted text-decoration-line-through">$50.00 </span> / <span> $25.00</span>
                                        </div>
                                    </div>
                                    <!-- comprar producto-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center">
                                            <button type="button" class="btn btn-small px-4 bg_color-blue-derivate text-white btn-sm" data-bs-toggle="modal" role="button" data-bs-target="#staticBackdrop">Ver plan</button>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog mb-5">
                                                <div class="modal-content">
                                                    <div class="modal-header bg_color-blue-derivate">
                                                        <h2 class="modal-title fs-4 lh-1 text-center text-white fw-bold w-100" id="staticBackdropLabel">Aprende en nuestra academia</h2>
                                                        <button type="button" class="btn-close me-2 text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body px-0 px-md-3">
                                                        <div class="row m-0">
                                                            <div class="col-12 col-sm-6">
                                                                <figure class="figure">
                                                                    <img src="{{ asset('imgs/fotos_academia/photo_2.jpg') }}" class="figure-img img-fluid rounded" alt="">
                                                                    <figcaption class="figure-caption text-center text-lg-start fw-bold small">Dolphins Swimming Academy</figcaption>
                                                                </figure>
                                                                <ul>
                                                                    <h6 class="m-m fw-semibold text_color-blue-derivate">Nivel de aprendizaje</h6>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <h4 class="text-center text_color-blue-derivate">Description Plan</h4>
                                                                <p class="small text-muted lh-1">
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                                    Odio eius maiores iste debitis veniam iste!
                                                                </p>
                                                                <p class="m-0 small text-muted lh-1">
                                                                    Laborum cumque reprehenderit esse, 
                                                                    veritatis aspernatur, quibusdam amet, animi voluptatibus nulla sapiente 
                                                                    commodi natus. Iste, animi.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a class="btn btn-sm bg_color-blue-derivate text-white mt-auto" href="#">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-9">
                                <div class="card h-100">
                                    <!-- no venta badge -->
                                    <div class="badge bg-danger px-2 text-white position-absolute" title="No esta en venta" style="top: 0.5rem; right: 0.5rem">not for sale</div>
                                    <!-- imagen del producto -->
                                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                    <!-- detalles del producto -->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- nombre del producto-->
                                            <h5 class="fw-bolder">Fancy Product</h5>
                                            <!-- precio del producto-->
                                            <span class="text-muted text-decoration-line-through">$120.00 </span> / <span> $280.00</span>
                                        </div>
                                    </div>
                                    <!-- comprar producto-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center">
                                            <button type="button" disabled class="btn btn-small px-4 bg_color-blue-derivate text-white btn-sm" data-bs-toggle="modal" role="button" data-bs-target="#staticBackdrop">Ver plan</button>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog mb-5">
                                                <div class="modal-content">
                                                    <div class="modal-header bg_color-blue-derivate">
                                                        <h2 class="modal-title fs-4 lh-1 text-center text-white fw-bold w-100" id="staticBackdropLabel">Aprende en nuestra academia</h2>
                                                        <button type="button" class="btn-close me-2 text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body px-0 px-md-3">
                                                        <div class="row m-0">
                                                            <div class="col-12 col-sm-6">
                                                                <figure class="figure">
                                                                    <img src="{{ asset('imgs/fotos_academia/photo_2.jpg') }}" class="figure-img img-fluid rounded" alt="">
                                                                    <figcaption class="figure-caption text-center text-lg-start fw-bold small">Dolphins Swimming Academy</figcaption>
                                                                </figure>
                                                                <ul>
                                                                    <h6 class="m-m fw-semibold text_color-blue-derivate">Nivel de aprendizaje</h6>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <h4 class="text-center text_color-blue-derivate">Description Plan</h4>
                                                                <p class="small text-muted lh-1">
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                                    Odio eius maiores iste debitis veniam iste!
                                                                </p>
                                                                <p class="m-0 small text-muted lh-1">
                                                                    Laborum cumque reprehenderit esse, 
                                                                    veritatis aspernatur, quibusdam amet, animi voluptatibus nulla sapiente 
                                                                    commodi natus. Iste, animi.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a class="btn btn-sm bg_color-blue-derivate text-white mt-auto" href="#">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-9">
                                <div class="card h-100">
                                    <!-- venta badge-->
                                    <div class="badge bg-success px-2 text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                    <!-- imagen del producto -->
                                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                    <!-- detalle del producto -->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- nombre del producto -->
                                            <h5 class="fw-bolder">Special Item</h5>
                                            <!-- producto  reviews-->
                                            <div class="d-flex justify-content-center small text-warning mb-2">
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                            </div>
                                            <!-- precio del producto-->
                                            <span class="text-muted text-decoration-line-through">$20.00 </span> / <span> $18.00</span>
                                        </div>
                                    </div>
                                    <!-- comprar producto-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center">
                                            <button type="button" class="btn btn-small px-4 bg_color-blue-derivate text-white btn-sm" data-bs-toggle="modal" role="button" data-bs-target="#staticBackdrop">Ver plan</button>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog mb-5">
                                                <div class="modal-content">
                                                    <div class="modal-header bg_color-blue-derivate">
                                                        <h2 class="modal-title fs-4 lh-1 text-center text-white fw-bold w-100" id="staticBackdropLabel">Aprende en nuestra academia</h2>
                                                        <button type="button" class="btn-close me-2 text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body px-0 px-md-3">
                                                        <div class="row m-0">
                                                            <div class="col-12 col-sm-6">
                                                                <figure class="figure">
                                                                    <img src="{{ asset('imgs/fotos_academia/photo_2.jpg') }}" class="figure-img img-fluid rounded" alt="">
                                                                    <figcaption class="figure-caption text-center text-lg-start fw-bold small">Dolphins Swimming Academy</figcaption>
                                                                </figure>
                                                                <ul>
                                                                    <h6 class="m-m fw-semibold text_color-blue-derivate">Nivel de aprendizaje</h6>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <h4 class="text-center text_color-blue-derivate">Description Plan</h4>
                                                                <p class="small text-muted lh-1">
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                                    Odio eius maiores iste debitis veniam iste!
                                                                </p>
                                                                <p class="m-0 small text-muted lh-1">
                                                                    Laborum cumque reprehenderit esse, 
                                                                    veritatis aspernatur, quibusdam amet, animi voluptatibus nulla sapiente 
                                                                    commodi natus. Iste, animi.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a class="btn btn-sm bg_color-blue-derivate text-white mt-auto" href="#">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-9">
                                <div class="card h-100">
                                    <!-- no venta badge -->
                                    <div class="badge bg-danger px-2 text-white position-absolute" title="No esta en venta" style="top: 0.5rem; right: 0.5rem">not for sale</div>
                                    <!-- imagen del producto -->
                                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                    <!-- detalles del producto -->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- nombre del producto-->
                                            <h5 class="fw-bolder">Popular Item</h5>
                                            <!-- producto reviews-->
                                            <div class="d-flex justify-content-center small text-warning mb-2">
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                            </div>
                                            <!-- precio del producto-->
                                            <span>$40.00</span>
                                        </div>
                                    </div>
                                    <!-- comprar producto-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center">
                                            <button type="button" disabled class="btn btn-small px-4 bg_color-blue-derivate text-white btn-sm" data-bs-toggle="modal" role="button" data-bs-target="#staticBackdrop">Ver plan</button>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog mb-5">
                                                <div class="modal-content">
                                                    <div class="modal-header bg_color-blue-derivate">
                                                        <h2 class="modal-title fs-4 lh-1 text-center text-white fw-bold w-100" id="staticBackdropLabel">Aprende en nuestra academia</h2>
                                                        <button type="button" class="btn-close me-2 text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body px-0 px-md-3">
                                                        <div class="row m-0">
                                                            <div class="col-12 col-sm-6">
                                                                <figure class="figure">
                                                                    <img src="{{ asset('imgs/fotos_academia/photo_2.jpg') }}" class="figure-img img-fluid rounded" alt="">
                                                                    <figcaption class="figure-caption text-center text-lg-start fw-bold small">Dolphins Swimming Academy</figcaption>
                                                                </figure>
                                                                <ul>
                                                                    <h6 class="m-m fw-semibold text_color-blue-derivate">Nivel de aprendizaje</h6>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                    <li class="nav-item small">detalles de lo que aprendere</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <h4 class="text-center text_color-blue-derivate">Description Plan</h4>
                                                                <p class="small text-muted lh-1">
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                                    Odio eius maiores iste debitis veniam iste!
                                                                </p>
                                                                <p class="m-0 small text-muted lh-1">
                                                                    Laborum cumque reprehenderit esse, 
                                                                    veritatis aspernatur, quibusdam amet, animi voluptatibus nulla sapiente 
                                                                    commodi natus. Iste, animi.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a class="btn btn-sm bg_color-blue-derivate text-white mt-auto" href="#">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
