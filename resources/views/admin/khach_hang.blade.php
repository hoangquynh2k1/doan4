@extends('_layout_admin')
@section('content')
    <main ng-app="myapp" ng-controller="nhanviencontroller">
        <div class="container-fluid px-4">
            <h1>QUẢN LÝ KHÁCH HÀNG</h1>
            <p><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" ng-click="showmodal(0)">
                    Create
                </button></p>
                <div class="col-4 mb-3" style="float:left;">
                    <span class="label">Tìm kiếm: </span>
                    <input type="text" class="form-control" ng-model="timkiem"  >
                    
                </div>
                <div class="col-2 mb-2">
                    <span style="float: left;" class="label">Số dòng: </span>
                    <input type="number" min="1" max="100"  class="form-control" ng-model="pageSize">
                </div>
            <!-- Button trigger modal -->
            <div>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>TT</th>
                            <th>Ten khach hang</th>
                            <th>Email</th>
                            <th>So Dien Thoai</th>
                            <th>Dia Chi</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr dir-paginate="kh in khach_hang |filter: timkiem |itemsPerPage: pageSize">
                            <span hidden="true">123</span>

                            <td>@{{ $index + 1 }}</td>
                            <td>@{{ kh.full_name }}</td>
                            <td>@{{ kh.email }}</td>
                            <td>@{{ kh.phone }}</td>
                            <td>@{{ kh.address }}</td>
                            <td><button class="btn btn-info fa fa-pencil" ng-click="showmodal(kh.id)"></button></td>
                            <td><button class="btn btn-danger fa fa-trash" ng-click="deleteClick(kh.id)"></button></td>
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
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Thong tin</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="form-group">
                                    <label for="name">Ten khach hang:</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.full_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Email:</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Dai chi:</label>
                                    <div>
                                        {{-- <textarea ck-editor class="form-control" ng-model="product.address" id="description" rows="5" name="description">
                                        </textarea> --}}
                                        <input type="text" class="form-control" ng-model="product.address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">So Dien Thoai:</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.phone">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Ten dang nhap:</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.users_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Password:</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.password">
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
    <script src="/admins/js/khachhangcontroller.js"></script>
    <script src="/admins/js/dirPagination.js"></script>
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
@stop
