<?php

namespace App\Http\Controllers;
use App\Models\Colores;
use App\Models\Categorias;
use App\Models\User;
use Illuminate\Http\Request;

class ControladorAdmin extends Controller
{
    public function index(){
        return view('Administrador/index');
    }
    public function usuarios(){
         $users = User::all();
        return view('Administrador/usuarios',compact('users'));

    }
    public function estado(Request $request){
        $users = new User();
        $estado = "";
        if($users->estado ==1){
          $estado = '<a href="Administrador/usuarios/estado/'.$users->Id_Usuarios.'/0" class="btn btn-danger">Inactivar</a>';
        }else if($users->estado ==2){
            $estado = '<a href="Administrador/usuarios/estado/'.$users->Id_Usuarios.'/1" class="btn btn-danger">Activar</a>';

        }

    }

    public function categorias(){
        $categoria = Categorias::all();
        return view('Administrador/categoria/categorias',compact('categoria'));
    }

    public function Agregar(Request $request){
        $request->validate([
            'Nombre' => 'required|min:5|max:30'
        ]);

        $categoria = new Categorias();

        $categoria->Nombre_Categoria = $request->Nombre;
        $categoria->save();

        return view('Administrador/categoria/categorias',compact('categoria'));
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
        $request->validate([
            'color'=>'required|min:2|max:20'
        ]);
        try{
        $Ncolor= new Colores();
        $Ncolor->color=$request->color;
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

}

                    