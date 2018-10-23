{{-- Extends Layout --}}
@extends('layouts.backend')

{{-- Breadcrumbs --}}
@section('breadcrumbs')
    {!! Breadcrumbs::render('dashboard') !!}
@endsection

{{-- Page Title --}}
@section('page-title', 'Dashboard')

{{-- Page Subtitle --}}
@section('page-subtitle', 'it all starts here')

{{-- Header Extras to be Included --}}
@section('head-extras')

@endsection

@section('content')

    <div class="row">

        <div class="col-md-9">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#settings" data-toggle="tab">Nuevo Evento</a></li>
                </ul>
                <div class="tab-content">
                    <div class="active tab-pane" id="settings">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('dashboard::profile.update') }}">
                            {!! csrf_field() !!}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="inputName" class="col-sm-2 control-label">Nombre</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputName" placeholder="Name" value="{{ old('name', Auth::user()->name) }}" name="name">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="{{ old('email', Auth::user()->email) }}" name="email">
                                </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="inputPassword" class="col-sm-2 control-label">Contraseña</label>

                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="inputConfirmPassword" class="col-sm-2 control-label">Confirmar Contraseña</label>

                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputConfirmPassword" placeholder="Confirmar Contraseña" name="password_confirmation">

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="logo_number" class="col-sm-2 control-label">Logo</label>
                                <div class="col-sm-10">
                                    <div class="box box-info">
                                        <div class="box-body no-padding">
                                            <ul class="logo-number users-list clearfix">
                                                @foreach (\App\Utils::getLogosNumber() as $logoNumber)
                                                    <li>
                                                        <img class="profile-user-img img-responsive img-circle" src="{{ \App\Utils::logoPath($logoNumber) }}" alt="Profile picture {{ $logoNumber }}">
                                                        <span class="users-list-date">
                                                        <input type="radio" name="logo_number" value="{{ $logoNumber }}" {{ old('logo_number', Auth::user()->logo_number) == $logoNumber ? 'checked' : '' }}>
                                                    </span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
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