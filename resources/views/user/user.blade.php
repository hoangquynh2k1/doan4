@extends('_layout_user1')
@section('content')
    <section ng-controller="logincontroller">
        <!-- account area start -->
        <div class="account-dashboard pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <!-- Nav tabs -->
                        <div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
                            <ul role="tablist" class="nav flex-column dashboard-list">
                                <li><a href="#dashboard" data-bs-toggle="tab" class="nav-link active">Tổng Quan</a></li>
                                <li> <a href="#orders" data-bs-toggle="tab" class="nav-link">Đơn Hàng</a></li>
                                <li><a href="#account-details" data-bs-toggle="tab" class="nav-link">Thông tin tài
                                        khoản</a>
                                </li>
                                <li><a href="" ng-click="logout()" class="nav-link">Đăng xuất</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                            <div class="tab-pane fade show active" id="dashboard">
                                <h4>Dashboard </h4>
                                <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent
                                        orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a
                                        href="#">Edit your password and account details.</a></p>
                            </div>
                            <div class="tab-pane fade" id="orders">
                                <h4>Orders</h4>
                                <div class="table_page table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Đơn Hàng</th>
                                                <th>Ngày Đặt</th>
                                                <th>Tình trạng</th>
                                                <th>Tổng Tiền</th>
                                                <th>Hành Động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>May 10, 2018</td>
                                                <td><span class="success">Completed</span></td>
                                                <td>$25.00 for 1 item </td>
                                                <td><a href="cart.html" class="view">view</a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>May 10, 2018</td>
                                                <td>Processing</td>
                                                <td>$17.00 for 1 item </td>
                                                <td><a href="cart.html" class="view">view</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-details">
                                <h3>Account details </h3>
                                <div class="login">
                                    <div class="login_form_container">
                                        <div class="account_login_form">
                                            <form action="#">
                                                <p>Already have an account? <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#loginActive">Log in instead!</a></p>
                                                <div class="input-radio">
                                                    <span class="custom-radio"><input type="radio" value="1"
                                                            name="id_gender"> Mr.</span>
                                                    <span class="custom-radio"><input type="radio" value="1"
                                                            name="id_gender"> Mrs.</span>
                                                </div> <br>
                                                <div class="default-form-box mb-20">
                                                    <label>Họ Tên</label>
                                                    <input type="text" name="first-name">
                                                </div>
                                                <div class="default-form-box mb-20">
                                                    <label>Số Điện Thoại</label>
                                                    <input type="text" name="last-name">
                                                </div>
                                                <div class="default-form-box mb-20">
                                                    <label>Email</label>
                                                    <input type="text" name="email-name">
                                                </div>
                                                <div class="default-form-box mb-20">
                                                    <label>Địa Chỉ</label>
                                                    <input type="password" name="user-password">
                                                </div>
                                                <div class="default-form-box mb-20">
                                                    <label>Ngày Sinh</label>
                                                    <input type="date" name="birthday">
                                                </div>
                                                <span class="example">
                                                    (E.g.: 05/31/1970)
                                                </span>
                                                <br>
                                                <br>
                                                <label class="checkbox-default checkbox-default-more-text" for="newsletter">
                                                    <input type="checkbox" id="newsletter">
                                                    <span>Sign up for our newsletter<br>
                                                        <em>You may unsubscribe at any
                                                            moment. For that purpose, please find our contact info in the
                                                            legal notice.
                                                        </em>
                                                    </span>
                                                </label>
                                                <div class="save_button mt-3">
                                                    <button class="btn" type="submit">Lưu thông tin</button>
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
        <!-- account area start -->
    </section>
@stop
