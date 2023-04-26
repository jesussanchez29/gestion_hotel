<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Authenticatable
{
    use HasFactory;
    protected $primaryKey="id";
    protected $fillable=['nombre', 'apellidos', 'fechaNacimiento', 'tipoIdentificacion', 'identificacion', 'email', 'password', 'telefono', 'direccion'];
    protected $hidden=['id'];
}
