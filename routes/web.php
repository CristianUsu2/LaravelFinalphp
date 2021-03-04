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
Route::get('/Administrador/categorias', [ControladorAdmin::class, "categorias"])->name('categoria');
Route::get('/Administrador/categorias/agregar', [ControladorAdmin::class, "Agregar"])->name('agregar');
Route::post('/Administrador/categorias/agregar', [ControladorAdmin::class, "Agregar"])->name('agregarC');
Route::get('/Administrador/categorias/{categorias/id}//editar', [ControladorAdmin::class, "editar"])->name('editar');

