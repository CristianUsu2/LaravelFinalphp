<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use UxWeb\SweetAlert\SweetAlert;

class ControladorUsuario extends Controller
{
    public function index(){
        
        return view('Usuario/index');
        SweetAlert::message('Robots are working!');

   }
   public function prueba(){
    alert()->success('You have been logged out.', 'Good bye!');
    return view('Usuario/prueba');
   }
   public function categoriaU(){
     return view('Usuario/categoriaU');
   }
   public function datosU($id){
    $UserB=User::find($id);
     return view('Usuario/informacion')->with('usuario',$UserB);;
   }

   public function informacionU(Request $request){
    $usuM=User::find($request->IdUsuario);
    if($usuM !=null){
        try{
          $usuM->identificacion=$request->identificacion;
          $usuM->name=$request->nombre;
          $usuM->email=$request->email;
          $usuM->apellido=$request->apellido;
          $usuM->telefono=$request->telefono;
          $usuM->save();
          return redirect()->action([ControladorUsuario::class, "index"]);
        }catch(Exception $e){
           return redirect()->json($e.getMessage());
        }
    }
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
             alert()->success('You have been logged out.', 'Good bye!');

           }
        }catch(Exception $e){
          alert()->error('Error Message', 'Optional Title');
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
       
           if($busquedaEmail !=null && $busquedaEncrip !=null && $busquedaRol!=null && $busquedaId!=null ){
             array_push($DatosUsuario, $busquedaEmail,$busquedaEncrip, $busquedaRol, $busquedaId);     
             if($DatosUsuario[0]== $request->correo){
               if(password_verify($request->password, $DatosUsuario[1])){ 

                if($DatosUsuario[2]== 2){
                  $usuario=User::where('Id_Usuarios','=',$DatosUsuario[3])->get();
                  session(['datosU' => $usuario]);
                 
                  return redirect()->action([ControladorAdmin::class,"index"]);
                }  



                else  if($DatosUsuario[2]== 1){
                    $usuario=User::where('Id_Usuarios','=',$DatosUsuario[3])->get();
                    session(['datosU' => $usuario]);
                   
                    return redirect()->action([ControladorUsuario::class,"index"]);
                  }
                
                }
              }
            }
         return redirect()->action([ControladorUsuario::class, "login"]);
    }

    public function loginC(){
      session()->forget('datosU');
      return redirect()->action([ControladorUsuario::class, "index"]);
    }
}