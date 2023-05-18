@extends('admin.layouts.main')

@section('body')
    <section id="dashboard">
        <div class="container-fluid">
            <div class="row row-cols-2 row-cols-lg-4 m-0">
                
                <div class="content-card col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="icon-big icon-warning text-center">
                                        <i class="bi bi-database"></i>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="numbers">
                                        <p>Total Estudiantes</p>
                                        108
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <hr />
                                <div class="stats">
                                    <i class="bi bi-arrow-clockwise"></i> Actualizado ahora
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="content-card col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="icon-big icon-success text-center">
                                        <i class="bi bi-wallet"></i>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="numbers">
                                        <p>Ganancia</p>
                                        $1,345
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <hr />
                                <div class="stats">
                                    <i class="bi bi-calendar4-week"></i> Último día
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="content-card col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="icon-big icon-danger text-center">
                                        <i class="bi bi-activity"></i>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="numbers">
                                        <p>Errors</p>
                                        23
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <hr />
                                <div class="stats">
                                    <i class="bi bi-stopwatch"></i> en la ultima hora
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="content-card col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="icon-big icon-info text-center">
                                        <i class="bi bi-twitter"></i>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="numbers">
                                        <p>Seguidores</p>
                                        +45
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <hr />
                                <div class="stats">
                                    <i class="bi bi-arrow-clockwise"></i> Actualizado ahora
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
