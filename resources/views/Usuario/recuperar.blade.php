@extends('Layout.plantillaU')
@section('paginas')

      <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-sm-12 col-12 m-auto">
                <form action="{{route('send-email')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card shadow">

                        @if(Session::has("success"))
                            <div class="alert alert-success alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('success')}}</div>
                        @elseif(Session::has("failed"))
                            <div class="alert alert-danger alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('failed')}}</div>
                        @endif

                        <div class="card-header">
                            <h4 class="card-title">RECUPERAR CONTRASEÑA</h4>
                        </div>

                            <div class="form-group">
                                <label for="emailBcc">Ingrese el Correo </label>
                                <input type="email" name="emailBcc" id="emailBcc" class="form-control" placeholder="Ingrese Su Correo">
                            </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Recuperar Contraseña</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>
      
      @endsection