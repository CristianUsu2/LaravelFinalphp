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
Route::get('/Administrador/categorias/agregar', [ControladorAdmin::class, "Agregar"])->name('agregar');
Route::post('/Administrador/categorias/agregar', [ControladorAdmin::class, "Agregar"])->name('agregarC');
Route::get('/Administrador/categorias/editar/{id}', [ControladorAdmin::class, "editarC"])->name('editarC');

Route::get('/Administrador/categorias/{id}',[ControladorAdmin::class, "EstadoC"]);


/*-----------Rutas de los colores ----------- */
Route::get('/Administrador/colores/MostrarColor',[ControladorAdmin::class, "MostrarColor"])->name('MostrarColor');
Route::post('/Administrador/colores/MostrarColor',[ControladorAdmin::class,"GuardarColor"])->name('GuardarColor');
Route::get('/Administrador/colores/EditarColor/{id}',[
  ControladorAdmin::class,"EditarColor"
]);
Route::post('/Administrador/colores/MostrarColor',[ControladorAdmin::class,"ModificarColor"])->name('Editar');
Route::get('/Administrador/colores/MostrarColor/{id}',[ControladorAdmin::class, "EstadoColor"]);

/*----------Rutas de las tallas------------ */
Route::get('/Administrador/tallas/MostrarTallas',[ControladorAdmin::class, "MostrarTallas"])->name('MostrarTallas');
Route::post('/Administrador/colores/GuardarTalla',[ControladorAdmin::class,"GuardarTalla"])->name('GuardarTalla');
Route::get('/Administrador/colores/ModificarTalla/{id}',[ControladorAdmin::class,"ModificarTalla"]);
Route::post('/Administrador/colores/MostrarTallas',[ControladorAdmin::class,"EditarTalla"])->name('EditarTalla');
Route::get('/Administrador/colores/MostrarColor/{id}',[ControladorAdmin::class, "EstadoColor"]);
Route::get('/Administrador/colores/Estado/{id}',[ControladorAdmin::class,"EstadoTalla"]);
