<header >
   <!-- Header top area start -->
   <div class="header-top">
       <div class="container">
           <div class="row justify-content-between align-items-center">
               <div class="col">
                   <div class="welcome-text">
                       <p>Sự hài lòng làm lên thương hiệu</p>
                   </div>
               </div>
               <div class="col d-none d-lg-block" ng-controller='logincontroller'>
                   <div class="top-nav">
                       <ul>
                           <li><a href="tel:0123456789"><i class="fa fa-phone"></i> +89979 641 743</a></li>
                           <li><a href="mailto:demo@example.com"><i class="fa fa-envelope-o"></i>
                                   hoangquynh12a3dqh@gmail.com</a></li>
                           <li><a href="#" ng-click="clickAvatar()"><i class="fa fa-user"></i> Account</a></li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Header top area end -->
   <!-- Header action area start -->
   <div class="header-bottom  d-none d-lg-block">
       <div class="container">
           <div class="row justify-content-between align-items-center">
               <div class="col-lg-3 col">
                   <div class="header-logo">
                       <a href="/"><img src="/img/logo.png" style="width:200px; height:100px;" alt="Site Logo" /></a>
                   </div>
               </div>
               <div class="col-lg-6 d-none d-lg-block">
                   <div class="search-element">
                       <form action="#">
                           <input type="text" placeholder="Search" />
                           <button><i class="pe-7s-search"></i></button>
                       </form>
                   </div>
               </div>
               <div class="col-lg-3 col">
                   <div class="header-actions" ng-controller="cartcontroller">
                       <!-- Single Wedge Start -->
                       <!-- Single Wedge End -->
                       <a href="#" ng-click="clickCart()"
                           class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                           <i class="pe-7s-shopbag"></i>
                           <span class="header-action-num">@{{num()}}</span>
                           <!-- <span class="cart-amount">€30.00</span> -->
                       </a>
                       <a href="#offcanvas-mobile-menu"
                           class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                           <i class="pe-7s-menu"></i>
                       </a>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Header action area end -->
   <!-- Header action area start -->
   <div class="header-bottom d-lg-none sticky-nav style-1">
       <div class="container">
           <div class="row justify-content-between align-items-center">
               <div class="col-lg-3 col">
                   <div class="header-logo">
                       <a href="index.html"><img src="hmart/assets/images/logo/logo.png" alt="Site Logo" /></a>
                   </div>
               </div>
               <div class="col-lg-6 d-none d-lg-block">
                   <div class="search-element">
                       <form action="#">
                           <input type="text" placeholder="Search" />
                           <button><i class="pe-7s-search"></i></button>
                       </form>
                   </div>
               </div>
               <div class="col-lg-3 col">
                   <div class="header-actions">
                       <a href="/cart"
                           class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                           <i class="pe-7s-shopbag"></i>
                           <span class="header-action-num">1</span>
                       </a>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Header action area end -->
   <!-- header navigation area start -->
   <div class="header-nav-area d-none d-lg-block sticky-nav">
       <div class="container">
           <div class="header-nav">
               <div class="main-menu position-relative">
                   <ul>
                       <li class="dropdown"><a href="/"><i class="fa fa-home" aria-hidden="true">
                                   Trang chủ</i> </a>
                       </li>
                       <li class="dropdown position-static"><a href="/products">Danh Mục Sản phẩm</a>
                           
                       </li>
                       <li class=""><a href="#">Bài viết </a>
                       </li>
                       <li><a href="">Về chúng tôi</a></li>
                       <li><a href="">Liên hệ</a></li>
                   </ul>
               </div>
           </div>
       </div>
   </div>
   <!-- header navigation area end -->
   <div class="mobile-search-box d-lg-none">
       <div class="container">
           <!-- mobile search start -->
           <div class="search-element max-width-100">
               <form action="#">
                   <input type="text" placeholder="Search" />
                   <button><i class="pe-7s-search"></i></button>
               </form>
           </div>
           <!-- mobile search start -->
       </div>
   </div>
</header>
