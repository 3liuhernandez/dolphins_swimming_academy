@extends('layouts.master')

@section('body')
    <section id="pricing_plans">
        <div class="container shadow-sm my-4 border-light rounded">
            <div class="pricing-header text-center mx-auto w-75 mt-4">
                {{-- <h1 class="display-4 fw-semibold text_color-blue-derivate">Pricing</h1> --}}
                {{-- <p class="fs-5">
                    Apartir de 2 participantes en adelante se descuenta<br>10 mil pesos de cada uno ( Aplica para solo plan B y C)
                </p> --}}
            </div>
            <div class="row m-0 text-center">
                
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">Plan A</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$90.000<small class="text-muted fw-light">/mo</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li><b>1</b> Clase por semana al mes</li>
                                    <li><b>1</b> Clase por un costo 90.000 mil pesos.</li>
                                </ul>
                                <button type="button" class="btn w-100 bg_color-blue-derivate text-white fw-semibold" href="#">Comprar</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">Plan B</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$130.000<small class="text-muted fw-light">/mo</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li><b>2</b> Clases por semana al mes</li>
                                    <li><b>8</b> Clases por un costo de 130.000 mil pesos.</li>
                                    <p class="">Apartir de 2 participantes en adelante se descuenta $10 mil pesos de cada uno <span style="color:var(--color-blue-derivate)">Aplica para este plan</span> </p>
                                </ul>
                                <button type="button" class="btn w-100 bg_color-blue-derivate text-white fw-semibold" href="#">Comprar</button>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm" style="border: 1px solid var(--color-blue-derivate)">
                            <div class="card-header py-3 bg_color-blue-derivate">
                                <h4 class="my-0 fw-normal text-white">Plan C</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$160.000<small class="text-muted fw-light">/mo</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li><b>3</b> Clases por semana al mes</li>
                                    <li><b>12</b> Clases por un costo de 160.000 mil pesos.</li>
                                    <p class="">Apartir de 2 participantes en adelante se descuenta $10 mil pesos de cada uno <span style="color:var(--color-blue-derivate)">Aplica para este plan</span></p>
                                </ul>
                                <button type="button" class="btn w-100 bg_color-blue-derivate text-white fw-semibold" href="#">Comprar</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <h2 class="display-6 text-center mb-4">Compare plans</h2>
                        <div class="table-responsive border rounded">
                            <table class="table text-center m-0">
                                <thead>
                                    <tr>
                                        <th style="width: 34%;"></th>
                                        <th style="width: 22%;">Free</th>
                                        <th style="width: 22%;">Pro</th>
                                        <th style="width: 22%;">Enterprise</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <tr>
                                        <th scope="row" class="text-start">Public</th>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg>
                                        </td>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg>
                                        </td>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-start">Private</th>
                                        <td></td>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg>
                                        </td>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg>
                                        </td>
                                    </tr>
                                </tbody>
                                
                                <tbody>
                                    <tr>
                                        <th scope="row" class="text-start">Permissions</th>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg>
                                        </td>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg>
                                        </td>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-start">Sharing</th>
                                        <td></td>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg>
                                        </td>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-start">Unlimited members</th>
                                        <td></td>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg>
                                        </td>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-start">Extra security</th>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

            </div>

            
        </div>
    </section>
@endsection
