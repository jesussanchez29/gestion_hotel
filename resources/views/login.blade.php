@extends('layouts.loginRegistro')
@section('title', 'Inicar Sesion')

@section('content')
    <div class="my-5 text-center">
        <h3 class="font-weight-bold mb-3">Inicio de sesión</h3>
        <p class="text-muted">Inicia sesón para continuar</p>
    </div>
    <form>
        <div class="form-group">
            <div class="form-icon-wrapper">
                <input type="email" class="form-control" placeholder="Email" autofocus required>
                <i class="form-icon-left mdi mdi-email"></i>
            </div>
        </div>
        <div class="form-group">
            <div class="form-icon-wrapper">
                <input type="password" class="form-control" placeholder="Contraseña" required>
                <i class="form-icon-left mdi mdi-lock"></i>
                <a href="#" class="form-icon-right password-show-hide" title="Hide or show password">
                    <i class="mdi mdi-eye"></i>
                </a>
            </div>
        </div>
        <div class="form-group">
            <div class="d-lg-flex d-md-block justify-content-between">
                <div class="custom-control custom-checkbox mb-3 mb-lg-0">
                    <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                    <label class="custom-control-label" for="customCheck1">Recuérdame</label>
                </div>
                <a href="password-reset.html">¡He olvidado mi contraseña!</a>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block">Iniciar sesión</button>
        </div>
        <p class="text-center">
            ¿No tienes cuenta?
            <a href="sign-up.html">Crea una cuenta gratis</a>
        </p>
    </form>
@endsection
