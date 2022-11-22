@extends('_layout_admin')
@section('content')
    <main ng-app="myapp" ng-controller="nhanviencontroller">
        <div class="container-fluid px-4">
            <h1>PRODUCT MANAGEMENT FORM</h1>
            <p><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" ng-click="showmodal(0)">
                    Thêm mới
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
                        <tr dir-paginate="ncc in nha_cung_cap |filter: timkiem |itemsPerPage: pageSize">
                            <td>@{{ $index + 1 }}</td>
                            <td>@{{ ncc.ten_ncc }}</td>
                            <td>@{{ ncc.diachi_ncc }}</td>
                            <td>@{{ ncc.email }}</td>
                            <td>@{{ ncc.sdt }}</td>
                            <td>@{{ ncc.sotk }}</td>
                            <td><button class="btn btn-info fa fa-pencil" ng-click="showmodal(ncc.id)"></button></td>
                            <td><button class="btn btn-danger fa fa-trash" ng-click="deleteClick(ncc.id)"></button></td>
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
                            <h5 class="modal-title">Thong Tin</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="form-group">
                                    <label for="name">Tên nhà cung cấp</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.ten_ncc">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Địa chỉ</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.diachi_ncc">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Email</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Số điện thoại</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.sdt">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Số tài khoản</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.sotk">
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
    <script src="/admins/js/nhacungcapcontroller.js"></script>
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
            // Use above variables to manipulate the DOM

        });
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
@stop
