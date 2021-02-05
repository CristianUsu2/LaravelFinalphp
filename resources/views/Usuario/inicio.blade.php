@extends('Layout.plantillaU')
@section('paginas')

<form action="" method="POST">
    <div class="login">
        <div class="wrap">
            <!-- TOGGLE -->
            <div id="toggle-wrap">
                <div id="toggle-terms">
                    <div id="cross">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
    
            <!-- RECOVERY -->
            <div class="recovery">
                <h2>Password Recovery</h2>
                <p>Enter either the <strong>email address</strong> or <strong>username</strong> on the account and <strong>click Submit</strong></p>
                <p>We'll email instructions on how to reset your password.</p>
                <form class="recovery-form" action="" method="post">
                    <input type="text" class="input" id="user_recover" placeholder="Enter Email or Username Here">
                    <input type="submit" class="button" value="Submit">
                </form>
                <p class="mssg">An email has been sent to you with further instructions.</p>
            </div>

            <!-- SLIDER -->
            <div class="content">
                <!-- LOGO -->
                <div class="logo">
                    <a href="#"><img src="https://res.cloudinary.com/dpcloudinary/image/upload/v1506186248/logo.png" alt=""></a>
                </div>
                <!-- SLIDESHOW -->
                <div id="slideshow">
                    <div class="one">
                        <h2><span>EVENTS</span></h2>
                        <p>Sign up to attend any of hundreds of events nationwide</p>
                    </div>
                    <div class="two">
                        <h2><span>LEARNING</span></h2>
                        <p>Thousands of instant online classes/tutorials included</p>
                    </div>
                    <div class="three">
                        <h2><span>GROUPS</span></h2>
                        <p>Create your own groups and connect with others that share your interests</p>
                    </div>
                    <div class="four">
                        <h2><span>SHARING</span></h2>
                        <p>Share your works and knowledge with the community on the public showcase section</p>
                    </div>
                </div>
            </div>
            <!-- LOGIN FORM -->
            <div class="user">
  
                <div class="form-wrap">
                    <!-- TABS -->
                    <div class="tabs">
                        <h3 class="login-tab"><a class="log-in active" href="#login-tab-content"><span>INICIAR SESIÓN<span></a></h3>
                        <h3 class="signup-tab"><a class="sign-up" href="#signup-tab-content"><span>REGISTRO</span></a></h3>
                    </div>
                    <!-- TABS CONTENT -->
                    <div class="tabs-content">
                        <!-- TABS CONTENT LOGIN -->
                        <div id="login-tab-content" class="active">
                            <form class="login-form" action="" method="post">
                                <input type="email" class="input" id="user_login" autocomplete="off" placeholder="Ingrese su correo">
                                <input type="password" class="input" id="user_pass" autocomplete="off" placeholder="Ingrese su contraseña">
                                
                                <input type="submit" class="button" value="Ingresar">
                            </form>
                            <div class="help-action">
                                <p><i class="fa fa-arrow-left" aria-hidden="true"></i><a class="forgot" href="#">¿Olvidaste tu contraseña?</a></p>
                            </div>
                        </div>
                        
                        <!-- TABS CONTENT SIGNUP -->
                        <div id="signup-tab-content">
                            <form class="signup-form" action="" method="post">
                                <input type="email" class="input" id="user_email" autocomplete="off" placeholder="Ingrese su correo">
                                <input type="password" class="input" id="user_pass" autocomplete="off" placeholder="Ingrese su contraseña">
                                <input type="submit" class="button" value="Registrarse">
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</form>
@endsection
