@extends('_layout_user1')
@section('content')
<!-- Blog Area Start -->
<div class="blog-grid pb-100px pt-100px main-blog-page single-blog-page" ng-app="userapp" ng-controller="spcontroller">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 offset-lg-2">
                <div class="blog-posts">
                    <div class="single-blog-post blog-grid-post">
                        <div class="blog-image single-blog">
                            <img class="img-fluid h-auto border-radius-10px"
                                src="assets/images/blog-image/single-blog.webp" alt="blog" />
                        </div>
                        <div class="blog-post-content-inner mt-30px">
                            <div class="blog-athor-date">
                                <span class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i>
                                    27,Jun 2030</span>
                                <span><a class="blog-author" href="blog-grid.html"><i class="fa fa-user"
                                            aria-hidden="true"></i> Oaklee Odom</a></span>
                            </div>
                            <h4 class="blog-title">10 Principles of Psychology You Can Use to Improve Your
                                Smart Product </h4>
                            <p data-aos="fade-up">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore eto dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamcol laboris nisi ut aliquipp ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit inloifk voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur. Excepteur sint occaec cupidatat non proident,
                                sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <div class="quate-speech-area">
                                <p class="quate-speech" data-aos="fade-up" data-aos-delay="200">
                                    Lorem ipsum dolor sit amet, consectetur adipisici elit sed do eiusmod tempor
                                    incididunt ut
                                </p>
                                <span class="quater">Elmer Schmidt</span>
                            </div>
                        </div>
                        <div class="single-post-content">
                            <p data-aos="fade-up" data-aos-delay="200">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore eto dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamcol laboris nisi ut aliquipp ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit inloifk voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur.
                            </p>
                        </div>
                    </div>
                    <div class="another-post">
                        <div class="content-side">
                            <p class="mb-30px">Lorem ipsum dolor sit amet, consec adipisic elit, sed do
                                eius tempor incididu ut labore et dolore ma aliqua Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nil ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptat velit esse cillum dolore</p>
                            <p>leu fugiat nulla pariatur. Excepteur sintocca
                                cupidatat non proident, sunt in culpa qui off deserunt mollit anim id est
                                laborum. Sed utl perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium</p>
                        </div>
                        <div class="image-side">
                            <img src="assets/images/blog-image/side-image.webp" alt="">
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore eto dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamcol laboris nisi ut aliquipp ex ea commodo consequat. Duis aute irure
                        dolor in reprehenderit inloifk voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.</p>
                    <!-- single blog post -->
                </div>
                <div class="blog-single-tags-share d-md-flex justify-content-between">
                    <div class="blog-single-tags d-flex" data-aos="fade-up" data-aos-delay="200">
                        <span class="title">Tages:</span>
                        <ul class="tag-list">
                            <li><a href="#">Mobile,</a></li>
                            <li><a href="#">Laptop,</a></li>
                            <li class="m-0"><a href="#">Smart TV</a></li>
                        </ul>
                    </div>
                    <div class="blog-single-share mb-xs-15px d-flex" data-aos="fade-up" data-aos-delay="200">
                        <span class="title">Share:</span>
                        <ul class="social">
                            <li class="m-0">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="blog-nav">
                    <div class="blog-nav-wrap">
                        <div class="nav-left d-flex justify-content-start align-items-center">
                            <a class="nav-img" href="blog-single-left-sidebar.html"><img
                                    src="assets/images/blog-image/post-1.webp" alt="" /><i
                                    class="fa fa-angle-left"></i></a>
                            <div class="media-side">
                                <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i>27
                                    jun, 2022</span>
                                <h5><a href="blog-single-left-sidebar.html">Lorem ipsum dolorl
                                        amet conse adip</a>
                                </h5>
                            </div>
                        </div>
                        <div class="nav-right d-flex justify-content-end flex-row-reverse align-items-center">
                            <a class="nav-img" href="blog-single-left-sidebar.html"><img
                                    src="assets/images/blog-image/post-2.webp" alt="" /><i
                                    class="fa fa-angle-right"></i></a>
                            <div class="media-side">
                                <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i>27
                                    jun, 2022</span>
                                <h5><a href="blog-single-left-sidebar.html">Lorem ipsum dolorl
                                        amet conse adip</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-area">
                    <h2 class="comment-heading" data-aos="fade-up" data-aos-delay="200">Comments (03)</h2>
                    <div class="review-wrapper">
                        <div class="single-review" data-aos="fade-up" data-aos-delay="200">
                            <div class="review-img">
                                <img src="assets/images/blog-image/comment-img-1.webp" alt="" />
                            </div>
                            <div class="review-content">
                                <div class="review-top-wrap">
                                    <div class="review-left">
                                        <div class="review-name">
                                            <h4 class="title">Ramon Bateman
                                                <span class="date">- 27, Jun 2030,</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-bottom">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        temp labore et dol magna aliqua. Ut enim ad minim veniam.
                                    </p>
                                    <div class="review-left">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-review child-review" data-aos="fade-up" data-aos-delay="200">
                            <div class="review-img">
                                <img src="assets/images/blog-image/comment-img-2.webp" alt="" />
                            </div>
                            <div class="review-content">
                                <div class="review-top-wrap">
                                    <div class="review-left">
                                        <div class="review-name">
                                            <h4 class="title">Pierre Hackett
                                                <span class="date">- 27, Jun 2030,</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-bottom">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sedd
                                        labore et dol magna aliqua. Ut enim ad.</p>
                                    <div class="review-left">
                                        <a href="#"> Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-review" data-aos="fade-up" data-aos-delay="200">
                            <div class="review-img">
                                <img src="assets/images/blog-image/comment-img-3.webp" alt="" />
                            </div>
                            <div class="review-content">
                                <div class="review-top-wrap">
                                    <div class="review-left">
                                        <div class="review-name">
                                            <h4 class="title">Moira Baxter
                                                <span class="date">- 27, Jun 2030,</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-bottom">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        temp labore et dol magna aliqua. Ut enim ad minim veniam.
                                    </p>
                                    <div class="review-left">
                                        <a href="#"> Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-comment-form">
                    <h2 class="comment-heading" data-aos="fade-up" data-aos-delay="200">Leave a Comment</h2>
                    <div class="form-inner">
                        <div class="row">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="single-form mb-lm-15px">
                                    <input type="text" placeholder="Name *" />
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                <div class="single-form mb-lm-15px">
                                    <input type="email" placeholder="Email *" />
                                </div>
                            </div>
                            <div class="col-md-12" data-aos="fade-up" data-aos-delay="500">
                                <div class="single-form mb-lm-15px">
                                    <input type="email" placeholder="Subject (Optinal)" />
                                </div>
                            </div>
                            <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                                <div class="single-form m-0">
                                    <textarea placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                                <button class="submit-btn mt-30px" type="submit">Send a Comment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End -->
@stop