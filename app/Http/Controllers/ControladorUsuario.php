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

   public function login(Request $request){
     $usuarios=User::where(["email","=",$request->email])->get();
     return response()->json($usuarios->email);
        //view('Usuario/index');
   }
    
    public function register(Request $request){

        $request->validate([
           'name' => 'required|min:2|max:20',
           'apellido'=> 'required|min:2|max:20',
           'email' => 'required|email|unique:users|min:4|max:50|',
            'password' => 'required|min:4|max:30',
            'telefono' => 'required|min:5|max:30'
        ]);

        $registro = new User();

        $registro->name = $request->name;
        $registro->apellido = $request->apellido;
        $registro->telefono = $request->telefono;
        $registro->email = $request->email;
        $registro->id_rol=1;
        $incriptado= bcrypt($request->password);
        $registro->password=$incriptado; 
        $registro->save();

        return view('Usuario/index')->with('boton','lola');

     }
}