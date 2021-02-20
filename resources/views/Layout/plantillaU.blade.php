<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Usuario/pushbar/css/pushbar.css">
    <link rel="stylesheet" href="../Usuario/fontawesome-free-5.15.1-web/css/all.min.css">
    <link rel="stylesheet" href="../Usuario/css/estilos.css">
    <link rel="stylesheet" href="../Usuario/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Usuario/css/bootstrap.css">
    <link rel="icon" href="../Usuario/img/logo.jpeg" />
    <title>Tienda Axes</title>
  </head>
  <body>
    <div class="contenedor active" id="contenedor">
        <div class="carritoC"  data-pushbar-id="carrito" data-pushbar-direction="right">
           <i class="fas fa-times btn-cerrar" data-pushbar-close></i>
             <div class="tituloCarrito">Carrito de compras</div>
             <div  id="CartProductos">
          
            </div>
                <div class="iconoseparador">
                 <span ><i class="fas fa-arrow-down"></i></span>
                </div>
                <div  class="separadorLinea">
                  <hr>
                </div>
                  <div class="valores-compra">
                   <div class="contenido-valores">
                    <span>SubTotal:</span>
                    <span class="subt" id="subtotalC"></span>
                    
                   </div>
                   <div class="divtotal">
                  <label class="total" ><strong>Total:</strong></label> 
                  <label class="total" id="totalC"><strong></strong></label> 
                   </div>
                  <button class="btn btn-danger" id="DetalleC" type="submit">Detalle de compra</button>
                  </div>
        </div>
      
        <header class="header">
            <div class="contenedor-logo">
                <button id="boton-menu" class="boton-menu"><i class="fas fa-bars"></i></button>
                <a href="#" class="logo1"><img src="../Usuario/img/logo.jpeg" alt="" width="120"></a>
            </div>
          <div class="barra-busqueda">
                <input type="text" placeholder="Buscar">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>                   
            <div class="botones-header">
               <a class="carro"style="margin-top:17px;" data-pushbar-target="carrito"><i class="fas fa-shopping-cart"><label id="iconoTotal">1</label></i></a>

               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-user-circle"></i></button>
                
                <button><i class="fas fa-share-alt"></i></button>

            </div>
            
        </header>

        <nav class="menu-lateral">

            <a href="#" class="active"><i class="fas fa-home"></i>Inicio</a>
            <a href="#"><i class="fas fa-plus"></i>Nueva Colección</a>
            <a href="#"><i class="fas fa-tshirt"></i>Ropa</a>
            <a href="#"><i class="fas fa-socks"></i>Zapatos</a>
            <a href="#"><i class="fas fa-magic"></i>Accesorios</a>
        </nav>

        <main class="main">

         @yield('paginas')
        </main>
    </div>
  <!--$cursos = Curso::orderBy('id','desc')->paginate();-->

    <footer>
      <div class="container-footer-all">
        
        <div class="container-body">

            <div class="colum1">
                <h1>Pagos en línea Y Servicio a Domicilio</h1>

                <div class="row">
                  <a href="https://www.facebook.com/AXES-Skateboarding-100422468179966"><i id="visa" class="fab fa-cc-visa"></i>Tarjeta de crédito Visa</a>
               </div>

               <div class="row">
                <a href="https://www.instagram.com/axes_skateboarding/"><i id="master" class="fab fa-cc-mastercard"></i>Tarjeta de crédito Mastercard</a>

              </div>

              <div class="row">
                <a href="#"><i id="moto" class="fas fa-motorcycle"></i>Servicio Domiciliario</a>

              </div>

            </div>

            <div class="colum2">

                <h1>Redes Sociales</h1>

                <div class="row">
                   <a href="https://www.facebook.com/AXES-Skateboarding-100422468179966"><i id="face" class="fab fa-facebook-square"></i>Siguenos en Facebook</a>
                </div>
              
                <div class="row">
                  <a href="https://www.instagram.com/axes_skateboarding/"><i id="insta" class="fab fa-instagram"></i>Siguenos en Instagram</a>

                </div>
               
                <div class="row">
                  <a href="#"><i id="youtube" class="fab fa-youtube"></i>Siguenos en Youtube</a>

                </div>

            </div>

            <div class="colum3">

                <h1>Comunicate con Nosotros</h1>

                <div class="row2">
                  <a href="https://goo.gl/maps/PKVx2gtPWNgFgHYJ9"><i id="location" class="fas fa-search-location"></i>CC EL DIAMANTE</a>

                </div>

                <div class="row2">
                  <a href="#"><i id="tel" class="fas fa-phone-alt"></i>Llama al +57 3016729248</a>

                </div>

                <div class="row2">
                  <a href="#"><i id="correo" class="far fa-envelope"></i>tiendaxes@gmail.com</a>
                </div>

            </div>

        </div>
    
    </div>


    <div class="container-footer">
           <div class="footer">
                <div class="copyright">
                    © 2021 Todos los Derechos Reservados | <a href="#">AXES SKATEBOARDING</a>
                </div>

                <div class="information">
                    <a href="#">Información de la Empresa</a> | <a href="#">Privación y Política</a> | <a href="#">Términos y Condiciones</a>
                </div>
            </div>

        </div>
    </footer>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          
          <div class="login-box">
            <img src="../Usuario/img/logo.jpeg" class="avatar" alt="Avatar Image">
            <h1>INICIO DE SESIÓN</h1>
            <form action="" method="POST">

              <label for="username">Correo</label>
              <input type="text" placeholder="Ingrese su Correo">

              <label for="password">Contraseña</label>
              <input type="password" placeholder="Ingrese su Contraseña">

              <input type="submit" value="INGRESAR">

              <a href="#">¿Olvidaste tú Contraseña?</a><br>
              <a href="#" data-bs-toggle="modal" data-bs-target="#registro">¿No tienes una cuenta? Registrarte Aquí.</a>
            </form>
          </div>

      </div>
    </div>
    </div>


    <div class="modal fade" id="registro" tabindex="-1" aria-labelledby="registroLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          
          <div class="registro-box">
            <img src="../Usuario/img/logo.jpeg" class="avatar" alt="Avatar Image">
            <h1>REGISTRO</h1>
            <form action="" method="POST">

              <label for="username">Nombre</label>
              <input type="text" placeholder="Ingrese su Nombre">

              <label for="username">Apellido</label>
              <input type="text" placeholder="Ingrese su Apellido">

              <label for="username">Correo</label>
              <input type="text" placeholder="Ingrese su Correo">

              <label for="username">Dirección</label>
              <input type="text" placeholder="Ingrese su Dirección">

              <label for="password">Contraseña</label>
              <input type="password" placeholder="Ingrese su Contraseña">
              
              <input type="submit" value="REGISTRARSE">

            </form>
          </div>

      </div>
    </div>
    </div>

<script src="../Usuario/js/main.js"></script>
<script src="../Usuario/js/cart.js"></script>
<script src="../Usuario/js/detailsCart.js"></script>
<script src="../Usuario/js/bootstrap.min.js"></script>
<script src="../Usuario/pushbar/js/pushbar.js"></script>    
<script>
    let pushbar= new Pushbar({
     blur:true,
     overlay:true
    });
</script>
 <script src="../Usuario/js/jquery-1.8.3.min.js"></script>
 <script src="../Usuario/js/jquery.zoom.js"></script>

  </body>
</html>