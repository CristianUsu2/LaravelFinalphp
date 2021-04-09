@extends('Layout.plantillaU')
@section('paginas')

<div class="product-details-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <!-- product details inner end -->
                        <div class="product-details-inner">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="product-large-slider mb-20 slick-arrow-style_2">
                                        <div class="pro-large-img img-zoom" id="img1">
                                            <img src="../Usuario/img/product-details-img1.jpg" alt="" />
                                        </div>
                                        <div class="pro-large-img img-zoom" id="img2">
                                            <img src="../Usuario/img/product-details-img2.jpg" alt=""/>
                                        </div>
                                        <div class="pro-large-img img-zoom" id="img3">
                                            <img src="../Usuario/img/product-details-img3.jpg" alt=""/>
                                        </div>
                                        <div class="pro-large-img img-zoom" id="img4">
                                            <img src="../Usuario/img/product-details-img4.jpg" alt=""/>
                                        </div>
                                    </div>
                                    <div class="pro-nav slick-padding2 slick-arrow-style_2">
                                        <div class="pro-nav-thumb"><img src="../Usuario/img/product-details-img1.jpg" alt="" /></div>
                                        <div class="pro-nav-thumb"><img src="../Usuario/img/product-details-img2.jpg" alt="" /></div>
                                        <div class="pro-nav-thumb"><img src="../Usuario/img/product-details-img3.jpg" alt="" /></div>
                                        <div class="pro-nav-thumb"><img src="../Usuario/img/product-details-img4.jpg" alt="" /></div>
                                        <div class="pro-nav-thumb"><img src="../Usuario/img/product-details-img2.jpg" alt="" /></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
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
                                        <div class="customer-rev">
                                            <a href="#">(1 customer review)</a>
                                        </div>
                                        <div class="availability mt-10">
                                            <h5>Availability:</h5>
                                            <span>1 in stock</span>
                                        </div>
                                        <div class="pricebox">
                                            <span class="regular-price">$160.00</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<br>
                                        Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                                        <div class="quantity-cart-box d-flex align-items-center">
                                            <div class="quantity">
                                                <div class="pro-qty"><input type="text" value="1"></div>
                                            </div>
                                            <div class="action_link">
                                                <a class="buy-btn" href="#">add to cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="useful-links mt-20">
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product details inner end -->

                        <!-- product details reviews start -->
                        <div class="product-details-reviews mt-34">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="product-review-info">
                                        <ul class="nav review-tab">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#tab_one">description</a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tab_two">information</a>
                                            </li>
                                         
                                        </ul>
                                        <div class="tab-content reviews-tab">
                                            <div class="tab-pane fade show active" id="tab_one">
                                                <div class="tab-one">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque.</p>
                                                    <div class="review-description">
                                                        <div class="tab-thumb">
                                                            <img src="assets/img/about/services.jpg" alt="">
                                                        </div>
                                                        <div class="tab-des mt-sm-24">
                                                            <h3>Product Information :</h3>
                                                            <ul>
                                                                <li>Donec non est at libero vulputate rutrum.</li>
                                                                <li>Morbi ornare lectus quis justo gravida semper.</li>
                                                                <li>Pellentesque aliquet, sem eget laoreet ultrices</li>
                                                                <li>Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla</li>
                                                                <li>Donec a neque libero.</li>
                                                                <li>Pellentesque aliquet, sem eget laoreet ultrices</li>
                                                                <li>Morbi ornare lectus quis justo gravida semper.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <p>Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue. Nunc facilisis sagittis ullamcorper.</p>
                                                    <p>Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt.</p>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab_two">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td>color</td>
                                                            <td>black, blue, red</td>
                                                        </tr>
                                                        <tr>
                                                            <td>size</td>
                                                            <td>L, M, S</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!-- product details reviews end --> 

                        <!-- related products area start -->
                      
                        <!-- related products area end -->
                    </div>

                  
                    <!-- sidebar end -->
                </div>
            </div>
        </div>

@endsection