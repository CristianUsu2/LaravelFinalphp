<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorUsuario extends Controller
{
    public function index(){
        return view('Usuario/index');
   }
   public function detalleCompra(){
       return view('Usuario/detalleCompra');
   }

   public function detalleProd(){
       return view('Usuario/detalleProd');
   }
   
   public function inicio(){
       return view('Usuario/inicio');
   }

   public function FinalizarCompra(){
       return view('Usuario/finalizarCompra');
   }
}