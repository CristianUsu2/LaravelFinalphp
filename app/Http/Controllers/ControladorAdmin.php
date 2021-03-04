<?php

namespace App\Http\Controllers;

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
            'Nombre' => 'required|min:10|max:30'
        ]);

        $categoria = new Categorias();

        $categoria->Nombre_Categoria = $request->Nombre;

        $categoria->save();

        return view('Administrador/categoria/agregar');
    }

    public function editar(Categorias $categorias){
        return view('Administrador/categoria/editar',compact('categorias'));
    }

}

                    