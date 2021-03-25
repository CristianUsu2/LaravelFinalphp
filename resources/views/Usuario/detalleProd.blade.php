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
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-refresh"></i>compare</a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o"></i>wishlist</a>
                                        </div>
                                        <div class="share-icon mt-20">
                                            <a class="facebook" href="#"><i class="fa fa-facebook"></i>like</a>
                                            <a class="twitter" href="#"><i class="fa fa-twitter"></i>tweet</a>
                                            <a class="pinterest" href="#"><i class="fa fa-pinterest"></i>save</a>
                                            <a class="google" href="#"><i class="fa fa-google-plus"></i>share</a>
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

                    <!-- sidebar start -->
                    <div class="col-lg-3">
                        <div class="shop-sidebar-wrap fix mt-md-22 mt-sm-22">
                            <!-- featured category start -->
                            <div class="sidebar-widget mb-22">
                                <div class="section-title-2 d-flex justify-content-between mb-28">
                                    <h3>featured</h3>
                                    <div class="category-append"></div>
                                </div> <!-- section title end -->
                                <div class="category-carousel-active row" data-row="4">
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-img1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-img2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-img3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-img4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-img5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-img6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">Virtual Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-img10.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">simple Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $150.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.html">
                                                    <img src="assets/img/product/product-img12.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html">external Product 01</a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                        $140.00
                                                    </div>
                                                    <div class="old-price">
                                                        <del>$160.00</del>
                                                    </div>
                                                </div>
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
                                            </div>
                                        </div> <!-- end single item -->
                                    </div> <!-- end single item column -->
                                </div>
                            </div>
                            <!-- featured category end -->

                            <!-- manufacturer start -->
                            <div class="sidebar-widget mb-22">
                                <div class="sidebar-title mb-10">
                                    <h3>Manufacturers</h3>
                                </div>
                                <div class="sidebar-widget-body">
                                    <ul>
                                        <li><i class="fa fa-angle-right"></i><a href="#">calvin klein</a><span>(10)</span></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#">diesel</a><span>(12)</span></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#">polo</a><span>(20)</span></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#">Tommy Hilfiger</a><span>(12)</span></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#">Versace</a><span>(16)</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- manufacturer end -->

                            <!-- product tag start -->
                            <div class="sidebar-widget mb-22">
                                <div class="sidebar-title mb-20">
                                    <h3>tag</h3>
                                </div>
                                <div class="sidebar-widget-body">
                                    <div class="product-tag">
                                        <a href="#">camera</a>
                                        <a href="#">computer</a>
                                        <a href="#">tablet</a>
                                        <a href="#">watch</a>
                                        <a href="#">smart phones</a>
                                        <a href="#">handbag</a>
                                        <a href="#">shoe</a>
                                        <a href="#">men</a>
                                    </div>
                                </div>
                            </div>
                            <!-- product tag end -->

                            <!-- sidebar banner start -->
                            <div class="sidebar-widget mb-22">
                                <div class="img-container fix img-full mt-30">
                                    <a href="#"><img src="assets/img/banner/banner_shop.jpg" alt=""></a>
                                </div>
                            </div>
                            <!-- sidebar banner end -->
                        </div>
                    </div>
                    <!-- sidebar end -->
                </div>
            </div>
        </div>

@endsection