@extends('adminlte::page')

@section('title', 'Tienda Axes | Administrador')

@section('content')
<div class="container">
    
    <div class="row">

        <div class="col-md-12 mt-5">
            <div class="modal fade" id="btnAgregarTalla" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Crear Talla</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <form action="{{route('GuardarTalla')}}" method="POST" class="form-group">
                        @csrf
                      <label>Ingresar la talla</label>
                      <input type="text" name="talla" class="form-control" placeholder="XL,L,M ..."/>
                    
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                      <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>


            <div class="row">

                <div class="col-md-12 text-center">

                    <h3 class="mb-2"><strong>Tallas registrados</strong></h3>

                </div>
                <a  class="btn btn-success mb-2 ml-2" data-toggle="modal" data-target="#btnAgregarTalla">Agregar Talla</a>
              <div class="col-lg-12">
                <table class="table" id="colores">
                    <thead>
                      <tr>
                        <th scope="col">Id de la talla</th>
                        <th scope="col">Talla</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($tallas as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->talla}}</td>
                            <td>{{$item->estado==1? "Activo":"Inactivo"}}</td>
                            <td><a class="btn btn-primary" href="{{url('/Administrador/colores/ModificarTalla/'.$item->id)}}">Editar</a>
                                <a class="btn btn-dark" href="{{url('/Administrador/colores/Estado/'.$item->id)}}">Cambiar Estado</a>
                            </td>
                            
                          </tr>
                        @endforeach
                      
                     
                    </tbody>
                  </table>
                  {{$tallas->links()}}
                </div> 
            </div>
            
          

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

 


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

@stop