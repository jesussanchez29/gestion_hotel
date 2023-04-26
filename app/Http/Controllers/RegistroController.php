<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{

    public function index()
    {
        return view('registro');
    }

    public function createCliente(RegistroRequest $request)
    {
        $cliente = new Cliente();
        $cliente->nombre = $request->nombre;
        $cliente->apellidos = $request->apellidos;
        $cliente->fechaNacimiento = $request->fechaNacimiento;
        $cliente->tipoIdentificacion = $request->tipoIdentificacion;
        $cliente->identificacion = $request->identificacion;
        $cliente->email = $request->email;
        $cliente->password = Hash::make($request->password);
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;

        $cliente->save();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
