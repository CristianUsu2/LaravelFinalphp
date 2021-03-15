<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Usuario/pushbar/css/pushbar.css">
    <link rel="stylesheet" href="../Usuario/fontawesome-free-5.15.1-web/css/all.min.css">
    <link rel="stylesheet" href="../Usuario/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Usuario/css/bootstrap.css">
    <link rel="stylesheet" href="../Usuario/css/helper.min.css">
    <link rel="stylesheet" href="../Usuario/css/plugins.css">
    <link rel="stylesheet" href="../Usuario/css/style.css">
    <link rel="stylesheet" href="../Usuario/css/skin-default.css">

    <link rel="icon" href="../Usuario/img/logo.jpeg" />
    <title>Tienda Axes</title>
  </head>
  <body>

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

      <div class="wrapper">

        <!-- header area start -->
        <header>

            <!-- header top start -->
            <div class="header-top-area bg-gray text-center text-md-left">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-5">
                            <div class="header-call-action">
                                <a href="#">
                                    <i class="fa fa-envelope"></i>
                                    axesskateboarding@gmail.com
                                </a>
                                <a href="#">
                                    <i class="fa fa-phone"></i>
                                    +57 301 6729248
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="header-top-right float-md-right float-none">
                                <nav>
                                    <ul>
                                        <li>
                                            <div class="dropdown header-top-dropdown">
                                                <a class="dropdown-toggle" id="myaccount" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Mi Cuenta
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="myaccount">
                                                    <a class="dropdown-item" href="login-register.html">Iniciar Sesión</a>
                                                    <a class="dropdown-item" href="login-register.html">Registro</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">Carrito</a>
                                        </li>
                                        <li>
                                            <a href="#">checkout</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>

            <div class="header-middle-area pt-20 pb-20">
              <div class="container">
                  <div class="row align-items-center">
                      <div class="col-lg-3">
                          <div class="brand-logo">
                              <a href="index.html">
                                  <img src="../Usuario/img/logo.jpeg" alt="brand logo">
                              </a>
                          </div>
                      </div> <!-- end logo area -->
                      <div class="col-lg-9">
                          <div class="header-middle-right">
                              <div class="header-middle-shipping mb-20">
                                  <div class="single-block-shipping">
                                      <div class="shipping-icon">
                                          <i class="far fa-clock"></i>
                                      </div>
                                      <div class="shipping-content">
                                          <h5>Horario de Trabajo</h5>
                                          <span>Lunes - Domingo: 8:00 A.M - 7:00 P.M</span>
                                      </div>
                                  </div> <!-- end single shipping -->
                                  <div class="single-block-shipping">
                                      <div class="shipping-icon">
                                          <i class="fa fa-truck"></i>
                                      </div>
                                      <div class="shipping-content">
                                          <h5>Costo del Envío</h5>
                                          <span>El valor del envío es de $6.000 COP</span>
                                      </div>
                                  </div> <!-- end single shipping -->
                                  <div class="single-block-shipping">
                                      <div class="shipping-icon">
                                          <i class="far fa-money-bill-alt"></i>
                                      </div>
                                      <div class="shipping-content">
                                          <h5>Descuentos</h5>
                                          <span>Se hacen de forma constante</span>
                                      </div>
                                  </div> <!-- end single shipping -->
                              </div>
                              <div class="header-middle-block">
                                  <div class="header-middle-searchbox">
                                      <input type="text" placeholder="Buscar Producto...">
                                      <button class="search-btn"><i class="fa fa-search"></i></button>
                                  </div>
                                  <div class="header-mini-cart">
                                      <div class="mini-cart-btn">
                                          <i class="fa fa-shopping-cart"></i>
                                          <span class="cart-notification">2</span>
                                      </div>
                                      <div class="cart-total-price">
                                          <span>total</span>
                                          $50.00
                                      </div>
                                      <ul class="cart-list">
                                          <li>
                                              <div class="cart-img">
                                                  <a href="product-details.html"><img src="assets/img/cart/cart-1.jpg"
                                                          alt=""></a>
                                              </div>
                                              <div class="cart-info">
                                                  <h4><a href="product-details.html">simple product 09</a></h4>
                                                  <span>$60.00</span>
                                              </div>
                                              <div class="del-icon">
                                                  <i class="fa fa-times"></i>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="cart-img">
                                                  <a href="product-details.html"><img src="assets/img/cart/cart-2.jpg"
                                                          alt=""></a>
                                              </div>
                                              <div class="cart-info">
                                                  <h4><a href="product-details.html">virtual product 10</a></h4>
                                                  <span>$50.00</span>
                                              </div>
                                              <div class="del-icon">
                                                  <i class="fa fa-times"></i>
                                              </div>
                                          </li>
                                          <li class="mini-cart-price">
                                              <span class="subtotal">subtotal : </span>
                                              <span class="subtotal-price">$88.66</span>
                                          </li>
                                          <li class="checkout-btn">
                                              <a href="#">checkout</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="main-header-wrapper bdr-bottom1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-header-inner">
                            <div class="category-toggle-wrap">
                                <div class="category-toggle">
                                    Categorias
                                    <div class="cat-icon">
                                        <i class="fa fa-angle-down"></i>
                                    </div>
                                </div>
                                <nav class="category-menu hm-1">
                                    <ul>
                                        <li><a href="shop-grid-left-sidebar.html"><i class="fas fa-shoe-prints"></i>
                                            Zapatos</a></li>
                                                                              
                                        <li><a href="shop-grid-left-sidebar.html"><i class="fas fa-suitcase-rolling"></i>
                                               Bolsos</a></li>
                                        <li><a href="shop-grid-left-sidebar.html"><i class="fas fa-graduation-cap"></i>
                                                Gorras</a></li>
                                        <li><a href="shop-grid-left-sidebar.html"><i class="fa fa-tshirt"></i>
                                                Camisas</a></li>
                                       
                                    </ul>
                                </nav>
                            </div>
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="active"><a href="/"><i class="fa fa-home"></i>Inicio</a>
                                            
                                        </li>
                                       
                                        <li><a href="#">shop <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="#">shop grid layout <i class="fa fa-angle-right"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop-grid-left-sidebar.html">shop grid left
                                                                sidebar</a></li>
                                                        <li><a href="shop-grid-left-sidebar-3-col.html">left
                                                                sidebar 3 col</a></li>
                                                        <li><a href="shop-grid-right-sidebar.html">shop grid right
                                                                sidebar</a></li>
                                                        <li><a href="shop-grid-right-sidebar-3-col.html">grid right
                                                                sidebar 3 col</a></li>
                                                        <li><a href="shop-grid-full-3-col.html">shop grid full 3
                                                                column</a></li>
                                                        <li><a href="shop-grid-full-4-col.html">shop grid full 4
                                                                column</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">shop list layout <i class="fa fa-angle-right"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop-list-left-sidebar.html">shop list left
                                                                sidebar</a></li>
                                                        <li><a href="shop-list-right-sidebar.html">shop list right
                                                                sidebar</a></li>
                                                        <li><a href="shop-list-full.html">shop list full width</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">products details <i class="fa fa-angle-right"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="product-details.html">product details</a></li>
                                                        <li><a href="product-details-affiliate.html">product
                                                                details
                                                                affiliate</a></li>
                                                        <li><a href="product-details-variable.html">product details
                                                                variable</a></li>
                                                        <li><a href="product-details-group.html">product details
                                                                group</a></li>
                                                        <li><a href="product-details-box.html">product details box
                                                                slider</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-block d-lg-none">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main menu area end -->

    </header>


    <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="slider-wrapper-area">
                  <div class="hero-slider-active hero__1 slick-dot-style hero-dot">
                      <div class="single-slider" style="background-image: url(../Usuario/img/slider11_bg.jpg);">
                          <div class="container p-0">
                              <div class="slider-main-content">
                                  <div class="slider-content-img">
                                      <img src="../Usuario/img/slider11_lable1.png" alt="">
                                      <img src="../Usuario/img/slider11_lable2.png" alt="">
                                      <img src="../Usuario/img/slider11_lable3.png" alt="">
                                  </div>
                                  <div class="slider-text">
                                      <div class="slider-label">
                                          <img src="../Usuario/img/slider11_lable4.png" alt="">
                                      </div>
                                      <h1>headphones az12</h1>
                                      <p>Typi Non Habent Claritatem Insitam; Est Usus Legentis</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="single-slider" style="background-image: url(../Usuario/img/slider12_bg.jpg);">
                          <div class="container p-0">
                              <div class="slider-main-content">
                                  <div class="slider-content-img">
                                      <img src="../Usuario/img/slider11_lable1.png" alt="">
                                      <img src="../Usuario/img/slider11_lable2.png" alt="">
                                      <img src="../Usuario/img/slider11_lable3.png" alt="">
                                  </div>
                                  <div class="slider-text">
                                      <div class="slider-label">
                                          <img src="assets/img/slider/slider11_lable4.png" alt="">
                                      </div>
                                      <h1>samson s90</h1>
                                      <p>Typi Non Habent Claritatem Insitam; Est Usus Legentis</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
  <div class="banner-area mt-30">
      <div class="container">
          <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-6 order-1">
                  <div class="img-container img-full fix imgs-res mb-sm-30">
                      <a href="#">
                          <img src="../Usuario/img/banner_left.jpg" alt="">
                      </a>
                  </div>
              </div>
              <div class="col-lg-5 col-md-5 order-sm-3">
                  <div class="img-container img-full fix mb-30">
                      <a href="#">
                          <img src="../Usuario/img/banner_static_top1.jpg" alt="">
                      </a>
                  </div>
                  <div class="img-container img-full fix mb-30">
                      <a href="#">
                          <img src="../Usuario/img/banner_static_top2.jpg" alt="">
                      </a>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 order-2 order-md-3">
                  <div class="img-container img-full fix">
                      <a href="#">
                          <img src="../Usuario/img/banner_static_top3.jpg" alt="">
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </div>

        <main class="main">

         @yield('paginas')
        </main>
  <footer>

    <!-- footer main start -->
    <div class="footer-widget-area pt-40 pb-38 pb-sm-10">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget mb-sm-30">
                        <div class="widget-title mb-10 mb-sm-6">
                            <h4>contact us</h4>
                        </div>
                        <div class="widget-body">
                            <ul class="location">
                                <li><i class="fa fa-envelope"></i>support@galio.com</li>
                                <li><i class="fa fa-phone"></i>(800) 0123 456 789</li>
                                <li><i class="fa fa-map-marker"></i>Address: 1234 - Bandit Tringi Aliquam
                                    Vitae. New York</li>
                            </ul>
                            <a class="map-btn" href="contact-us.html">open in google map</a>
                        </div>
                    </div> <!-- single widget end -->
                </div> <!-- single widget column end -->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget mb-sm-30">
                        <div class="widget-title mb-10 mb-sm-6">
                            <h4>my account</h4>
                        </div>
                        <div class="widget-body">
                            <ul>
                                <li><a href="#">my account</a></li>
                                <li><a href="#">my cart</a></li>
                                <li><a href="#">checkout</a></li>
                                <li><a href="#">my wishlist</a></li>
                                <li><a href="#">login</a></li>
                            </ul>
                        </div>
                    </div> <!-- single widget end -->
                </div> <!-- single widget column end -->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget mb-sm-30">
                        <div class="widget-title mb-10 mb-sm-6">
                            <h4>short code</h4>
                        </div>
                        <div class="widget-body">
                            <ul>
                                <li><a href="#">gallery</a></li>
                                <li><a href="#">accordion</a></li>
                                <li><a href="#">carousel</a></li>
                                <li><a href="#">map</a></li>
                                <li><a href="#">tab</a></li>
                            </ul>
                        </div>
                    </div> <!-- single widget end -->
                </div> <!-- single widget column end -->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget mb-sm-30">
                        <div class="widget-title mb-10 mb-sm-6">
                            <h4>product tags</h4>
                        </div>
                        <div class="widget-body">
                            <ul>
                                <li><a href="#">computer</a></li>
                                <li><a href="#">camera</a></li>
                                <li><a href="#">smart phone</a></li>
                                <li><a href="#">watch</a></li>
                                <li><a href="#">tablet</a></li>
                            </ul>
                        </div>
                    </div> <!-- single widget end -->
                </div> <!-- single widget column end -->
            </div>
        </div>
    </div>
    <!-- footer main end -->

    <!-- footer bootom start -->
    <div class="footer-bottom-area bg-gray pt-20 pb-20">
        <div class="container">
            <div class="footer-bottom-wrap">
                <div class="copyright-text">
                    <p><strong> AXES SKATEBOARDING</strong></p>
                </div>
                <div class="payment-method-img">
                    <img src="../Usuario/img/payment.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- footer bootom end -->

