@extends('base')

@section('maincontent')
    <div id="colorTexto">
        <div id="contTablaIzq">
            <div id="p-container" class="container px-lg-8.5 px-md-5">
                <div class="col-12 col-sm-12">
                    <img src="{{ asset('storage/images/17.png') }}" alt="">
                </div>
                <div class="barraAzulFuerte"></div>
                <div id="professor-description" class="row mb-4 p-5">
                    <div class="col-12 col-sm-12">
                        <h1><strong>BIBLIOTECAS</strong></h1>
                    </div>

                    <div class="row col-12 col-sm-12 mt-2 mb-4">
                        <div class="col-12 col-sm-4">
                            <img src="{{ asset('storage/images/28.png') }}" class="rounded float-end" alt="">
                        </div>
                        <div class="col-12 col-sm-8">
                            <strong id="h2info">Seminarios</strong> <br><br><br> Sección donde se muestran los reportes finales de los Seminarios Multidisciplinarios del PMPCA.<br><br>
                            <a class="btn btn-primary" id="botonesGeneral" href="{{ url('/seminarios') }}"
                                role="button">Conocer más...</a>
                        </div>
                    </div>
                    <hr>
                    <div class="row col-12 col-sm-12 mt-2 mb-4">
                        <div class="col-12 col-sm-4">
                            <img src="{{ asset('storage/images/29.png') }}" class="rounded float-end" alt="">
                        </div>
                        <div class="col-12 col-sm-8">
                            <strong id="h2info">Artículos científicos</strong> <br><br><br> Sección donde se muestran los artículos publicados por los alumnos del PMPCA.<br><br>
                            <a class="btn btn-primary" id="botonesGeneral" href="{{ url('/articulosCientificos') }}"
                                role="button">Conocer más...</a>
                        </div>
                    </div>

                    <hr>

                    <div class="row col-12 col-sm-12 mt-2 mb-4">
                        <div class="col-12 col-sm-4">
                            <img src="{{ asset('storage/images/30.png') }}" class="rounded float-end" alt="">
                        </div>
                        <div class="col-12 col-sm-8 ">
                            <strong id="h2info">Tesis</strong> <br><br><br> Sección donde se muestran las tesis de los alumnos del PMPCA. <br><br>
                            <a class="btn btn-primary" id="botonesGeneral" href="{{ url('/tesis') }}" role="button">Conocer
                                más...</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
