@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="professor-description" class="row mb-4">
            <div class="col-12 col-sm-12  ">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('storage/images/1.png') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <p id="bienvenida"> <strong>Programa Multidiciplinario de Posgrado en Ciencias Ambientales</strong></p>
                            </div>
                        </div>
                    </div>
                <div class="barraAzulFuerte"></div>
            </div>

            <div class="col-12 col-sm-12 my-5">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100" id="colorCard">
                            <img src="{{ asset('storage/images/4.png') }}" class="card-img-top" alt="...">
                            <div class="barraAzulFuerteS"></div>
                            <div class="card-body">
                                <p class="card-title"> <strong>DOCTORADO EN CIENCIAS AMBIENTALES</strong></p>
                                <a class="btn btn-primary" id="botonesGeneral" href="#" role="button">Convocatoria</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" id="colorCard">
                            <img src="{{ asset('storage/images/5.png') }}" class="card-img-top" alt="...">
                            <div class="barraAzulFuerteS"></div>
                            <div class="card-body">
                                <p class="card-title"> <strong>MAESTRÍA EN CIENCIAS AMBIENTALES</strong></p>
                                <a class="btn btn-primary" id="botonesGeneral" href="#" role="button">Convocatoria</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" id="colorCard">
                            <img src="{{ asset('storage/images/6.png') }}" class="card-img-top" alt="...">
                            <div class="barraAzulFuerteS"></div>
                            <div class="card-body">
                                <p class="card-title"><strong>MAESTRÍA EN CIENCIAS AMBIENTALES (Doble titulación)</strong>
                                </p>
                                <a class="btn btn-primary" id="botonesGeneral" href="#" role="button">Convocatoria</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-3">

            </div>
            <div class="col-12 col-sm-9">
                <div>

                </div>
            </div>
        </div>


        <div class=¨container-fluid¨ id="videoInicio">
            <div class="row">
                <div class="col-12 col-sm-6  ">
                    <div class="izquierda">
                        <div class="container">
                            <div class="ratio ratio-16x9">
                                <iframe width="560" height="315" src="{{ asset('storage/images/MAGALI JAUREGUI  DIRECTORA GENERAL.mp4') }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6  " id="colorCard">
                    <div class="derechaInicio  ">
                        <br>
                        <p> <strong>NUESTROS EGRESADOS</strong> </p>
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe enim aut doloremque dolore in
                            harum, doloribus libero nemo adipisci repudiandae perspiciatis modi quam nihil veritatis
                            repellendus reiciendis commodi nostrum. Placeat!</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12   my-5" id="rowInicio">
            <div class="row">
                <div class="col-12 col-sm-2">
                    <a href="{{url("/calendario")}}"><img src="{{ asset('storage/images/Calendario.png') }}" alt=""></a>
                    <p> <strong>Calendario</strong></p>
                </div>
                <div class="col-12 col-sm-2">
                    <a href="#"><img src="{{ asset('storage/images/Solicitud de instalaciones.png') }}"
                            alt=""></a>
                    <p> <strong>Solicitud instalaciones</strong></p>
                </div>
                <div class="col-12 col-sm-2">
                    <a href="#"><img src="{{ asset('storage/images/Intranet.png') }}" alt=""></a>
                    <p> <strong>INTRANET</strong></p>
                </div>
                <div class="col-12 col-sm-2">
                    <a href="#"><img src="{{ asset('storage/images/Programación semestral.png') }}"
                            alt=""></a>
                    <p> <strong>Programación semestral</strong></p>
                </div>
                <div class="col-12 col-sm-2">
                    <a href="{{url("/tramites")}}"><img src="{{ asset('storage/images/Tramites.png') }}" alt=""></a>
                    <p> <strong>Tramites</strong> </p>
                </div>
                <div class="col-12 col-sm-2">
                    <div class="col-12 col-sm-12">
                        <a href="{{url("/becas")}}"><img src="{{ asset('storage/images/Becas.png') }}" alt=""></a>
                    </div>
                    <div class="col-12 col-sm-12">
                        <p> <strong>Becas</strong></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12   my-5">
            <img src="{{ asset('storage/images/7.png') }}" alt="">
        </div>

    </div>
</div>
@endsection
