<?php

use App\Http\Controllers\ControladorAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorUsuario;
use App\Http\Controllers\MailerController;
use App\Http\Controllers\PDFController;

/*-----Rutas de las vistas del Usuario ----------------------- */
Route::resource('/', ControladorUsuario::class);
Route::get('index', [ControladorUsuario::class, "index"]);
Route::get('/InicioSesion', [ControladorUsuario::class, "login"])->name('login');
Route::post('/InicioSesion', [ControladorUsuario::class, "loginV"]);
Route::post('/InicioSesionR', [ControladorUsuario::class, "register"]);
Route::get("RecuperarContraseña", [MailerController::class, "email"])->name("email");
Route::get('/CambiarContraseña', [ControladorUsuario::class, "cambioC"]);
Route::get('/Categorias', [ControladorUsuario::class, "categoriaU"])->name("categorias");
Route::get('/Informacion/{Id_Usuarios}', [ControladorUsuario::class, "datosU"]);
Route::post('/Informacion', [ControladorUsuario::class, "informacionU"])->name('Modificar');
Route::get('/prueba', [ControladorUsuario::class, "prueba"]);

Route::post("Envio", [MailerController::class, "composeEmail"])->name("send-email");
Route::get('/Productos/login',[ControladorUsuario::class, "loginC"])->name("loginCerrar");
Route::get('/Productos/detalleProducto', [ControladorUsuario::class, "detalleProd"]);
Route::get('/Productos/detalleCompra',[ControladorUsuario::class,"detalleCompra"])->name("detalleCompra");

Route::get('/Productos/finalizarCompra',[ControladorUsuario::class,"FinalizarCompra"]);

/*-------------Rutas de Administrador Usuarios---------------------- */
Route::get('/Administrador', [ControladorAdmin::class, "index"])->name('inicio');
Route::get('/Administrador/usuarios', [ControladorAdmin::class, "usuarios"])->name('usuarios');
Route::get('/Administrador/perfil/{Id_Usuarios}', [ControladorAdmin::class, "datosA"])->name('datos');
Route::post('/Administrador/perfil', [ControladorAdmin::class, "perfil"])->name('editarD');
Route::post('/Administrador/usuarios/crear', [ControladorAdmin::class, "crear"]);
Route::get('/Administrador/usuarios/{Id_Usuarios}', [ControladorAdmin::class, "estado"]);
Route::get('/Administrador/usuariosE/{Id_Usuarios}',[ControladorAdmin::class, "editarUsuario"]);
Route::post('/Administrador/usuariosE',[ControladorAdmin::class,"ModificarUsuario"])->name('ModificarUsuario');
Route::get('/Administrador/generarPDF', [PDFController::class, 'generatePDF'])->name('PDF');


/*-----------Rutas de las categorias ----------- */

Route::get('/Administrador/categorias', [ControladorAdmin::class, "categorias"])->name('categoria');
Route::get('/Administrador/categorias/agregar', [ControladorAdmin::class, "Agregar"])->name('agregar');
Route::post('/Administrador/categorias/agregar', [ControladorAdmin::class, "Agregar"])->name('agregarC');
Route::get('/Administrador/categorias/editar/{id}', [ControladorAdmin::class, "editarC"])->name('editarC');

Route::get('/Administrador/categorias/{id}',[ControladorAdmin::class, "EstadoC"]);


/*-----------Rutas de los colores ----------- */
Route::get('/Administrador/colores/MostrarColor',[ControladorAdmin::class, "MostrarColor"])->name('MostrarColor');
Route::post('/Administrador/colores/GuardarColor',[ControladorAdmin::class,"GuardarColor"]);
Route::get('/Administrador/colores/EditarColor/{id}',[ControladorAdmin::class,"EditarColor"]);
Route::post('/Administrador/colores/MostrarColor',[ControladorAdmin::class,"ModificarColor"])->name('Editar');
Route::get('/Administrador/colores/MostrarColor/{id}',[ControladorAdmin::class, "EstadoColor"]);

/*----------Rutas de las tallas------------ */
Route::get('/Administrador/tallas/MostrarTallas',[ControladorAdmin::class, "MostrarTallas"])->name('MostrarTallas');
Route::post('/Administrador/tallas/GuardarTalla',[ControladorAdmin::class,"GuardarTalla"])->name('GuardarTalla');
Route::get('/Administrador/tallas/ModificarTalla/{id}',[ControladorAdmin::class,"ModificarTalla"]);
Route::post('/Administrador/tallas/MostrarTallas',[ControladorAdmin::class,"EditarTalla"])->name('EditarTalla');
Route::get('/Administrador/tallas/Estado/{id}',[ControladorAdmin::class,"EstadoTalla"]);
