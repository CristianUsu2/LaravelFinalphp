<?php

use App\Http\Controllers\ControladorAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorUsuario;
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
/*-----Rutas de las vistas del Usuario ----------------------- */
Route::resource('/', ControladorUsuario::class);
Route::get('index', [ControladorUsuario::class, "index"]);
Route::get('/Productos/detalleProducto', [ControladorUsuario::class, "detalleProd"]);
Route::get('/Productos/detalleCompra',[ControladorUsuario::class,"detalleCompra"]);
Route::get('/Productos/login', [ControladorUsuario::class,"inicio"]);
Route::get('/Productos/finalizarCompra',[ControladorUsuario::class,"FinalizarCompra"]);
Route::post('/', [ControladorUsuario::class, "login"])->name('login');
Route::post('/', [ControladorUsuario::class, "register"]);
Route::get('/Administrador', [ControladorAdmin::class, "index"]);
Route::get('/Administrador/usuarios', [ControladorAdmin::class, "usuarios"])->name('usuarios');
Route::post('/Administrador/usuarios', [ControladorAdmin::class, "estado"])->name('estado');

/*-----------Rutas de las categorias ----------- */

Route::get('/Administrador/categorias', [ControladorAdmin::class, "categorias"])->name('categoria');
Route::get('/Administrador/categoria', [ControladorAdmin::class, "Agregar"])->name('agregarC');
Route::post('/Administrador/categoria', [ControladorAdmin::class, "Agregar"]);

Route::get('/Administrador/categorias/editar/{id}', [ControladorAdmin::class, "editar"])->name('editarC');
Route::post('/Administrador/categorias/editar/{id}', [ControladorAdmin::class, "editar"])->name('editar');
Route::get('/Administrador/categorias/{id}',[ControladorAdmin::class, "EstadoC"])->name('EditarC');

/*-----------Rutas de los colores ----------- */
Route::get('/Administrador/colores/MostrarColor',[ControladorAdmin::class, "MostrarColor"])->name('MostrarColor');
Route::post('/Administrador/colores/MostrarColor',[ControladorAdmin::class,"GuardarColor"])->name('GuardarColor');
Route::get('/Administrador/colores/MostrarColor/{id}',[ControladorAdmin::class,"EditarColor"]);
Route::post('/Administrador/colores/MostrarColor',[ControladorAdmin::class,"ModificarColor"])->name('Editar');
Route::get('/Administrador/colores/MostrarColor/{id}',[ControladorAdmin::class, "EstadoColor"]);