<?php

namespace App\Http\Requests;

use App\Rules\TipoIdentificacion;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegistroRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => 'required',
            'apellidos' => 'required',
            'fecha_nacimiento' => 'required|date|before_or_equal:today|after_or_equal:' . date('Y-m-d', strtotime('-100 years')),
            'tipoIdentificacion' => 'required|in:pasaporte,carnet_conducir,dni',
            'identificacion' => ['required', new TipoIdentificacion('tipo_identificacion')],
            'email' => 'required|unique:clientes,email|regex:/^.+@.+$/i',
            'password' => ['required', Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised(),],
            'repassword' => 'required|same:contrasena',
            'telefono' => 'required|regex:/^\+?[1-9]\d{1,14}$/',
            'direccion' => 'required'
        ];
    }
}
