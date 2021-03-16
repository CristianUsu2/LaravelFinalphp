@extends('Layout.plantillaU')
@section('paginas')

<div class="login-register-wrapper">
    <div class="container">
        <div class="member-area-from-wrap">
            <div class="row">
                <!-- Login Content Start -->
                <div class="col-lg-6">
                    <div class="login-reg-form-wrap  pr-lg-50">
                        <h2>Iniciar Sesión</h2>
                        <form action="" method="post">
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
                                    <a href="#" class="forget-pwd">¿Olvidaste tu Contraseña?</a>
                                </div>
                            </div>
                            <div class="single-input-item">
                                <button class="sqr-btn">INGRESAR</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Login Content End -->

                <!-- Register Content Start -->
                <div class="col-lg-6">
                    <div class="login-reg-form-wrap mt-md-34 mt-sm-34">
                        <h2>REGISTRO</h2>
                        <form action="{{route('register')}}" method="post">
                            @csrf
                            <div class="single-input-item">
                                <input type="text" name="identificacion" placeholder="Documento Identidad" />
                            </div>
                            <div class="single-input-item">
                                <input type="text" name="name" placeholder="Nombre" />
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
                                <button class="sqr-btn" type="submit">REGISTRARSE</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Register Content End -->
            </div>
        </div>
    </div>
</div>

@endsection