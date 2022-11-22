@extends('_layout_user1')
@section('content')
    <section ng-controller="spcontroller">
        <!-- Hero/Intro Slider Start -->
        <div class="section">
            <div style="height:500px;" class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
                <!-- Hero slider Active -->
                <div class="swiper-wrapper">
                    <!-- Single slider item -->
                    <div class="hero-slide-item slider-height swiper-slide bg-color1"
                        data-bg-image="assets/images/hero/bg/hero-bg-1.webp">
                        <div class="row ">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                                <div class="hero-slide-content slider-animated-1">
                                    <img style="width:1600px; height:500px;" src="img/slide1.gif" alt="#" />
                                </div>
                            </div>
                            <div
                                class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-end">
                            </div>
                        </div>
                    </div>
                    <!-- Single slider item -->
                    <div class="hero-slide-item slider-height swiper-slide bg-color1"
                        data-bg-image="assets/images/hero/bg/hero-bg-1.webp">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                                <div class="hero-slide-content slider-animated-1">
                                    <img style="width:1500px; height:500px;" src="img/slider_4.png" alt="#" />
                                </div>
                            </div>
                            <div
                                class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-end">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-white"></div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <!-- Hero/Intro Slider End -->
        <!-- Product Area Start -->
        <div class="product-area pb-100px">
            <div class="container">
                <!-- Section Title & Tab Start -->
                <div class="row">
                    <div class="col-12">
                        <!-- Tab Start -->
                        <div class="tab-slider d-md-flex justify-content-md-between align-items-md-center">
                            <ul class="product-tab-nav nav justify-content-start align-items-center">
                                <li class="nav-item">
                                    <h3 style="float: left;">Sản phẩm mới</h3>
                                    <a style="margin-left:1000px; display: block; " href="/products"
                                        class="btn btn-primary blog-btn">
                                        <h5 style="color: white; margin-top:10px;">
                                            Xem thêm</h5>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Tab End -->
                    </div>
                </div>
                <!-- Section Title & Tab End -->
                <div class="row">
                    <div class="col">
                        <div class="tab-content mt-60px">
                            <!-- 1st tab start -->
                            <div class="tab-pane fade show active" id="newarrivals">
                                <div class="row mb-n-30px">
                                    <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" ng-repeat="s in arr1">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <span class="badges">
                                                <span class="sale">-10%</span>
                                                <span class="new">New</span>
                                                <span class="new">Sale</span>
                                            </span>
                                            <div class="thumb">
                                                <a href="" ng-click="showmodal(s.id)" class="image">
                                                    <img src="/img/@{{ s.HinhAnh }}" alt="Product" />
                                                    <img class="hover-image" src="/img/@{{ s.HinhAnh }}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <a ng-click="showmodal(s.id)" href="">
                                                    <h5 class="title">
                                                        @{{ s.tenSP }}</h5>
                                                    <span class="price">
                                                        {{-- <span class="old">$48.50</span> --}}
                                                        <div class="new" style="text-align: center">
                                                            @{{ s.giaBan | number }} đ</div>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="actions">
                                                <button title="Add To Cart" class="action add-to-cart"
                                                    data-bs-toggle="modal" {{-- data-bs-target="#exampleModal-Cart" --}} ng-click="checklogin(s)"><i
                                                        class="pe-7s-shopbag"></i></button>
                                                <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal-Wishlist"><i
                                                        class="pe-7s-like"></i></button>
                                                <button class="action quickview" ng-click="ct(s.id)"><i
                                                        class="pe-7s-look"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 1st tab end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End -->
        <!-- Product Area Start -->
        <div class="product-area pb-100px">
            <div class="container">
                <!-- Section Title & Tab Start -->
                <div class="row">
                    <div class="col-12">
                        <!-- Tab Start -->
                        <div class="tab-slider d-md-flex justify-content-md-between align-items-md-center">
                            <ul class="product-tab-nav nav justify-content-start align-items-center">
                                <li class="nav-item">
                                    <h3 style="float: left;">Sản phẩm bán chạy</h3>
                                    <a style="margin-left:1000px; display: block;" href="/products"
                                        class="btn btn-primary blog-btn">
                                        <h5 style="color: white; margin-top:10px;">
                                            Xem thêm</h5>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Tab End -->
                    </div>
                </div>
                <!-- Section Title & Tab End -->
                <div class="row">
                    <div class="col">
                        <div class="tab-content mt-60px">
                            <!-- 1st tab start -->
                            <div class="tab-pane fade show active" id="newarrivals">
                                <div class="row mb-n-30px">
                                    <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" ng-repeat="s in arr2">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <span class="badges">
                                                <span class="sale">-10%</span>
                                                <span class="new">New</span>
                                                <span class="new">Sale</span>
                                            </span>
                                            <div class="thumb">
                                                <a href="" ng-click="showmodal(s.id)" class="image">
                                                    <img src="/img/@{{ s.HinhAnh }}" alt="Product" />
                                                    <img class="hover-image" src="/img/@{{ s.HinhAnh }}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <a ng-click="showmodal(s.id)" href=""><span class="category"></span>
                                                    <h5 class="title">
                                                        @{{ s.tenSP }}
                                                    </h5>
                                                    <span class="price">
                                                        <span class="old">$48.50</span>
                                                        <div class="new" style="text-align: center">
                                                            @{{ s.giaBan | number }} đ</div>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="actions">
                                                <button title="Add To Cart" class="action add-to-cart"
                                                    data-bs-toggle="modal" ng-click="checkLogin()"
                                                    data-bs-target="#exampleModal-Cart"><i
                                                        class="pe-7s-shopbag"></i></button>
                                                <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal-Wishlist"><i
                                                        class="pe-7s-like"></i></button>
                                                <button class="action quickview" ng-click="ct(s.id)"><i
                                                        class="pe-7s-look"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 1st tab end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End -->
        <!-- Brand area start -->
        <div class="brand-area  pb-100px">
            <div class="container">
                <div class="brand-slider swiper-container">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide brand-slider-item text-center">
                            <a href="#"><img class=" img-fluid" style="height:120px;" src="img/brain1.png" alt="" /></a>
                        </div>
                        <div class="swiper-slide brand-slider-item text-center">
                            <a href="#"><img class=" img-fluid" style="height:120px;" src="img/brain2.png" alt="" /></a>
                        </div>
                        <div class="swiper-slide brand-slider-item text-center">
                            <a href="#"><img class=" img-fluid" style="height:120px;" src="img/brain3.png" alt="" /></a>
                        </div>
                        <div class="swiper-slide brand-slider-item text-center">
                            <a href="#"><img class=" img-fluid" style="height:120px;" src="img/brain2.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand area end -->
        <!-- Blog area start from here -->
        <div class="main-blog-area pb-100px">
            <div class="container">
                <!-- section title start -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center mb-30px0px">
                            <h2 class="title">Bài viết mới nhất</h2>
                        </div>
                    </div>
                </div>
                <!-- section title start -->
                <div class="row">
                    <div class="col-lg-6 col-sm-6 mb-xs-30px">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="/blog"><img src="hmart/assets/images/blog-image/1.webp"
                                        class="img-responsive w-100" alt=""></a>
                            </div>
                            <div class="blog-text">
                                <div class="blog-athor-date line-height-1">
                                    <span class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i> 27,Jun
                                        2030</span>
                                    <span><a class="blog-author" href="/blog"><i class="fa fa-user"
                                                aria-hidden="true"></i> Wild Nick</a></span>
                                </div>
                                <h5 class="blog-heading"><a class="blog-heading-link" href="/blog">10 Quick Tips About
                                        Smart
                                        Product</a></h5>
                                <p>Lorem ipsum dolor sit amet consl adipisi elit, sed do eiusmod templ incididunt ut labore
                                </p>
                                <a href="/blog" class="btn btn-primary blog-btn"> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="/blog"><img src="hmart/assets/images/blog-image/2.webp"
                                        class="img-responsive w-100" alt=""></a>
                            </div>
                            <div class="blog-text">
                                <div class="blog-athor-date line-height-1">
                                    <span class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i> 27,Jun
                                        2030</span>
                                    <span><a class="blog-author" href="/blog"><i class="fa fa-user"
                                                aria-hidden="true"></i> Oaklee Odom</a></span>
                                </div>
                                <h5 class="blog-heading"><a class="blog-heading-link" href="/blog">5 Real-Life Lessons
                                        About
                                        Smart Product</a></h5>
                                <p>Lorem ipsum dolor sit amet consl adipisi elit, sed do eiusmod templ incididunt ut labore
                                </p>
                                <a href="/blog" class="btn btn-primary blog-btn"> Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                </div>
            </div>
        </div>
        <!-- Blog area end here -->
        <!-- Modal -->
        <div class="modal modal-2 fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i
                                class="pe-7s-close"></i></button>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                                <!-- Swiper -->
                                <div class="swiper-container gallery-top">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto" src="/img/@{{ ctsp.HinhAnh }}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto" src="/img/@{{ ctsp.HinhAnh }}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto" src="/img/@{{ ctsp.HinhAnh }}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto" src="/img/@{{ ctsp.HinhAnh }}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto" src="/img/@{{ ctsp.HinhAnh }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-container gallery-thumbs mt-20px slider-nav-style-1 small-nav">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto" src="/img/@{{ ctsp.HinhAnh }}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto" src="/img/@{{ ctsp.HinhAnh }}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto" src="/img/@{{ ctsp.HinhAnh }}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto" src="/img/@{{ ctsp.HinhAnh }}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto" src="/img/@{{ ctsp.HinhAnh }}" alt="">
                                        </div>
                                    </div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-buttons">
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                                <div class="product-details-content quickview-content">
                                    <h2>@{{ ctsp.tenSP111 }}</h2>
                                    <div class="pricing-meta">
                                        <ul class="d-flex">
                                            <li class="new-price">@{{ ctsp.giaBan | number }} đ</li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-rating-wrap">
                                        <div class="rating-product">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <span class="read-review"><a class="reviews" href="#">( 2 Review
                                                )</a></span>
                                    </div>
                                    <p class="mt-30px">@{{ ctsp.MoTa }}</p>
                                    <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                        <span>Loại sản phẩm: </span>
                                        <ul class="d-flex">
                                            <li>
                                                <a href="#">KIT, </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                        <span>Tags: </span>
                                        <ul class="d-flex">
                                            <li>
                                                <a href="#">Kit lập trình, </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                        </div>
                                        <div class="pro-details-cart">
                                            <button class="add-cart"> Thêm giỏ Hàng</button>
                                        </div>
                                        <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                            <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                                        </div>
                                    </div>
                                    <div class="payment-img">
                                        <a href="#"><img src="hmart/assets/images/icons/payment.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->
    </section>
@stop
