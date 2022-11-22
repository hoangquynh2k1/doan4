@extends('_layout_user1')
@section('content')
<!-- login area start -->
<div class="login-register-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-bs-toggle="tab" href="#lg1">
                            <h4>Đăng Nhập</h4>
                        </a>
                        <a data-bs-toggle="tab" href="#lg2">
                            <h4>Đăng Ký</h4>
                        </a>
                    </div>
                    <div class="tab-content" ng-controller="logincontroller">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form >
                                        <input type="text" name="user-name" ng-model='username' placeholder="Username" />
                                        <input type="password" name="user-password" ng-model='userpassword' placeholder="Password" />
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox" />
                                                <a class="flote-none" href="javascript:void(0)">Ghi nhớ mật khẩu</a>
                                                <a href="#">Quên Mật khẩu?</a>
                                            </div>
                                            <button ng-click='check(username,userpassword)'><span>Đăng nhập</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="lg2" class="tab-pane">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form >
                                        <input type="text" name="user-name" ng-model='username' placeholder="Username" />
                                        <input type="password" name="user-password" ng-model='userpassword' placeholder="Password" />
                                        <input name="user-email" placeholder="Email" ng-model='email' type="email" />
                                        <div class="button-box">
                                            <button  ng-click="DangKy(username,userpassword,email)"><span>Đăng ký</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login area end -->
@stop