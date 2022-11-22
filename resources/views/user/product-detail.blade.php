@extends('_layout_user1')
@section('content')
    <section ng-controller="ctspcontroller">
        <!-- Product Details Area Start -->
        <div class="product-details-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                        <!-- Swiper -->
                        <div class="swiper-container zoom-top">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="/img/@{{ product.HinhAnh }}" alt="">
                                    <a class="venobox full-preview" data-gall="myGallery"
                                        href="assets/images/product-image/zoom-image/1.webp">
                                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="/img/@{{ product.HinhAnh }}" alt="">
                                    <a class="venobox full-preview" data-gall="myGallery"
                                        href="assets/images/product-image/zoom-image/2.webp">
                                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="/img/@{{ product.HinhAnh }}" alt="">
                                    <a class="venobox full-preview" data-gall="myGallery"
                                        href="assets/images/product-image/zoom-image/3.webp">
                                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="/img/@{{ product.HinhAnh }}" alt="">
                                    <a class="venobox full-preview" data-gall="myGallery"
                                        href="assets/images/product-image/zoom-image/4.webp">
                                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="/img/@{{ product.HinhAnh }}" alt="">
                                    <a class="venobox full-preview" data-gall="myGallery"
                                        href="assets/images/product-image/zoom-image/5.webp">
                                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-container mt-20px zoom-thumbs slider-nav-style-1 small-nav">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="/img/@{{ product.HinhAnh }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="/img/@{{ product.HinhAnh }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="/img/@{{ product.HinhAnh }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="/img/@{{ product.HinhAnh }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="/img/@{{ product.HinhAnh }}" alt="">
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
                        <div class="product-details-content quickview-content ml-25px">
                            <h2>@{{ product.tenSP }}</h2>
                            <div class="pricing-meta">
                                <ul class="d-flex">
                                    <li class="new-price">@{{ check(product.id) }}</li>
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
                                <span class="read-review"><a class="reviews" href="#">(5 Customer
                                        Review)</a></span>
                            </div>
                            <p class="mt-30px">@{{product.MoTa}}
                            </p>
                            <div class="product-details-table table-responsive pro-details-quality">
                                <div class="quantity">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                            value="1" />
                                    </div>
                                </div>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                <span>SKU:</span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">Ch-256xl</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                <span>Loại sản phẩm: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">KIT</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                <span>Tags: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">Lập trình</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-quality">
                                <div class="pro-details-cart">
                                    <button class="add-cart m-0" ng-click="checklogin(product)"> Thêm giỏ hàng</button>
                                </div>
                                <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                    <a href="compare.html"><i class="pe-7s-refresh-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- product details description area start -->
                        <div class="description-review-wrapper">
                            <div class="description-review-topbar nav">
                                <button data-bs-toggle="tab" data-bs-target="#des-details2">Cấu tạo</button>
                                <button class="active" data-bs-toggle="tab" data-bs-target="#des-details1">Mô
                                    Tả</button>
                                <button data-bs-toggle="tab" data-bs-target="#des-details3">Đánh giá (02)</button>
                            </div>
                            <div class="tab-content description-review-bottom">
                                <div id="des-details2" class="tab-pane">
                                    <div class="product-anotherinfo-wrapper text-start">
                                        <ul>
                                            <li ng-repeat='c in arrCauTao'>
                                                <p>@{{ c }}</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="des-details1" class="tab-pane active">
                                    <div class="product-description-wrapper">
                                        <p>
                                            @{{ product.MoTa }}
                                        </p>
                                    </div>
                                </div>
                                <div id="des-details3" class="tab-pane">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="review-wrapper">
                                                <div class="single-review">
                                                    <div class="review-img">
                                                        <img src="assets/images/review-image/1.png" alt="" />
                                                    </div>
                                                    <div class="review-content">
                                                        <div class="review-top-wrap">
                                                            <div class="review-left">
                                                                <div class="review-name">
                                                                    <h4>White Lewis</h4>
                                                                </div>
                                                                <div class="rating-product">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <div class="review-left">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                        <div class="review-bottom">
                                                            <p>
                                                                Vestibulum ante ipsum primis aucibus orci luctustrices posuere
                                                                cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper
                                                                euismod vehicula. Phasellus quam nisi, congue id nulla.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-review child-review">
                                                    <div class="review-img">
                                                        <img src="assets/images/review-image/2.png" alt="" />
                                                    </div>
                                                    <div class="review-content">
                                                        <div class="review-top-wrap">
                                                            <div class="review-left">
                                                                <div class="review-name">
                                                                    <h4>White Lewis</h4>
                                                                </div>
                                                                <div class="rating-product">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <div class="review-left">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                        <div class="review-bottom">
                                                            <p>Vestibulum ante ipsum primis aucibus orci luctustrices
                                                                posuere
                                                                cubilia Curae Sus pen disse viverra ed viverra. Mauris
                                                                ullarper
                                                                euismod vehicula.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="ratting-form-wrapper pl-50">
                                                <h3>Add a Review</h3>
                                                <div class="ratting-form">
                                                    <form action="#">
                                                        <div class="star-box">
                                                            <span>Your rating:</span>
                                                            <div class="rating-product">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="rating-form-style">
                                                                    <input placeholder="Name" type="text" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="rating-form-style">
                                                                    <input placeholder="Email" type="email" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="rating-form-style form-submit">
                                                                    <textarea name="Your Review" placeholder="Message"></textarea>
                                                                    <button
                                                                        class="btn btn-primary btn-hover-color-primary "
                                                                        type="submit" value="Submit">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product details description area end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area Start -->
        <div class="product-area related-product">
            <div class="container">
                <!-- Section Title & Tab Start -->
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center m-0">
                            <h2 class="title">Sản Phẩm Liên Quan</h2>
                        </div>
                    </div>
                </div>
                <!-- Section Title & Tab End -->
                <div class="row">
                    <div class="col">
                        <div class="new-product-slider swiper-container slider-nav-style-1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" ng-repeat="s in sp">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <span class="badges">
                                            <span class="sale">-10%</span>
                                            <span class="new">New</span>
                                            <span class="new">Sale</span>
                                        </span>
                                        <div class="thumb">
                                            <a ng-click="showmodal(s.id)" class="image">
                                                <img src="/img/@{{ s.HinhAnh }}" alt="Product" />
                                                <img class="hover-image" src="/img/@{{ s.HinhAnh }}"
                                                    alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span class="category"><a href="#">@{{ s.tenSP }}</a></span>
                                            <h5 class="title"><a href="single-product.html">Bluetooth Headphone
                                                </a>
                                            </h5>
                                            <span class="price">
                                                
                                                <span class="new">@{{ s.giaBan | number }} đ</span>
                                            </span>
                                        </div>
                                        <div class="actions">
                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal-Wishlist"><i
                                                    class="pe-7s-like"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-buttons">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End -->
    </section>
@stop
