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
