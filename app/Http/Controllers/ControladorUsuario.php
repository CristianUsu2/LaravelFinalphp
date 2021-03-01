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
       $credentials = request()->only('email','password');

      if(Auth::attempt($credentials)){
          request()->session()->regenerate();
          return view('Usuario/index');
      }
          return view('Usuario/detalleCompra');
    }
    
    public function register(Request $request){

        $request->validate([
           'name' => 'required|min:5|max:20',
           'apellido'=> 'required|min:10|max:30',
           'email' => 'required|email|unique:users|min:15|max:150|',
            'password' => 'required|min:8|max:30',
            'direccion' => 'required|min:10|max:30'
        ]);

        $registro = new User();

        $registro->name = $request->name;
        $registro->password  = $request->password;
        $registro->apellido = $request->apellido;
        $registro->direccion = $request->direccion;
        $registro->email = $request->email;

       $registro['password'] = bcrypt($request->password);

        $registro->save();

        return view('Usuario/index')->with('boton','lola');

     }
}