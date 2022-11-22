@extends('_layout_admin')
@section('content')
    <main ng-app="myapp" ng-controller="newscontroller">
        <div class="container-fluid px-4">
            <h1>PRODUCT MANAGEMENT FORM</h1>
            <p><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" ng-click="showmodal(0)">
                    Create
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
            <div class="card-body">
                <table id="datatablesSimple" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>TT</th>
                            <th>Tieu De</th>
                            <th>Noi Dung</th>
                            <th>Nhan Vien</th>
                            <th>Ngay Viet</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr dir-paginate="new in news |filter: timkiem |itemsPerPage: pageSize">
                            <td>@{{ $index + 1 }}</td>
                            <td style="width:15%">@{{ new.tieude }}</td>
                            <td style="width:35%">@{{ new.noidung }}</td>
                            <td>@{{ new.idNV }}</td>
                            <td>@{{ new.NgayViet }}</td>
                            <td><button class="btn btn-info fa fa-pencil" ng-click="showmodal(new.id)"></button></td>
                            <td><button class="btn btn-danger fa fa-trash" ng-click="deleteClick(new.id)"></button></td>
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
                                    <label for="name">Tiêu Đề</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.tieude">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nội dung</label>
                                    <div>
                                        <textarea type="text" rows="5" class="form-control" ng-model="product.noidung"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Người Viết</label>
                                    <div>
                                        <input type="text" class="form-control" ng-model="product.idNV">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Ngày Viết</label>
                                    <div>
                                        <input type="date" class="form-control" ng-model="product.NgayViet">
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
    <script src="/admins/js/newscontroller.js"></script>
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
