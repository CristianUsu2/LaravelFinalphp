<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use UxWeb\SweetAlert\SweetAlert;
use Crypt;
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

   public function update(Request $request){
    $request->validate([
      'pass' => 'required|min:2|max:30',
      'passC' => 'required|min:2|max:30'
      ]);

   $correoC=User::where('email','=',$request->correo)->first();

   if($correoC && $request->pass == $request->passC){
     $password = bcrypt($request->pass);
     $correoC->password = $password; 
     $correoC->save();
   }

   if(!$correoC ) {
     return back()->with("failed", "Ocurrio un error, no pudimos cambiar su contraseña, por favor vuelva a intentarlo.")->withError();
 }
 
 else {
     return back()->with("success", "Su contraseña fue cambiada exitosamente.");
 }


  return back()->with('error','No se pudo modificar la contraseña.');   

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
          $usuM->password=$request->pass;
          $decrypted = Crypt::decrypt($usuM->password);
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
            'correo' => 'required|email|min:4|max:50|',
            'identificacion' => 'required|min:7|max:12|',
             'contraseña' => 'required|min:2|max:30',
             'ConfirmarContraseña'=>'required|min:2|max:30',
             'telefono' => 'required|min:2|max:11'
        ]);
        try{
          if($request->contraseña== $request->ConfirmarContraseña){
             $registro = new User();
             $registro->name = $request->nombre;
             $registro->email = $request->correo;
             $registro->identificacion = $request->identificacion;
             $incriptado= bcrypt($request->contraseña);
             $registro->password=$incriptado; 
             $registro->apellido = $request->apellido;
             $registro->telefono = $request->telefono;
             $registro->save();
             alert()->success('You have been logged out.', 'Good bye!');

           }
        }catch(Exception $e){
          alert()->error('Error Message', 'Optional Title');
            return response()->json($e.getMessage())->with('error','login');
          }
          return redirect()->action([ControladorUsuario::class, "index"]);     
    }

    public function loginV(Request $request){
      $request->validate([
        'Correo' => 'required|email|min:4|max:50|',
         'Contraseña' => 'required|min:2|max:30'
     
    ]);
        $busquedaEmail=User::where('email','=',$request->Correo)->value('email');
        $busquedaEncrip=User::where('email','=',$request->Correo)->value('password');
        $busquedaRol=User::where('email','=',$request->Correo)->value('id_rol');
        $busquedaId=User::where('email','=',$request->Correo)->value('Id_Usuarios'); 
        $DatosUsuario=[];
       
           if($busquedaEmail !=null && $busquedaEncrip !=null && $busquedaRol!=null && $busquedaId!=null ){
             array_push($DatosUsuario, $busquedaEmail,$busquedaEncrip, $busquedaRol, $busquedaId);     
             if($DatosUsuario[0]== $request->Correo){
               if(password_verify($request->Contraseña, $DatosUsuario[1])){ 

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