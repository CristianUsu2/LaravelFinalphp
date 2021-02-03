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
                    <span>Envío:</span>
                    <span class="envio" id="envioC">$5000</span>
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
                <a href="#" class="logo"><img src="../Usuario/img/logo.jpeg" alt="" width="120"></a>
            </div>
          <div class="barra-busqueda">
                <input type="text" placeholder="Buscar">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>                   
            <div class="botones-header">
              <span class="badge badge-light iconoTotal" id="iconoTotal"></span>
               <button data-pushbar-target="carrito"><i class="fas fa-shopping-cart"></i>
               </button>

               <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-circle"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item" href="/Productos/login">Iniciar Sesión</a></li>
                </ul>
              </div>

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
                <h1>Paga en línea o en Efectivo Y Servicio a Domicilio</h1>

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


<script src="../Usuario/js/main.js"></script>
<script src="../Usuario/js/cart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="../Usuario/js/bootstrap.min.js"></script>
<script src="../Usuario/pushbar/js/pushbar.js"></script>    
<script>
    let pushbar= new Pushbar({
     blur:true,
     overlay:true
    });
</script>
 <script src="../Usuario/js/jquery-1.8.3.min.js"></script>
 <script src="../Usuario/js/jquery.elevatezoom.js"></script>
 <script>
   $("#imgdet").elevateZoom({
      zoomType: "inner",
      cursor: "crosshair",
      zoomWindowFadeIn: 500,
      zoomWindowFadeOut: 750
   }
   );
 </script>
  </body>
</html>