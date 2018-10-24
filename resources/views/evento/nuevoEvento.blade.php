{{-- Extends Layout --}}
@extends('layouts.backend')

{{-- Breadcrumbs --}}
@section('breadcrumbs')
    {!! Breadcrumbs::render('dashboard') !!}
@endsection

{{-- Page Title --}}
@section('page-title', 'Nuevo Evento')

{{-- Page Subtitle --}}
@section('page-subtitle', 'Crea tu nuevo evento')

{{-- Header Extras to be Included --}}
@section('head-extras')

@endsection

@section('content')

    <div class="row">

        <div class="col-md-9">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#settings" data-toggle="tab">Datos Evento</a></li>
                    <li class=""><a href="#artista" data-toggle="tab">Datos Artista</a></li>
                </ul>
                <div class="tab-content">

                <!-- panel de evento -->
                    <div class="active tab-pane" id="settings">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('dashboard::profile.update') }}">
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Fecha de inicio</label>
                                <div class="col-sm-10">
                                    <input class="date form-control" type="text"  placeholder="Seleccione fecha de inicio...">
                                </div>
                                <script type="text/javascript">
                                    $('.date').datepicker({
                                        format: 'mm-dd-yyyy'
                                    });
                                </script>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Fecha de termino</label>
                                <div class="col-sm-10">
                                    <input class="date form-control" type="text" placeholder="Seleccione fecha de termino...">
                                </div>
                                <script type="text/javascript">
                                    $('.date').datepicker({
                                        format: 'mm-dd-yyyy'
                                    });
                                </script>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword" class="col-sm-2 control-label">Tipo</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Seleccione tipo de evento...</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nombre</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Nombre evento...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Descripcion</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Descripcion...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Fecebook</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Facebook...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Instagram</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Instagram...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Flyer</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Flyer...">
                                </div>
                            </div>

                        </form>
                    </div>

                <!-- / panel de artista -->

                    <div class="tab-pane" id="artista">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('dashboard::profile.update') }}">
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nombre</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Nombre artista...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Apodo</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Apodo artista...">
                                </div>
                            </div>

                            <div class="table-responsive list-records">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <!--<th style="width: 10px;"><button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button></th>-->
                                    <th>#</th>
                                    <th>Artista</th>
                                    <th style="width: 120px;">Eliminar</th>
                                    </thead>
                                    </table>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">Crear</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->

    </div>
    <!-- /.row -->

@endsection

{{-- Footer Extras to be Included --}}
@section('footer-extras')

@endsection