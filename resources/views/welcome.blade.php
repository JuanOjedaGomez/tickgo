@extends('layouts.frontend')

{{-- Page Title --}}
@section('page-title', 'Bienvenido')

{{-- Page Subtitle --}}
@section('page-subtitle', 'TickGo')

{{-- Breadcrumbs --}}
@section('breadcrumbs')
    
@endsection

@section('content')

    <div class="row">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="adminlte/img/carrusel/carrusel_1.jpg" alt="...">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img src="adminlte/img/carrusel/carrusel_2.jpg" alt="...">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img src="adminlte/img/carrusel/carrusel_3.jpg" alt="...">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>



    <div class="row">

        <!-- Evento -->
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="adminlte/img/evento-img1.jpg" alt="...">
                <div class="caption">
                    <ul class="list-group">
                        <li class="list-group-item">Fecha:</li>
                        <li class="list-group-item">Lugar:</li>
                        <li class="list-group-item">Descripcion:</li>
                    </ul>
                    <p><a href="#" class="btn btn-primary" role="button">Seguir  <i class="fa fa-plus"></i></a> <a href="#" class="btn btn-success" role="button">Ver Evento  <i class="fa fa-arrow-right"></i></a></p>
                </div>
            </div>
        </div>


    </div>


@endsection
