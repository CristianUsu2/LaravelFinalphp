<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorUsuario extends Controller
{
    public function index(){
        return view('Usuario/index');
   }
   public function productos(){
       return view('Usuario/productos');
   }

   public function detalleProd(){
       return view('Usuario/detalleProd');
   }
}