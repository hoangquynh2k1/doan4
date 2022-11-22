@extends('_layout_admin')
@section('content')
    <main ng-app="myapp" ng-controller="spcontroller">
        <div class="container-fluid px-4">
            <h1>QUẢN LÝ SẢN PHẨM</h1>
            <p><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" ng-click="showmodal(0)">
                    Create
                </button></p>
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
                            <th>TT</th>
                            <th>Ten San Pham</th>
                            <th>Loai</th>
                            <th>Hinh Anh</th>
                            <th>Mo ta</th>
                            <th>So Luong</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr dir-paginate="s in sp |filter: timkiem |itemsPerPage: pageSize">
                            <td>@{{ $index + 1 }}</td>
                            <td style="width:20%">@{{ s.tenSP }}</td>
                            <td>@{{ s.idDong }}</td>
                            <td> <img style="width:200px; " src="/img/@{{ s.HinhAnh }}" alt="" alt=""></td>
                            <td style="width:25%">@{{ s.MoTa }}</td>
                            <td>@{{ s.SoLuong }}</td>
                            <td><button class="btn btn-info fa fa-pencil" ng-click="showmodal(s.id)"></button></td>
                            <td><button class="btn btn-danger fa fa-trash" ng-click="deleteClick(s.id)"></button></td>
                        </tr>
                    </tbody>
                </table>
                <div style="display: flex; justify-content: center; ">
                    <dir-pagination-controls max-size="5" direction-links="true" boundary-links="true"
                        on-page-change='indexCount(newPageNumber)'>
                    </dir-pagination-controls>
                </div>
            </div>
            <form action="{{ route('uploadfile') }}" method="POST" enctype="multipart/form-data">
                <!-- Modal -->
                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Thong Tin</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-4 mb-1" style="float: left;">
                                    <div class="form-group">
                                        <label for="name">Tên sẩn phẩm</label>
                                        <div>
                                            <input type="text" class="form-control" ng-model="product.tenSP">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Loại sản phẩm</label>
                                        <div>
                                            <select name="" ng-model="loaisp" ng-change="checkLoai()" style="width:150px">
                                                <option value="@{{l.tenloai}}"
                                                    ng-repeat="l in loai_sp">@{{l.tenloai}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Dòng sản phẩm</label>
                                        <div>
                                            <select name="" id="" ng-model="dongsp" style="width:150px">
                                                <option value="@{{d.tendong}}" ng-repeat="d in dong_sp">@{{d.tendong}}</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Số Lượng</label>
                                            <div>
                                                <input type="number" class="form-control" ng-model="product.SoLuong">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Hình Ảnh</label>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="customFile" name="filename"
                                                ng-model="product.HinhAnh">
                                            <label class="custom-file-label" id='img'
                                                for="customFile">@{{ product.HinhAnh }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 mb-1" style="float: left;">
                                    <div class="form-group">
                                        <label for="name">Thông Số Kĩ Thuật</label>
                                        <div>
                                            <textarea name="" id="TSKT" cols="40" rows="5" ng-model="product.ThongSoKT"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Cấu tạo</label>
                                        <div>
                                            <textarea name="" id="CauTao" cols="40" rows="5" ng-model="product.CauTao"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 mb-1" style="float: left;">
                                    
                                    <div class="form-group">
                                        <label for="name">Giá Nhập</label>
                                        <div>
                                            <input type="number" class="form-control" ng-model="product.giaNhap">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Giá Bán</label>
                                        <div>
                                            <input type="number" class="form-control" ng-model="product.giaBan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Mô tả</label>
                                        <div>
                                            <textarea name="" id="CauTao" cols="40" rows="5" ng-model="product.MoTa"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" ng-click="saveData()">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="" style="margin-bottom: 100px;"></div>
            </form>
        </div>
    </main>
    <script src="/admins/js/angular.min.js"></script>
    <script src="/admins/js/spcontroller.js"></script>
    <script src="/user/js/jquery.min.js"></script>
    <script src="/user/js/jquery-3.0.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    <script src="/admins/js/dirPagination.js"></script>
    <script>
        // CKEDITOR.replace('TSKT');
        // CKEDITOR.replace('CauTao');
    </script>
    <script>
        var file = document.getElementById("customFile");
        file.addEventListener("change", function() {
            for (var i = 0; i < file.files.length; i++) {
                document.getElementById("img").innerHTML = file.files[i].name;
            }
        }, false);
    </script>
@stop
