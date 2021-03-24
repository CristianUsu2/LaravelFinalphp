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
   public function cambioC(){
     return view('Usuario/reseteo');
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
            'nombre' => 'required|min:2|max:20',
            'apellido'=> 'required|min:2|max:20',
            'email' => 'required|email|min:4|max:50|',
            'identificacion' => 'required|min:7|max:12|',
             'password' => 'required|min:2|max:30',
             'passwordR'=>'required|min:2|max:30',
             'telefono' => 'required|min:2|max:11'
        ]);
        try{
          if($request->password== $request->passwordR){
             $registro = new User();
             $registro->name = $request->nombre;
             $registro->email = $request->email;
             $registro->identificacion = $request->identificacion;
             $incriptado= bcrypt($request->password);
             $registro->password=$incriptado; 
             $registro->apellido = $request->apellido;
             $registro->telefono = $request->telefono;
             $registro->save();
           }
        }catch(Exception $e){
            return response()->json($e.getMessage());
          }
          return redirect()->action([ControladorUsuario::class, "index"]);     
    }

    public function loginV(Request $request){
        $busquedaEmail=User::where('email','=',$request->correo)->value('email');
        $busquedaEncrip=User::where('email','=',$request->correo)->value('password');
        $busquedaRol=User::where('email','=',$request->correo)->value('id_rol');
        $busquedaId=User::where('email','=',$request->correo)->value('Id_Usuarios');
        $DatosUsuario=[];
        $DatosSession=[];
        if($busquedaEmail !=null && $busquedaEncrip !=null && $busquedaRol!=null && $busquedaId!=null ){
            array_push($DatosUsuario, $busquedaEmail,$busquedaEncrip, $busquedaRol, $busquedaId);     
            if($DatosUsuario[0]== $request->correo){
              if(password_verify($request->password, $DatosUsuario[1])){ 
                 if($DatosUsuario[2]== 1){
                    array_push($DatosSession,$DatosUsuario[2],$DatosUsuario[3]);
                   $_SESSION["sesion"]=$DatosSession;
                   return redirect()->action([ControladorUsuario::class,"index"]);
                 }else if($DatosUsuario[2]==2){
                    array_push($DatosSession,$DatosUsuario[2],$DatosUsuario[3]);
                    $_SESSION["sesion"]=$DatosSession;
                    return redirect()->action([ControladorAdmin::class,"index"]);
                 }
              }
            }
        }
         return redirect()->action([ControladorUsuario::class, "login"]);
    }
}