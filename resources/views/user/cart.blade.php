@extends('_layout_user1')
@section('content')
    <!-- Cart Area Start -->
    <div class="cart-main-area pt-100px pb-100px" ng-controller="cartcontroller">
        <div class="container">
            <h3 class="cart-page-title">Giỏ hàng của bạn</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form>
                        <div class="table-content table-responsive cart-table-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Hình Ảnh</th>
                                        <th>Tên Sản Phẩm</th>
                                        <th>Giá</th>
                                        <th>Số Lượng</th>
                                        <th>Tổng tiền</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <div>
                                        <tr ng-repeat="i in ct">
                                            <td type="text" hidden='true'>@{{laysp(i.idSP)}}</td>
                                            <td><img class="img-responsive ml-15px" style="width:100px;"
                                                    src="/img/@{{ image() }}" alt="" />
                                            </td>
                                            <td>@{{ tenSP() }}</td>
                                            <td>@{{ i.giaBan | number }}</td>
                                            <td >
                                                <input type="number" ng-change="changequantity(i)" 
                                                ng-model="i.soLuong" min="1" max="@{{quantity()}}" >
                                                <span>Số Lượng Kho: @{{quantity()}}</span>
                                            </td>
                                            <td class="product-subtotal">@{{Sum(i.giaBan,i.soLuong) | number}}</td>
                                            <td class="product-remove">
                                                <a href="" ng-click="delete(i)"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                    </div>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-shiping-update-wrapper">
                                    <div class="cart-shiping-update">
                                        <a href="/">Tiếp tục mua sắm</a>
                                    </div>
                                    <div class="cart-clear">
                                        <button>Cập nhật giỏ hàng</button>
                                        <a href="#">Làm mới giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-lm-30px">
                            <div class="discount-code-wrapper">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gray">Mã giảm giá</h4>
                                </div>
                                <div class="discount-code">
                                    <p>Nhập mã giảm giá của bạn vào đây!</p>
                                    <form>
                                        <input type="text" required="" name="name" />
                                        <button class="cart-btn-2" type="submit">Áp dụng</button>
                                    </form>
                                </div>
                            </div>
                        </div> 
                        <div class="col-lg-6 col-md-12 mt-md-30px">
                            <div class="grand-totall">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gary-cart">Tổng giỏ hàng</h4>
                                </div>
                                <h5>Tổng tiền sản phẩm <span id="total1">@{{sumprice() |number}}đ</span></h5>
                                <h5>Thuế VAT <span id="vat">10,000đ</span></h5>
                                <h4 class="grand-totall-title">Thanh toán <span>@{{Sum2()|number}}đ</span></h4>
                                <a href="/checkout"> Tiếp tục thanh toán</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Area End -->
@stop
