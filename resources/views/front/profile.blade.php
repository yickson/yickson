@extends('layouts.main')
@section('content')
    <main class="profile-page">
        <section class="section-profile-cover section-shaped my-0">
            <!-- Circles background -->
            <div class="shape shape-style-1 shape-primary alpha-4">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- SVG separator -->
            <div class="separator separator-bottom separator-skew">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="card card-profile shadow mt--300">
                    <div class="px-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">
                                        <img src="../assets/img/theme/team-1-800x800.jpg" class="rounded-circle" alt="image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                                <div class="card-profile-actions py-4 mt-lg-0">
                                    <a href="#" class="btn btn-sm btn-info mr-4">Contactar</a>
                                    <a href="#" class="btn btn-sm btn-default float-right">Mensaje</a>
                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-1">
                                <div class="card-profile-stats d-flex justify-content-center">
                                    <div>
                                        <span class="heading">+10</span>
                                        <span class="description">Experiencia</span>
                                    </div>
                                    <div>
                                        <span class="heading">+15</span>
                                        <span class="description">Proyectos</span>
                                    </div>
                                    <div>
                                        <span class="heading">4</span>
                                        <span class="description">Lenguajes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <h3>Yickson Ramírez<span class="font-weight-light">, 31</span></h3>
                            <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>Santiago, Chile</div>
                            <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i>Desarrollador Web</div>
                            <div><i class="ni education_hat mr-2"></i>Universidad Bicentenaria de Aragua</div>
                        </div>
                        <div class="mt-5 py-5 border-top text-center">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <p>Soy un desarrollador web con más de 9 años de experiencia, nacido en Maracay, Venezuela mi pasión siempre ha sido
                                    todo lo relacionado al mundo informático y sus avances, con distintos lenguajes del lado del servidor y del lado del cliente
                                        siempre con aprendizaje autodidacta.</p>
                                    <p>Lista de lenguajes:</p>
                                    <ul class="list-unstyled">
                                        <li>PHP</li>
                                        <li>Python</li>
                                        <li>Javascript</li>
                                        <li>Dart</li>
                                    </ul>
                                    <a href="#">Más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
