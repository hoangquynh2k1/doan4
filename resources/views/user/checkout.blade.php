@extends('_layout_user1')
@section('content')
    <!-- checkout area start -->
    <div class="checkout-area pt-100px pb-100px" ng-controller="cartcontroller">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="billing-info-wrap">
                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="billing-info mb-4">
                                    <label>Họ tên</label>
                                    <input type="text"ng-model="kh.full_name" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-4">
                                    <label>Địa chỉ</label>
                                    <input class="billing-address" ng-change="" placeholder="Địa chỉ nhà" type="text"
                                        ng-model="kh.address" />
                                </div>
                            </div>
                            {{-- <div class="col-lg-12">
                                <div class="billing-info mb-4">
                                    <label>Town / City</label>
                                    <input type="text" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>State / County</label>
                                    <input type="text" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>Postcode / ZIP</label>
                                    <input type="text" />
                                </div>
                            </div> --}}
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>Số điện thoại</label>
                                    <input type="text" ng-model="kh.phone" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>Địa chỉ Email</label>
                                    <input type="text" ng-model="kh.email" />
                                </div>
                            </div>
                        </div>
                        <div class="additional-info-wrap">
                            <h4>Thông tin thêm</h4>
                            <div class="additional-info">
                                <label>Ghi chú đơn hàng</label>
                                <textarea placeholder="" name="message"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-md-30px mt-lm-30px ">
                    <div class="your-order-area">
                        <h3>Đơn hàng của bạn</h3>
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-product-info">
                                <div class="your-order-top">
                                    <ul>
                                        <li>Sản phẩm</li>
                                        <li>Tổng</li>
                                    </ul>
                                </div>
                                <div class="your-order-middle">
                                    <ul>
                                        
                                        <li ng-repeat=" i in ct">
                                            <span type="text" hidden='true'>@{{ laysp(i.idSP) }}</span>
                                            <span class="order-middle-left">@{{ tenSP2() }} X
                                                @{{ i.soLuong }}</span>
                                            <span class="order-price">@{{i.giaBan}}</span>
                                        </li>
                                        <span hidden='true' id="total1">@{{sumprice() |number}}đ</span>
                                    </ul>
                                </div>
                                <div class="your-order-bottom">
                                    <ul>
                                        <li class="your-order-shipping">Vận chuyển</li>
                                        <li>Miễn Phí</li>
                                    </ul>
                                </div>
                                <div class="your-order-total">
                                    <ul>
                                        <li class="order-total">Tổng</li>
                                        <li>@{{Sum2()|number}}đ</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="payment-method">
                                <div class="payment-accordion element-mrg">
                                    <div id="faq" class="panel-group">
                                        <div class="panel panel-default single-my-account m-0">
                                            <div class="panel-heading my-account-title">
                                                <h4 class="panel-title"><a data-bs-toggle="collapse" href="#my-account-1"
                                                        class="collapsed" aria-expanded="true">Chuyển khoản qua ngân
                                                        hàng</a>
                                                </h4>
                                            </div>
                                            <div id="my-account-1" class="panel-collapse collapse show"
                                                data-bs-parent="#faq">
                                                <div class="panel-body">
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default single-my-account m-0">
                                            <div class="panel-heading my-account-title">
                                                <h4 class="panel-title"><a data-bs-toggle="collapse" href="#my-account-2"
                                                        aria-expanded="false" class="collapsed">Thanh toán qua ví điện
                                                        tử</a></h4>
                                            </div>
                                            <div id="my-account-2" class="panel-collapse collapse" data-bs-parent="#faq">
                                                <div class="panel-body">
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default single-my-account m-0">
                                            <div class="panel-heading my-account-title">
                                                <h4 class="panel-title"><a data-bs-toggle="collapse"
                                                        href="#my-account-3">Thanh toán khi nhận hàng</a></h4>
                                            </div>
                                            <div id="my-account-3" class="panel-collapse collapse" data-bs-parent="#faq">
                                                <div class="panel-body">
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Place-order mt-25">
                            <a class="btn-hover" ng-click="Order()" href="#">Đặt hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout area end -->
@stop
