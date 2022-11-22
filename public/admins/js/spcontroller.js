var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.config(function (paginationTemplateProvider) {
    paginationTemplateProvider.setPath('/admins/pagination/customTemplate.html');
});
app.controller('spcontroller', function ($scope, $http) { //tao 1 controller
    $scope.timkiem = "";
    $scope.pageSize = 8;
    $scope.serial = 1;
    $scope.indexCount = function (newPageNumber) {
        $scope.serial = newPageNumber * $scope.pageSize - ($scope.pageSize - 1);
    }
    $http({
        method: "GET",
        url: "http://localhost:8000/api/sp"
    }).then(function (response) {
        $scope.sp = response.data;
    });
    $http({
        method: "GET",
        url: "http://localhost:8000/api/loai_sp"
    }).then(function (response) {
        $scope.loai_sp = response.data;
    });
    $scope.showmodal = function (id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Add new product";
            if ($scope.product) {
                $scope.product = null
            }
        } else {
            $scope.modalTitle = "Edit product";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/sp/" + id
            }).then(function (response) {
                $scope.product = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function (id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/sp/" + id
            }).then(function (response) {
                $scope.message = response.data;
                location.reload();
            });
        }
    }
    $scope.saveData = function () {
        $scope.product.HinhAnh = document.getElementById("img").innerHTML;
        console.log($scope.product);
        if ($scope.id == 0) { //dang them moi sp
            $scope.product.idDong = $scope.checkDong();
            $http({
                method: "POST",
                url: "http://localhost:8000/api/sp",
                data: $scope.product,
                "content-Type": "application/json"
            }).then(function (response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();
            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/sp/" + $scope.id,
                data: $scope.product,
                "content-Type": "application/json"
            }).then(function (response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();
            });
        }
    }
    $scope.test = function () {

    }
    $scope.checkLoai = function () 
    {
        var id = -1;
        var l = $scope.loai_sp.length;
        for (var i = 0; i < l; i++) {
            if ($scope.loai_sp[i].tenloai == $scope.loaisp) {
                id = $scope.loai_sp[i].id;
                break;
            }
        }
        $http({
            method: "GET",
            url: "http://localhost:8000/api/dong_sp/getLoaiSP/" + id
        }).then(function (response) {
            $scope.dong_sp = response.data;
        });

    }
    $scope.checkDong = function () 
    {
        var id = -1;
        var l = $scope.dong_sp.length;
        for (var i = 0; i < l; i++) {
            if ($scope.dong_sp[i].tendong == $scope.dongsp) {
                id = $scope.loai_sp[i].id;
                break;
            }
        }
        return id;
    }
});