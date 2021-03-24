@extends('Layout.plantillaU')
@section('paginas')
                <div class="col-lg-6">
                    <div class="login-reg-form-wrap  pr-lg-50">
                        <h2>Cambiar Contraseña</h2>
                        <form action="" method="post">
                            @csrf
                            <div class="single-input-item">
                                <input type="password" placeholder="Ingrese la nueva contraseña" name="pass"/>
                            </div>
                            <div class="single-input-item">
                                <input type="password" placeholder="Confirmar contraseña" name="password"/>
                            </div>
                           
                            <div class="single-input-item">
                                <button class="sqr-btn">CAMBIAR CONTRASEÑA</button>
                            </div>
                        </form>
                    </div>
                </div>
@endsection