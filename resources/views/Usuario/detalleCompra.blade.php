@extends('Layout.plantillaU')
@section('paginas')
<div class="cart-main-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Cart Table Area -->
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="pro-thumbnail">Thumbnail</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">Quantity</th>
                                    <th class="pro-subtotal">Total</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/img/product/product-img2.jpg"
                                                                                alt="Product"/></a></td>
                                    <td class="pro-title"><a href="#">k2 snowboard 2018</a></td>
                                    <td class="pro-price"><span>$295.00</span></td>
                                    <td class="pro-quantity">
                                        <div class="pro-qty"><input type="text" value="1"></div>
                                    </td>
                                    <td class="pro-subtotal"><span>$295.00</span></td>
                                    <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/img/product/product-img3.jpg"
                                                                                alt="Product"/></a></td>
                                    <td class="pro-title"><a href="#">Aquet Drone D 420</a></td>
                                    <td class="pro-price"><span>$275.00</span></td>
                                    <td class="pro-quantity">
                                        <div class="pro-qty"><input type="text" value="2"></div>
                                    </td>
                                    <td class="pro-subtotal"><span>$550.00</span></td>
                                    <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/img/product/product-img4.jpg" alt="Product"/></a></td>
                                    <td class="pro-title"><a href="#">berzerker snowboard</a></td>
                                    <td class="pro-price"><span>$295.00</span></td>
                                    <td class="pro-quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1" />
                                        </div>
                                    </td>
                                    <td class="pro-subtotal"><span>$295.00</span></td>
                                    <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/img/product/product-img5.jpg"
                                                                                alt="Product"/></a></td>
                                    <td class="pro-title"><a href="#">element snowboard</a></td>
                                    <td class="pro-price"><span>$110.00</span></td>
                                    <td class="pro-quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="3" />
                                        </div>
                                    </td>
                                    <td class="pro-subtotal"><span>$110.00</span></td>
                                    <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
        
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-lg-5 ml-auto">
                        <!-- Cart Calculation Area -->
                        <div class="cart-calculator-wrapper">
                            <div class="cart-calculate-items">
                                <h3>Cart Totals</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <td>Sub Total</td>
                                            <td>$230</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping</td>
                                            <td>$70</td>
                                        </tr>
                                        <tr class="total">
                                            <td>Total</td>
                                            <td class="total-amount">$300</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <a href="{{url('/Productos/finalizarCompra')}}" class="sqr-btn d-block">Proceder a pagar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection