@extends('Layout.plantillaU')
@section('paginas')
<h3 class="inicio">INICIO</h3>
    <div id="contenedor_carga">
        <div id="carga"></div>
    </div>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <iframe class="video" src="../Usuario/img/video.mp4" width="1000" height="480"></iframe>
                   
                  </div>
                 
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </a>
              </div>

            <h3 class="titulo">Nuestros Productos</h3>
            <pre>{{Auth::user()}}</pre>
              <div class="grid-videos">
            <div class="container">
              <div class="row" id="productos">
                  <div class="col-md-3 col-sm-6">
                      <div class="product-grid4" id="producto">
                          <div class="product-image4">
                              <a href="#">
                                  <img id="img" class="pic-1" src="../Usuario/img/foto1.jpg">

                              </a>
                              <ul class="social">
                                  <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                  <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                  <li data-pushbar-target="carrito"><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                              </ul>
                              <span class="product-new-label">Nuevo</span>
                              <span class="product-discount-label">-10%</span>
                          </div>
                          <div class="product-content">
                               <input type="hidden" id="idproducto" value="1"/>
                               <input type="hidden" id="tallap" value="M"/>
                              <h3 class="title"><a id="nombrep" href="#">Women's Black Top</a></h3>
                              <div class="price">
                                  $14.40
                                  <span id="preciop">$16.00</span>
                              </div>
                              <a class="add-to-cart" href="/Productos/detalleProducto">Ver detalle</></a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                      <div class="product-grid4" id="producto">
                          <input type="hidden" id="idproducto" value="2"/>
                      <input type="hidden" id="tallap" value="L"/>
                          <div class="product-image4">
                              <a href="#">
                                  <img class="pic-1" id="imgp" src="../Usuario/img/foto2.jpg">

                              </a>
                              <ul class="social">
                                  <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                  <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                  <li data-pushbar-target="carrito"><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                              </ul>
                              <span class="product-discount-label">-12%</span>
                          </div>
                          <div class="product-content">
                              <h3 class="title" id="nombrep"><a href="#">Men's Blue Shirt</a></h3>
                              <div class="price">
                                  $17.60
                                  <span id="preciop">$20.00</span>
                              </div>
                              <a  data-pushbar-target="carrito" id="añadir"  class="add-to-cart" >AÑADIR AL CARRITO2</></a>

                          </div>
                      </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                      <div class="product-grid4" id="producto">
                          <input type="hidden" id="idproducto" value="3"/>
                      <input type="hidden" id="tallap" value="s"/>
                          <div class="product-image4">
                              <a href="#">
                                  <img id="img" class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-5.jpg">
                              </a>
                              <ul class="social">
                                  <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                  <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                  <li data-pushbar-target="carrito"><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                              </ul>
                              <span class="product-new-label">Nuevo</span>
                              <span class="product-discount-label">-10%</span>
                          </div>
                          <div class="product-content">
                              <h3 class="title" id="nombrep"><a href="#">Women's Black Top</a></h3>
                              <div class="price">
                                  $14.40
                                  <span id="preciop">$16.00</span>
                              </div>
                              <a data-pushbar-target="carrito" id="añadir"  class="add-to-cart" href="">AÑADIR AL CARRITO</></a>

                          </div>
                      </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                      <div class="product-grid4">
                          <div class="product-image4">
                              <a href="#">
                                  <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-7.jpg">

                              </a>
                              <ul class="social">
                                  <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                  <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                  <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                              </ul>
                              <span class="product-new-label">Nuevo</span>
                              <span class="product-discount-label">-10%</span>
                          </div>
                          <div class="product-content">
                              <h3 class="title"><a href="#">Women's Black Top</a></h3>
                              <div class="price">
                                  $14.40
                                  <span>$16.00</span>
                              </div>
                              <a class="add-to-cart" href="">AÑADIR AL CARRITO</></a>

                          </div>
                      </div>
                  </div>


                  <div class="col-md-3 col-sm-6">
                    <div class="product-grid4">
                        <div class="product-image4">
                            <a href="#">
                                <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-7.jpg">

                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <span class="product-new-label">Nuevo</span>
                            <span class="product-discount-label">-10%</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Women's Black Top</a></h3>
                            <div class="price">
                                $14.40
                                <span>$16.00</span>
                            </div>
                            <a  class="add-to-cart" href="">AÑADIR AL CARRITO</></a>

                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6">
                  <div class="product-grid4">
                      <div class="product-image4">
                          <a href="#">
                              <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-5.jpg">

                          </a>
                          <ul class="social">
                              <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                              <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                              <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                          <span class="product-new-label">Nuevo</span>
                          <span class="product-discount-label">-10%</span>
                      </div>
                      <div class="product-content">
                          <h3 class="title"><a href="#">Women's Black Top</a></h3>
                          <div class="price">
                              $14.40
                              <span>$16.00</span>
                          </div>
                          <a class="add-to-cart" href="">AÑADIR AL CARRITO</></a>

                      </div>
                  </div>
              </div>


              <div class="col-md-3 col-sm-6">
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-7.jpg">

                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-new-label">Nuevo</span>
                        <span class="product-discount-label">-10%</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Women's Black Top</a></h3>
                        <div class="price">
                            $14.40
                            <span>$16.00</span>
                        </div>
                        <a class="add-to-cart" href="">AÑADIR AL CARRITO</></a>

                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6">
              <div class="product-grid4">
                  <div class="product-image4">
                      <a href="#">
                          <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-8.jpg">

                      </a>
                      <ul class="social">
                          <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                          <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                          <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                      </ul>
                      <span class="product-new-label">Nuevo</span>
                      <span class="product-discount-label">-10%</span>
                  </div>
                  <div class="product-content">
                      <h3 class="title"><a href="#">Women's Black Top</a></h3>
                      <div class="price">
                          $14.40
                          <span>$16.00</span>
                      </div>
                      <a class="add-to-cart" href="">AÑADIR AL CARRITO</></a>

                  </div>
              </div>
          </div>




              </div>
          </div>
                
        </div>

         
@endsection