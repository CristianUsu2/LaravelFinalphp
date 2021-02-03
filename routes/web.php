<?php

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
