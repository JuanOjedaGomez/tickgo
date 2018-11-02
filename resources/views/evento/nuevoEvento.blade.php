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
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('registrarEvento')}}">
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Fecha de inicio</label>
                                <div class="col-sm-10">
                                    <input class="date form-control" type="text"  name="txt_fecha_ini" placeholder="Seleccione fecha de inicio...">
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
                                    <input class="date form-control" type="text" name="txt_fecha_ter" placeholder="Seleccione fecha de termino...">
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
                                    <select class="form-control" id="exampleFormControlSelect1" name="txt_tipo">
                                        @foreach($tipos as $tipo)
                                        <option value="{{ $tipo->id }}">{{ $tipo->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nombre</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="txt_nombre" placeholder="Nombre evento...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Descripcion</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="txt_descripcion" placeholder="Descripcion...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Video</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="txt_video" placeholder="Video...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Flyer</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="txt_imagen" placeholder="Flyer...">
                                </div>
                            </div>

                        </form>
                    </div>

                <!-- / panel de artista -->

                    <div class="tab-pane" id="artista">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('registrarEvento')}}">
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nombre</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="txt_nombre_art"placeholder="Nombre artista...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Apodo</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="txt_apodo" placeholder="Apodo artista...">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-10 col-sm-10">
                                    <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
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
                                <div class="col-sm-offset-10 col-sm-10">
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