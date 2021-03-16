<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

   public function login(){

     return view('Usuario/login');
   }
    
    public function register(Request $request){

        $request->validate([
           'name' => 'required|min:2|max:20',
           'apellido'=> 'required|min:2|max:20',
           'email' => 'required|email|unique:users|min:4|max:50|',
           'identificacion' => 'required|unique:users|min:10|max:12|',
            'password' => 'required|min:4|max:30',
            'telefono' => 'required|min:5|max:11'
        ]);

        $registro = new User();

        $registro->name = $request->name;
        $registro->apellido = $request->apellido;
        $registro->telefono = $request->telefono;
        $registro->email = $request->email;
        $registro->identificacion = $request->identificacion;
        $incriptado= bcrypt($request->password);
        $registro->password=$incriptado; 
        $registro->save();

        return view('Usuario/index')->with('boton','lola');

     }
}