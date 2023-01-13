@extends('layouts.master')

@section('body')
    <section id="contact">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0 text-white bg_color-blue-derivate p-4 d-flex flex-column flex-md-row">
                <div class="col-12 col-md-4 Centro_ayuda text-center text-lg-start">
                    <h4 class="fs-4">
                        <a href="#" class="nav-link">Centro de ayuda</a>
                    </h4>
                </div>
                <div class="col-12 col-md-4 contactenos text-center">
                    <h4 class="fs-4">
                        <a href="#" class="nav-link">Contáctenos</a>
                    </h4>
                </div>
                <div class="col-12 col-md-4 foros d-flex flex-column text-center text-lg-end">
                    <a href="#" class="nav-link">
                        Foro de la comunidad
                        <i class="bi bi-box-arrow-up-right"></i>
                    </a>
                    <a href="#" class="nav-link">
                        Centro de resoluciones
                        <i class="bi bi-box-arrow-up-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-12">
                <div class="ayuda">
                    <h4 class="">¿En qué le podemos ayudar?</h4>
                </div>
            </div>

        </div>
    </div>
</section>
    
@endsection
