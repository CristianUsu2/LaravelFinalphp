<?php

namespace App\Http\Controllers;
use App\Models\Colores;
use App\Models\Categorias;
use App\Models\User;
use App\Models\Tallas;
use App\Models\Productos;
use App\Models\FotoProducto;
use App\Models\ProductosTallas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControladorAdmin extends Controller
{
  /*------------Acciones Usuarios ------------------- */
    public function index(){
        return view('Administrador/Index');
    }
    public function usuarios(){
         $users = User::all();
        return view('Administrador/usuarios',compact('users'));

    }

    public function datosA($id){
      $UserA=User::find($id);
       return view('Administrador/editarA')->with('administrador',$UserA);;
     }

    public function perfil(Request $request){
      $usuA=User::find($request->IdUsuario);
      if($usuA !=null){
          try{
            
            $usuA->identificacion=$request->identificacion;
            $usuA->name=$request->nombre;
            $usuA->email=$request->email;
            $usuA->apellido=$request->apellido;
            $usuA->telefono=$request->telefono;
            $usuA->save();
          
            return redirect()->action([ControladorAdmin::class, "index"]);

          }catch(Exception $e){
          
          }
      }
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

    public function crear(Request $request){
      $request->validate([
        'nombreNu' => 'required|min:2|max:20',
        'apellidoNu'=> 'required|min:2|max:20',
        'emailNu' => 'required|email|min:4|max:50|',
        'identificacion' => 'required|min:7|max:12|',
         'passwordNu' => 'required|min:2|max:30',
         'telefonoNu' => 'required|min:2|max:11'
     ]);
      try{
      if($request->passwordNu== $request->passwordNuR){
      
       $registro = new User();
       $registro->name = $request->nombreNu;
       $registro->email = $request->emailNu;
       $registro->identificacion = $request->identificacion;
       $incriptado= bcrypt($request->passwordNu);
       $registro->password=$incriptado; 
       $registro->apellido = $request->apellidoNu;
       $registro->telefono = $request->telefonoNu;
       $registro->save();
      
      }
      }catch(Exception $e){
        
        return response()->json($e.getMessage());
      }
      return redirect()->action([ControladorAdmin::class, "usuarios"]);
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

    public function editarC($id){
      $categorias=Categorias::find($id);
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

   /*----------Accciones productos------------ */
  
   public function MostrarProductos(){
      $colores=Colores::where("estado","=", "1")->get();
      $categorias=Categorias::where("estado","=","1")->get();
      $tallas=Tallas::where("estado","=","1")->get();
      $producto=Productos::join('foto_producto','foto_producto.id_producto','=','productos.id')
                           ->join('colores','colores.id','=','productos.id_color')
                           ->join('categorias','categorias.id','=','productos.id_categoria')
                           ->join('producto_talla','producto_talla.id_producto','=','productos.id')
                           ->select("*")
                           ->paginate(6);
     return view('Administrador/productos/MostrarProductos')
                                          ->with('colores',$colores)
                                          ->with('categorias',$categorias)
                                          ->with('tallas',$tallas)
                                          ->with('productos',$producto);
   }

   public function GuardarTablaFotoProducto($e,$producto){
     foreach($e as $imagen){
      $fotoProducto=new FotoProducto();
      $fotoProducto->foto=$imagen->store('uploads','public');
      $fotoProducto->id_producto=$producto->id;
      $fotoProducto->save();
     }
     return true;
  }

  public function GuardarTallaIntermedia($tallas,$cantidadesTallas,$producto){
  foreach($tallas as $filas =>$talla){
     $producto_talla= new ProductosTallas();
     $producto_talla->cantidad=$cantidadesTallas[$filas];
     $producto_talla->id_talla=$talla;
     $producto_talla->id_producto=$producto->id;
     $producto_talla->save();
   }
   return true;
  }

   public function GuardarProductos(Request $request){
     try{
       $tallas=$request->tallas;
       $cantidadesTallas=$request->cantidadTalla;
        $producto= new Productos(); 
        $producto->nombre=$request->nombre;
        $producto->stock=$request->stock;
        $producto->precio=$request->precio;
        $producto->descuento=$request->descuento;
        $producto->estado=1;
        $producto->id_color=$request->color;
        $producto->id_categoria=$request->categoria;
        $producto->save();

        if($request->hasFile('imagenes')){
          $imagenes=$request->imagenes;
          $r=ControladorAdmin::GuardarTablaFotoProducto($imagenes,$producto);
          if($r){
            $res=ControladorAdmin::GuardarTallaIntermedia($tallas,$cantidadesTallas,$producto);
            if($res){
              return redirect()->action([ControladorAdmin::class, "MostrarProductos"]);
            }
          }
        }
     
     }catch(Exception $e){
     
      return "no golio";
     }
     
    return response()->json($request);
   }

   
}

                    