@extends('_layout_admin')
@section('content')
    <main ng-app="myapp" ng-controller="nhanviencontroller">
        <div class="container-fluid px-4">
            <h1>PRODUCT MANAGEMENT FORM</h1>
            <p><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" ng-click="showmodal(0)">
                    Thêm Mới
                </button></p>
            <!-- Button trigger modal -->
            <div class="col-4 mb-3">
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
                            <th>Ten dong</th>
                            <th>Loai</th>
                            <th>Mo ta</th>
                            <th>Nha xan xuat</th>
                            <th>Nam xan xuat</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr dir-paginate="dsp in dong_sp |filter: timkiem |itemsPerPage: pageSize">
                            <td>@{{ $index + 1 }}</td>
                            <td>@{{ dsp.tendong }}</td>
                            <td>@{{ dsp.idLoai }}</td>
                            <td>@{{ dsp.mota }}</td>
                            <td>@{{ dsp.NhaSX }}</td>
                            <td>@{{ dsp.NamSX }}</td>
                            <td><button class="btn btn-info fa fa-pencil" ng-click="showmodal(dsp.id)"></button></td>
                            <td><button class="btn btn-danger fa fa-trash" ng-click="deleteClick(dsp.id)"></button></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div style="display: flex; justify-content: center; ">
                <dir-pagination-controls max-size="5" direction-links="true" boundary-links="true"
                    on-page-change='indexCount(newPageNumber)'>
                </dir-pagination-controls>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Thong Tin</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="form-group">
                                    <label for="name">Tên Dòng</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.tendong">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Loại</label>
                                    <div>
                                        <select name="" ng-model="loaisp" ng-change="checkLoai()">
                                            <option value="@{{l.tenloai}}" id="loaisp" ng-repeat="l in loai_sp">@{{ l.tenloai }}</option>
                                        </select>
                                </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Mô tả</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.mota">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nhà Sản Xuất</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.NhaSX">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Năm Sản Xuất</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.NamSX">
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
        </div>
    </main>
    <script src="/admins/js/angular.min.js"></script>
    <script src="/admins/js/dongSPcontroller.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    <script src="/admins/js/dirPagination.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
@stop
