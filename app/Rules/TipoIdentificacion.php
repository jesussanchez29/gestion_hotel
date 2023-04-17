<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;

class TipoIdentificacion implements Rule
{
    private $tipo;

    public function __construct($tipo)
    {
        $this->tipo = $tipo;
    }

    public function passes($attribute, $value)
    {
        switch ($this->tipo) {
            case 'pasaporte':
                return preg_match('/^[A-Z]{2}\d{7}$/', $value);
            case 'carnet_conducir':
                return preg_match('/^\d{9}$/', $value);
            case 'dni':
                return preg_match('/^\d{8}[A-Z]$/', $value);
            default:
                return false;
        }
    }

    public function message()
    {
        return 'El campo :attribute no es válido para el tipo de identificación seleccionado.';
    }
}
