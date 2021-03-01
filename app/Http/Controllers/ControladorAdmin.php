<?php

namespace App\Http\Controllers;

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
    public function estado($id){
        
        $encontrar = User::find($id);


    }

}

                    