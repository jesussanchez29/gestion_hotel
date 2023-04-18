<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route Controlador Registro
Route::controller(RegistroController::class)->group(function () {
    // Route para ir a la ruta registro
    Route::get('registro', 'index')->name('registro');
    // Route para crear registro base de datos
    //Route::post('registro', 'registro');
});