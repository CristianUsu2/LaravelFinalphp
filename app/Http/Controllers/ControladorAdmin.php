<?php

namespace App\Http\Controllers;
use App\Models\Colores;
use App\Models\Categorias;
use App\Models\User;
use App\Models\Tallas;
use Illuminate\Http\Request;

class ControladorAdmin extends Controller
{
  /*------------Acciones Usuarios ------------------- */
    public function index(){
        return view('Administrador/index');
    }
    public function usuarios(){
         $users = User::all();
        return view('Administrador/usuarios',compact('users'));

    }
    public function estado($Id_Usuarios){
       $UsuB=User::Where("Id_Usuarios","=",$Id_Usuarios)->first();
       try{
          if($UsuB->estado==1){
             $UsuB->estado=0;       
          }else{
            $UsuB->estado=1;
          }        
          $UsuB->save();
        return redirect()->action([ControladorAdmin::class, "usuarios"]);
       }catch(Exception $e){
         return response()->json($e.getMessage());
       }
    }

    public function editarUsuario($id){
      $UserB=User::find($id);
      return view('Administrador/Modificar')->with('usuario',$UserB);
    }

    public function ModificarUsuario(Request $request){
      $usuM=User::find($request->IdUsuario);
      if($usuM !=null){
          try{
            $usuM->name=$request->NombreN;
            $usuM->email=$request->CorreoN;
            $usuM->Apellido=$request->ApellidoN;
            $usuM->telefono=$request->TelefonoN;
            $usuM->save();
            return redirect()->action([ControladorAdmin::class, "usuarios"]);
          }catch(Exception $e){
             return redirect()->json($e.getMessage());
          }
      }
    } 

    public function crear(){
      return view('Administrador/Crear');
    }

    /*-------------------Acciones categorias ----------------------*/
    public function categorias(){
        $categoria = Categorias::all();
        return view('Administrador/categoria/categorias',compact('categoria'));
    }

    public function Agregar(Request $request){
        $request->validate([
            'Nombre' => 'required|min:2|max:30'
        ]);

        $categoria = new Categorias();

        $categoria->Nombre_Categoria = $request->Nombre;
        $categoria->save();

        return redirect()->action([ControladorAdmin::class,"categorias"]);
    }

    public function EstadoC($id){
      $busqueda=Categorias::find($id);
      if($busqueda!=null){
      
           if($busqueda->estado == 1){
              $busqueda->estado=0;
           }else{
             $busqueda->estado=1;   
           }
         $busqueda->save();   
         return redirect()->action([ControladorAdmin::class,"categorias"]);
              
     }
  }

    public function editar(Categorias $categorias){
        return view('Administrador/categoria/editar',compact('categorias'));
    }

    /*---------------Acciones Colores ------------------------------------- */

    public function MostrarColor(){
        $colores=Colores::paginate(5);
      return  view('Administrador/colores/MostrarColor')->with('colores',$colores);
    }
   
    public function EditarColor($id){
       $busqueda=Colores::find($id);
       return view('Administrador/colores/ModificarColor')->with('color',$busqueda);
    }

    public function EstadoColor($id){
        $busqueda=Colores::find($id);
        if($busqueda!=null){
         try{
             if($busqueda->estado == 1){
                $busqueda->estado=0;
             }else{
               $busqueda->estado=1;   
             }
           $busqueda->save();   
           return redirect()->action([ControladorAdmin::class,"MostrarColor"]);
         }catch(Exeption $e){  
            return response()->json($e.getMessage()); 
         }
       }
    }

    public function GuardarColor(Request $request){
      /*$request->validate([
        'ColorN'=>'required/min:3/max:12'
      ]);*/ 
        try{
        $Ncolor= new Colores();
        $Ncolor->color=$request->ColorN;
        $Ncolor->estado=1;
        $Ncolor->save();
        return redirect()->action([ControladorAdmin::class, "MostrarColor" ]); 
        }catch(Exception $e){
          $e->getMessage();
        }
    }


    public function ModificarColor(Request $request){
         $request->validate([
           'color'=>'required/min:3/max:12'
         ]);
         try{
          $busqueda=Colores::find($request->idColor);
          if($busqueda!=null){
            $busqueda->color=$request->colorN;
            $busqueda->save();
            return redirect()->action([ControladorAdmin::class, "MostrarColor"]);
          }
         }catch(Exception $e){
             return response()->$e.getMessage();
         }
    }

    /*-----------------------Acciones tallas------------------- */

    public function MostrarTallas(){
        $registros=Tallas::paginate(5);
       return view('Administrador/tallas/MostrarTallas')->with("tallas",$registros);
    }

    public function GuardarTalla(Request $request){
           $request->validate([
            'talla'=>'required'
           ]);
        
          try{
            $talla= new Tallas(); 
            $talla->talla=$request->talla;
            $talla->estado=1;
            $talla->save();
            return redirect()->action([ControladorAdmin::class,"MostrarTallas"]);
          }catch(Exceptio $e){
             return response()->json($e.getMessage());
          } 
    }

    public function EditarTalla(Request $request){
      $request->validate([
       'tallaN'=>'required',
       'idTalla'=>'required'
      ]);
       $Btalla=Tallas::find($request->idTalla);
       if($Btalla!=null){
         try{
         $Btalla->talla=$request->tallaN;
         $Btalla->save();
         return redirect()->action([ControladorAdmin::class,"MostrarTallas"]);
         }catch(Exception $e){
           return response()->json($e.getMessage());
         }
       }
      
    }

    public function ModificarTalla($id){
         $busquedaTalla=Tallas::find($id);
        return view('Administrador/tallas/ModificarTallas')->with('tallaB', $busquedaTalla);
    }

    public function EstadoTalla($id){
      $busquedaT=Tallas::find($id);
      if($busquedaT!=null){
        if($busquedaT->estado==0){
             $busquedaT->estado=1;
        }else{
          $busquedaT->estado=0;
        }
        $busquedaT->save();
      }
      return redirect()->action([ControladorAdmin::class, "MostrarTallas"]);
    }
}

                    