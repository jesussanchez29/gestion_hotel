@extends('layouts.loginRegistro')
@section('title', 'Registro')

@section('content')
    <div class="my-5 text-center">
        <h3 class="font-weight-bold">Registro</h3>
        <p class="text-muted">Create una cuenta gratis ahora</p>
    </div>
    <form>
        <div class="row align-items-center mt-4">
            <div class="col">
                <div class="form-group">
                    <div class="form-icon-wrapper">
                        <input type="text" class="form-control" placeholder="Nombre" autofocus>
                        <i class="form-icon-left mdi mdi-account"></i>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <div class="form-icon-wrapper">
                        <input type="text" class="form-control" placeholder="Apellidos" autofocus>
                        <i class="form-icon-left mdi mdi-account"></i>
                    </div>
                </div>                        
            </div>
          </div>

          <div class="row align-items-center mt-4">
            <div class="col">
                <div class="form-group">
                    <div class="form-icon-wrapper">
                        <input type="text" class="form-control" placeholder="Tipo identifiacion" autofocus>
                        <i class="form-icon-left mdi mdi-account"></i>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <div class="form-icon-wrapper">
                        <input type="text" class="form-control" placeholder="DNI" autofocus>
                        <i class="form-icon-left mdi mdi-account"></i>
                    </div>
                </div>                        
            </div>
          </div>

        
        <div class="form-group">
            <div class="form-icon-wrapper">
                <input type="email" class="form-control" placeholder="Email" required>
                <i class="form-icon-left mdi mdi-email"></i>
            </div>
        </div>

        <div class="row align-items-center mt-4">
            <div class="col">
                <div class="form-group">
                    <div class="form-icon-wrapper">
                        <input type="password" class="form-control" placeholder="Contraseña">
                        <i class="form-icon-left mdi mdi-lock"></i>
                        <a href="#" class="form-icon-right password-show-hide" title="Hide or show password">
                            <i class="mdi mdi-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <div class="form-icon-wrapper">
                        <input type="password" class="form-control" placeholder="Repetir contraseña">
                        <i class="form-icon-left mdi mdi-lock"></i>
                        <a href="#" class="form-icon-right password-show-hide" title="Hide or show password">
                            <i class="mdi mdi-eye"></i>
                        </a>
                    </div>
                </div>                
            </div>
          </div>

      
        <div class="form-group">
            <div class="form-icon-wrapper">
                <input type="text" class="form-control" placeholder="Telefono" autofocus>
                <i class="form-icon-left mdi mdi-account"></i>
            </div>
        </div>
        <div class="form-group">
            <div class="form-icon-wrapper">
                <input type="text" class="form-control" placeholder="Direccion" autofocus>
                <i class="form-icon-left mdi mdi-account"></i>
            </div>
        </div>
        <div class="form-group">
            <div class="form-icon-wrapper">
                <input type="text" class="form-control" placeholder="Fecha Nacimiento" autofocus>
                <i class="form-icon-left mdi mdi-account"></i>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block">Registrarse</button>
        </div>
        <p class="text-center">
            ¿Ya tienes una cuenta? <a href="sign-in.html">Iniciar sesión</a>
        </p>
    </form>
@endsection
