@extends('_layout_admin')
@section('content')
    <main ng-app="myapp" ng-controller="hdbancontroller">
        <div class="container-fluid px-4">
            <h1>QUẢN LÝ ĐƠN HÀNG</h1>
            <!-- Button trigger modal -->
            <div class="col-4 mb-3" style="float:left;">
                <span class="label">Tìm kiếm: </span>
                <input type="text" class="form-control" ng-model="timkiem">

            </div>
            <div class="col-2 mb-2">
                <span style="float: left;" class="label">Số dòng: </span>
                <input type="number" min="1" max="100" class="form-control" ng-model="pageSize">
            </div>
            <div>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th style="text-align: center">Khách Hàng</th>
                            <th style="text-align: center">Ngày Đặt</th>
                            <th style="text-align: center">Tổng Tiền</th>
                            <th style="text-align: center">Tình Trạng</th>
                            <th style="text-align: center" colspan="3">Thao Tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr dir-paginate="hd in hdban |filter: timkiem |itemsPerPage: pageSize">
                            <td hidden="true">@{{ checkKH(hd.idKH) }}</td>
                            <td>@{{ $index + 1 }}</td>
                            <td style="width:20%">@{{ kh.full_name }}</td>
                            <td> @{{ hd.NgayDat }}</td>
                            <td align="right">@{{ hd.tongtien | number }}đ</td>
                            <td>@{{ hd.tinhtrang == 1 ? "Chưa xác nhận" : "Đã xác nhận" }}</td>
                            <td><button title="Xem Chi Tiết" class="btn btn-info fas fa-eye"
                                    ng-click="showmodal(hd.id)"></button></td>
                            <td><button title="Xác Nhận Đơn Hàng" class="btn btn-info fas fa-check-square"
                                    ng-click="xacnhan(hd)"></button></td>
                            <td><button title="Hủy Đơn Hàng" class="btn btn-danger fa fa-trash"
                                    ng-click="deleteClick(hd)"></button></td>
                        </tr>
                    </tbody>
                </table>
                <div style="display: flex; justify-content: center; ">
                    <dir-pagination-controls max-size="5" direction-links="true" boundary-links="true"
                        on-page-change='indexCount(newPageNumber)'>
                    </dir-pagination-controls>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Thông Tin Đơn Hàng</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="display:flex;">
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="name">Tên Khách Hàng</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="kh.full_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Địa Chỉ</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="kh.address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Email</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="kh.email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Số Điện Thoại</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="kh.phone">
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group">
                                    <h4>Thông Tin Chi Tiết</h4>
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên Sản Phẩm</th>
                                                <th>Hình Ảnh</th>
                                                <th>Số Lượng</th>
                                                <th>Giá</th>
                                                <th>Tổng Tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr ng-repeat="ct in cthd">
                                                <td hidden="true">@{{ checkSP(ct.idSP) }}</td>
                                                <td>@{{ $index + 1 }}</td>
                                                <td style="width:20%">@{{ sp.tenSP }}</td>
                                                <td> <img style="width:100px;" src="/img/@{{ sp.HinhAnh }}" alt="">
                                                </td>
                                                <td align="center">@{{ ct.soLuong }}</td>
                                                <td align="right">@{{ ct.giaBan | number }}đ</td>
                                                <td align="right">@{{ ct.giaBan * ct.soLuong | number }}đ</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="" style="margin-bottom: 100px;"></div>
        </div>
    </main>
    <script src="/admins/js/angular.min.js"></script>
    <script src="/admins/js/hdBancontroller.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    <script src="/admins/js/dirPagination.js"></script>
@stop
