@extends('layouts.loginRegistro')
@section('title', 'Inicar Sesion')

@section('content')
    <div class="my-5 text-center">
        <h3 class="font-weight-bold mb-3">Inicio de sesión</h3>
        <p class="text-muted">Inicia sesón para continuar</p>
    </div>
    <form method="POST">
        @csrf

        <div class="form-group">
            <div class="form-icon-wrapper">
                <input type="email" class="form-control" placeholder="Email" name="email" autofocus>
                <i class="form-icon-left mdi mdi-email"></i>
            </div>
            @error('email')
            <span role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <div class="form-icon-wrapper">
                <input type="password" class="form-control" placeholder="Contraseña" name="password">
                <i class="form-icon-left mdi mdi-lock"></i>
                <a href="#" class="form-icon-right password-show-hide" title="Hide or show password">
                    <i class="mdi mdi-eye"></i>
                </a>
            </div>
            @error('password')
            <span role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <div class="d-lg-flex d-md-block justify-content-between">
                <div class="custom-control custom-checkbox mb-3 mb-lg-0">
                    <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                    <label class="custom-control-label" for="customCheck1">Recuérdame</label>
                </div>
                <a href="">¡He olvidado mi contraseña!</a>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-block" value="Iniciar sesión">
        <p class="text-center">
            <br>
            ¿No tienes cuenta?
            <a href="{{ route('registro') }}">Crea una cuenta gratis</a>
        </p>
    </form>
@endsection
