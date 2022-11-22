<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FTA SHOP</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Hmart-Smart Product eCommerce html Template">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" />
    <!-- CSS
    ============================================ -->
    <link rel="stylesheet" href="hmart/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="hmart/assets/css/font.awesome.css" />
    <link rel="stylesheet" href="hmart/assets/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="hmart/assets/css/animate.min.css">
    <link rel="stylesheet" href="hmart/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="hmart/assets/css/venobox.css">
    <link rel="stylesheet" href="hmart/assets/css/jquery-ui.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="hmart/assets/css/style.css">
    <script src="/admins/js/angular.min.js"></script>
</head>

<body ng-app="userapp">
    <div class="main-wrapper">
        @include("includes.user_header")
        <!-- offcanvas overlay start -->
        <div class="offcanvas-overlay"></div>
        <!-- offcanvas overlay end -->
        @yield('content')
        @include("includes.user_footer")
    </div>
    <!-- Modal Cart -->
    <div class="modal customize-class fade" id="exampleModal-Cart" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="pe-7s-close"></i></button>
                    <div class="tt-modal-messages">
                        <i class="pe-7s-check"></i> Thêm giỏ hàng thành công!
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Modal wishlist -->
    <div class="modal customize-class fade" id="exampleModal-Wishlist" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="pe-7s-close"></i></button>
                    <div class="tt-modal-messages">
                        <i class="pe-7s-check"></i> Added to Wishlist successfully!
                    </div>
                    <div class="tt-modal-product">
                        <div class="tt-img">
                            <img src="hmart/assets/images/product-image/1.webp" alt="Modern Smart Phone">
                        </div>
                        <h2 class="tt-title"><a href="#">Modern Smart Phone</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Global Vendor, plugins JS -->
    <!-- JS Files
    ============================================ -->
    <script src="hmart/assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="hmart/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="hmart/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="hmart/assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="hmart/assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="hmart/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="hmart/assets/js/plugins/scrollUp.js"></script>
    <script src="hmart/assets/js/plugins/venobox.min.js"></script>
    <script src="hmart/assets/js/plugins/jquery-ui.min.js"></script>
    <script src="hmart/assets/js/plugins/mailchimp-ajax.js"></script>
    <script src="/user/js/all.js"></script>
    <script src="/admins/js/dirPagination.js"></script>
    <!--Main JS (Common Activation Codes)-->
    <script src="hmart/assets/js/main.js"></script>
</body>
</html>
