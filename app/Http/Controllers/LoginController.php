<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Cliente;
use App\Models\Empleado;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // Funcion para ir a la vista login en caso de que el usuario este logeado se dirige al index
    public function index()
    {
        return view('login');
    }


    //Funcion para que una vez logeado nos rediriga al index
    public function login(LoginRequest $request)
    {
        // Obtenemos los datos del formulario
        $credenciales = $request->obtenerCrendeciales();
        // validamos las credenciales del formulario
        $validacion = $this->validarCredenciales($credenciales);
        // Si no es correcta
        if (!$validacion) {
            //Nos redirige atras con un mensaje de error
            return back()->withErrors(['invalid_credentials' => 'Usuario o contraseña no valido'])->withInput();
        }

        //Guardamos la sesion con las credenciales
        Auth::login($validacion);
        // Nos dirige a la vista index
        return redirect()->route('registro');
    }

    // Funcion para validar si los datos de inicio de sesion son correctos
    public function validarCredenciales($credenciales)
    {
        //obtenmos el email de los clientes y empleados
        $cliente = Cliente::where('email', $credenciales['email'])->first();
        $empelado = Empleado::where('email', $credenciales['email'])->first();

        // Si el email y la contraseña del cliente coinciden
        if ($cliente && Hash::check($credenciales['password'], $cliente->password)) {
            return $cliente;
        // Si el email y la contraseña del empleado coinciden
        } elseif($empelado && Hash::check($credenciales['password'], $empelado->password)) {
            return $empelado;
        }
        return false;
    }
}
