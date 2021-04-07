@extends('adminlte::page')

@section('title', 'Tienda Axes | Administrador')

@section('content')

<div class="container">

<div class="row">

    <div class="col-md-12 mt-5">

        <div class="row">

            <div class="col-md-12 text-center">

                <h3><strong>Editar Usuario</strong></h3>

            </div>

        </div>
     
        

    </div>
    
     <div class="col-lg-12">
        <form action="{{route('editarD')}}" method="POST">
            @csrf
            <input type="hidden" value="{{$administrador->Id_Usuarios/}}" name="IdUsuario"/>
            <div class="row form-row">
                <div class="form-group col-12">
                    <label>Identificacion</label>
                    <input class="form-control" type="text" name="identificacion" value="{{$administrador->identificacion}}" />
                   </div>
  
             <div class="form-group col-6">
              <label>Nombre</label>
              <input class="form-control" type="text" name="nombre" value="{{$administrador->name}}"/>
             </div>

             <div class="form-group col-6">
              <label>Apellido</label>
              <input class="form-control" type="text" name="apellido" value="{{$administrador->apellido}}" />
             </div>

             <div class="form-group col-6">
              <label>Correo</label>
              <input class="form-control" type="email" name="email" value="{{$administrador->email}}" />
             </div>

             <div class="form-group col-6">
              <label>Telefono/Celular</label>
              <input class="form-control" type="text" name="telefono" value="{{$administrador->telefono}}" />
             </div>
            </div>
             <button type="submit" class="btn btn-success">Enviar</button>
             <a href="{{route('inicio')}}" class="btn btn-primary">Cancelar</a>
            </form>   
              
     </div>
     
</div>

</div>

@stop