@extends('Layout.plantillaU')
@section('paginas')

<div class="login-register-wrapper">
    <div class="container">
        <div class="member-area-from-wrap">
            <div class="row">
            @include('sweet::alert')

                <!-- Login Content Start -->
                <div class="col-lg-6">
                    <div class="login-reg-form-wrap  pr-lg-50">
                        <h2>Iniciar Sesión</h2>
                        <form action="{{url('/InicioSesion')}}" method="post">
                            @csrf
                            <div class="single-input-item">
                                <input type="email" placeholder="Ingrese su Correo" name="correo"/>
                            </div>
                            <div class="single-input-item">
                                <input type="password" placeholder="Ingrese su Contraseña" name="password"/>
                            </div>
                            <div class="single-input-item">
                                <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                    <div class="remember-meta">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rememberMe">
                                            <label class="custom-control-label" for="rememberMe">Remember Me</label>
                                        </div>
                                    </div>
                                    <a href="{{route('email')}}" class="forget-pwd">¿Olvidaste tu Contraseña?</a>
                                </div>
                            </div>
                            <div class="single-input-item">
                                <button class="sqr-btn">INGRESAR</button>
                                <button type="button" class="sqr-btn" id="google">Google</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Login Content End -->

                <!-- Register Content Start -->
                <div class="col-lg-6">
                    <div class="login-reg-form-wrap mt-md-34 mt-sm-34">
                        <h2>REGISTRO</h2>
                        <form action="{{url('/InicioSesionR')}}" method="post" id="registro">
                            @csrf
                            <div class="single-input-item">
                                <input type="text" name="identificacion" placeholder="Documento Identidad" />
                            </div>
                            <div class="single-input-item">
                                <input type="text" name="nombre" placeholder="Nombre" />
                            </div>
                            <div class="single-input-item">
                                <input type="text" name="apellido" placeholder="Apellido" />
                            </div>

                            <div class="single-input-item">
                                <input type="email" name="email" placeholder="Correo"  />
                            </div>

                            <div class="single-input-item">
                                <input type="text" name="telefono" placeholder="Telefono / Celular" />
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-input-item">
                                        <input type="password" name="password" placeholder="Contraseña" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-input-item">
                                        <input type="password" name="passwordR" placeholder="Confirmar contraseña" />
                                    </div>
                                </div>
                            </div>
                            <div class="single-input-item">
                                <div class="login-reg-form-meta">
                                    <div class="remember-meta">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="subnewsletter">
                                            <label class="custom-control-label" for="subnewsletter">Acepto Términos y Condiciones</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-input-item">
                                <button class="sqr-btn" id="registros" type="submit">REGISTRARSE</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Register Content End -->
            </div>
        </div>
    </div>
</div>

<<<<<<< HEAD
=======
<script src="../Usuario/js/jquery-3.3.1.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


@if (session('boton') == 'lola')
        <script>
                    $('#registros').click(function(e){
                        e.preventDefault();
                    });     

        </script>
@endif

    <script>
   

        $('#registros').click(function(e){

         Swal.fire(
        '¡Registro Éxitoso!',
        'Tu Cuenta Ha Sido Creada Correctamente',
        'success'
        )
        this.submit();
    });     
    </script>

>>>>>>> b60f10b477993a4139f761cf3129c57c507ab820
@endsection

