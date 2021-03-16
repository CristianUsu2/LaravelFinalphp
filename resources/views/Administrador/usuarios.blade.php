@extends('adminlte::page')

@section('title', 'Tienda Axes | Administrador')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-md-12 mt-5">

            <div class="row">

                <div class="col-md-12 text-center">

                    <h3><strong>Usuarios Registrados</strong></h3>

                </div>
               <a href="{{route('crearUsuario')}}" class="btn btn-success mb-2 ml-2">Crear Usuario</a>
            </div>

            <table class="table table-bordered data-table" id="usuarios">

                <thead>

                    <tr>

                        <th width="50">Id</th>

                        <th>Nombre</th>

                        <th>Apellido</th>

                        <th>Correo</th>

                        <th>Telefono</th>

                        <th>Estado</th>

                        <th width="100px">Acciones</th>

                    </tr>

                </thead>

                <tbody>
                    @foreach ($users as $user)
                        
                    <tr>
                        <td>{{$user->Id_Usuarios}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->Apellido}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->Telefono}}</td>
                        <td>{{$user->estado==1?"Activo":"Inactivo"}}</td>
                        <td>
                            <a href="{{url('/Administrador/usuariosE/'.$user->Id_Usuarios)}}" class="btn btn-primary mb-2">Editar</a>
                            <a href="{{url('/Administrador/usuarios/'.$user->Id_Usuarios)}}" class="btn btn-dark">Cambio Estado</a>
                        </td>

                    </tr>
                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

@stop

@section('js')

  <script>
    $(document).ready(function () {
        $('#usuarios').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"

            }

        });
    });
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

@stop