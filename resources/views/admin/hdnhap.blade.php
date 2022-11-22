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
                            <th>Nha Cung Cap</th>
                            <th>Nguoi Nhap</th>
                            <th>Ngay Nhap</th>
                            <th>Tong Tien</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr dir-paginate="s in sp |filter: timkiem |itemsPerPage: pageSize">
                            <td>@{{ $index + 1 }}</td>
                            <td style="width:20%">@{{ s.idNCC }}</td>
                            <td> @{{ s.manv }}</td>
                            <td>@{{ s.NgayNhap }}</td>
                            <td>@{{ s.tongtien }}</td>
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
                        <div class="modal-body" style="display:flex;">
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="name">Tên loại</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.tenloai">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Mô tả</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.mota">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Mô tả</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.mota">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Mô tả</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.mota">
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="name">Tên loại</label>
                                    <div>
                                        <select class="form-control">
                                            <option>Default select</option>
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
                                    <label for="name">Mô tả</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.mota">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Mô tả</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.mota">
                                    </div>
                                </div>
                                <div class="">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" ng-click="saveData()">Save</button>
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
            <div class="modal fade" id="cthd" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
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
                                    <label for="name">Tên loại</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.tenloai">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Mô tả</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.mota">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Mô tả</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.mota">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Mô tả</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.mota">
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
        </div>
    </main>
    <script src="/admins/js/angular.min.js"></script>
    <script src="/admins/js/hdNhapcontroller.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    <script src="/admins/js/dirPagination.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
    <script>
        $('#exampleModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
        });
    </script>
@stop