</footer>
<!-- footer area end -->

<div class="modal" id="quick_view">
  <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
              <!-- product details inner end -->
              <div class="product-details-inner">
                  <div class="row">
                      <div class="col-lg-5">
                          <div class="product-large-slider slick-arrow-style_2 mb-20">
                              <div class="pro-large-img">
                                  <img src="../Usuario/img/product-details-img1.jpg" alt="" />
                              </div>
                              <div class="pro-large-img">
                                  <img src="../Usuario/img/product-details-img2.jpg" alt="" />
                              </div>
                              <div class="pro-large-img">
                                  <img src="../Usuario/img/product-details-img3.jpg" alt="" />
                              </div>
                              <div class="pro-large-img">
                                  <img src="../Usuario/img/product-details-img4.jpg" alt="" />
                              </div>
                              <div class="pro-large-img">
                                  <img src="../Usuario/img/product-details-img5.jpg" alt="" />
                              </div>
                          </div>
                          <div class="pro-nav slick-padding2 slick-arrow-style_2">
                              <div class="pro-nav-thumb"><img src="../Usuario/img/product-details-img1.jpg"
                                      alt="" /></div>
                              <div class="pro-nav-thumb"><img src="../Usuario/img/product-details-img2.jpg"
                                      alt="" /></div>
                              <div class="pro-nav-thumb"><img src="../Usuario/img/product-details-img3.jpg"
                                      alt="" /></div>
                              <div class="pro-nav-thumb"><img src="../Usuario/img/product-details-img4.jpg"
                                      alt="" /></div>
                              <div class="pro-nav-thumb"><img src="../Usuario/img/product-details-img5.jpg"
                                      alt="" /></div>
                          </div>
                      </div>
                      <div class="col-lg-7">
                          <div class="product-details-des mt-md-34 mt-sm-34">
                              <h3><a href="product-details.html">external product 12</a></h3>
                              <div class="ratings">
                                  <span class="good"><i class="fa fa-star"></i></span>
                                  <span class="good"><i class="fa fa-star"></i></span>
                                  <span class="good"><i class="fa fa-star"></i></span>
                                  <span class="good"><i class="fa fa-star"></i></span>
                                  <span><i class="fa fa-star"></i></span>
                                  <div class="pro-review">
                                      <span>1 review(s)</span>
                                  </div>
                              </div>
                              <div class="availability mt-10">
                                  <h5>Availability:</h5>
                                  <span>1 in stock</span>
                              </div>
                              <div class="pricebox">
                                  <span class="regular-price">$160.00</span>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                  tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<br>
                                  Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea
                                  dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris
                                  consequat nisi ut mauris efficitur lacinia.</p>
                              <div class="quantity-cart-box d-flex align-items-center mt-20">
                                  <div class="quantity">
                                      <div class="pro-qty"><input type="text" value="1"></div>
                                  </div>
                                  <div class="action_link">
                                      <a class="buy-btn" href="#">add to cart<i class="fa fa-shopping-cart"></i>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- product details inner end -->
          </div>
      </div>
  </div>
</div>
<!-- Quick view modal end -->

<!-- Scroll to top start -->
<div class="scroll-top not-visible">
  <i class="fa fa-angle-up"></i>
</div>

<script src="../Usuario/js/modernizr-3.6.0.min.js"></script>
<script src="../Usuario/js/jquery-3.3.1.min.js"></script>

<script src="../Usuario/js/bootstrap.min.js"></script>

    <script src="../Usuario/js/plugins.js"></script>
    <script src="../Usuario/js/ajax-mail.js"></script>
    <script src="../Usuario/js/validar.js"></script>

<script src="../Usuario/js/main.js"></script>

<script src="../Usuario/js/detailsCart.js"></script>
<script src="../Usuario/js/finishBuy.js"></script>
<script src="../Usuario/pushbar/js/pushbar.js"></script>    
<script>
    let pushbar= new Pushbar({
     blur:true,
     overlay:true
    });
</script>
 <script src="../Usuario/js/jquery-1.8.3.min.js"></script>
 <script src="../Usuario/js/jquery.zoom.js"></script>

 <script>
   $('#ex1').zoom();
 </script>
 <script src="../Usuario/js/chat.js"></script>

  </body>
</html>