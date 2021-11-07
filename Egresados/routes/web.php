<?php

use App\Http\Controllers\CambiarContrasenaController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuAdministradorController;
use App\Http\Controllers\MenuEgresadoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
    //return view('welcome');
});

Route::resource('/login-egresado', LoginController::class);
Route::resource('/login-administrador', LoginAdminController::class);
Route::resource('/cambiar-contrasena', CambiarContrasenaController::class);
Route::resource('/menu-egresado', MenuEgresadoController::class);
Route::resource('/menu-administrador', MenuAdministradorController::class);
