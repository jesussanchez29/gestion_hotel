@extends('layouts.loginRegistro')
@section('title', 'Registro')

@section('content')
    <div class="my-5 text-center">
        <h3 class="font-weight-bold">Registro</h3>
        <p class="text-muted">Create una cuenta gratis ahora</p>
    </div>

    <form method="POST">
        @csrf
        <div class="row align-items-center mt-2">
            <div class="col">
                <div class="form-group">
                    <div class="form-icon-wrapper">
                        <input type="text" class="form-control" placeholder="Nombre" autofocus name="nombre"
                            value="{{ old('nombre') }}">
                        <i class="form-icon-left mdi mdi-account"></i>
                    </div>
                    @error('nombre')
                        <span role="alert">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <div class="form-icon-wrapper">
                        <input type="text" class="form-control" placeholder="Apellidos" autofocus name="apellidos"
                            value="{{ old('apellidos') }}">
                        <i class="form-icon-left mdi mdi-account"></i>
                    </div>
                    @error('apellidos')
                        <span role="alert">
                            <strong>{{ $errors->first('apellidos') }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="form-icon-wrapper">
                <input type="text" onfocus="(this.type='date')" onfocusout="(this.type='text')" class="form-control"
                    placeholder="Fecha Nacimiento" autofocus name="fechaNacimiento" value="{{ old('fechaNacimiento') }}">
                <i class="form-icon-left mdi mdi-calendar"></i>
            </div>
            @error('fechaNacimiento')
                <span role="alert">
                    <strong>{{ $errors->first('fechaNacimiento') }}</strong>
                </span>
            @enderror
        </div>

        <div class="row align-items-center mt-2">
            <div class="col">
                <div class="form-group">
                    <div class="form-icon-wrapper">
                        <input type="text" class="form-control" placeholder="Tipo identificación" autofocus
                            name="tipoIdentificacion" value="{{ old('tipoIdentificacion') }}">
                        <i class="form-icon-left mdi mdi-account-box-outline"></i>
                    </div>
                    @error('tipoIdentificacion')
                        <span role="alert">
                            <strong>{{ $errors->first('tipoIdentificacion') }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <div class="form-icon-wrapper">
                        <input type="text" class="form-control" placeholder="Identificación" autofocus
                            name="identificacion" value="{{ old('identificacion') }}">
                        <i class="form-icon-left mdi mdi-smart-card"></i>
                    </div>
                    @error('identificacion')
                        <span role="alert">
                            <strong>{{ $errors->first('identificacion') }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="form-icon-wrapper">
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                <i class="form-icon-left mdi mdi-email"></i>
            </div>
            @error('tipoIdentificacion')
                <span role="alert">
                    <strong>{{ $errors->first('tipoIdentificacion') }}</strong>
                </span>
            @enderror
        </div>

        <div class="row align-items-center mt-4">
            <div class="col">
                <div class="form-group">
                    <div class="form-icon-wrapper">
                        <input type="password" class="form-control" placeholder="Contraseña" name="password">
                        <i class="form-icon-left mdi mdi-lock"></i>
                        <a href="#" class="form-icon-right password-show-hide" title="Hide or show password">
                            <i class="mdi mdi-eye"></i>
                        </a>
                    </div>
                    @error('tipoIdentificacion')
                        <span role="alert">
                            <strong>{{ $errors->first('tipoIdentificacion') }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <div class="form-icon-wrapper">
                        <input type="password" class="form-control" placeholder="Repetir contraseña" name="repassword">
                        <i class="form-icon-left mdi mdi-lock"></i>
                        <a href="#" class="form-icon-right password-show-hide" title="Hide or show password">
                            <i class="mdi mdi-eye"></i>
                        </a>
                    </div>
                    @error('tipoIdentificacion')
                        <span role="alert">
                            <strong>{{ $errors->first('tipoIdentificacion') }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="form-icon-wrapper">
                <input type="text" class="form-control" placeholder="Telefono" autofocus name="telefono"
                    value="{{ old('telefono') }}">
                <i class="form-icon-left mdi mdi-phone"></i>
            </div>
            @error('telefono')
                <span role="alert">
                    <strong>{{ $errors->first('telefono') }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <div class="form-icon-wrapper">
                <input type="text" class="form-control" placeholder="Direccion" autofocus name="direccion"
                    value="{{ old('direccion') }}">
                <i class="form-icon-left mdi mdi-map-marker"></i>
            </div>
            @error('direccion')
                <span role="alert">
                    <strong>{{ $errors->first('direccion') }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-block" value="Registrarse">
        </div>
        <p class="text-center">
            ¿Ya tienes una cuenta? <a href="{{ route('login') }}">Iniciar sesión</a>
        </p>
    </form>
@endsection
