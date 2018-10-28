{{-- Extends Layout --}}
@extends('layouts.backend')

{{-- Breadcrumbs --}}
@section('breadcrumbs')
    {!! Breadcrumbs::render('dashboard') !!}
@endsection

{{-- Page Title --}}
@section('page-title', 'Mis Eventos')

{{-- Page Subtitle --}}
@section('page-subtitle', 'Estos son tus ventos')

{{-- Header Extras to be Included --}}
@section('head-extras')

@endsection

@section('content')

    <!-- Default box: BARRA DE INICIO -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Eventos</h3>

            <!-- Search -->
            <div class="box-tools pull-right">
                <form class="form" role="form" method="GET" action="#">
                    <div class="input-group input-group-sm margin-r-5 pull-left" style="width: 200px;">
                        <input type="text" name="search" class="form-control" value="#" placeholder="Buscar...">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <a href="#" class="btn btn-sm btn-primary pull-right">
                        <i class="fa fa-plus"></i> <span>Agregar</span>
                    </a>
                </form>
            </div>
            <!-- END Search -->
        </div>
    <!-- @ includeIf($resourceAlias.'._search')-->

    <!-- /.END BARRA DE INICIO -->

    <!--TABLA DE CONTENIDO -->
    <div class="padding-5">
        <span class="text-green padding-l-5">Total:  items.</span>&nbsp;
    </div>
    <div class="box-body no-padding">
        <div class="table-responsive list-records">
            <table class="table table-hover table-bordered">
                <thead>
                <!--<th style="width: 10px;"><button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button></th>-->
                <th>#</th>
                <th>ID</th>
                <th>Nombre</th>
                <th>Fecha</th>
                <th style="width: 120px;">Administracion</th>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

    <!-- /.END TABLA DE CONTENIDO -->

    </div>

@endsection

{{-- Footer Extras to be Included --}}
@section('footer-extras')

@endsection