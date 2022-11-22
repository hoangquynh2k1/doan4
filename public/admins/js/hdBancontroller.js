var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.config(function(paginationTemplateProvider) {
    paginationTemplateProvider.setPath('/admins/pagination/customTemplate.html');
});
app.controller('hdbancontroller', function($scope, $http) { //tao 1 controller
    $scope.timkiem = "";
    $scope.pageSize = 2;
    $scope.serial = 1;
    $scope.indexCount = function(newPageNumber){
        $scope.serial = newPageNumber * $scope.pageSize - ($scope.pageSize - 1);
    }
    $http({
        method: "GET",
        url: "http://localhost:8000/api/hdban"
    }).then(function(response) {
        $scope.hdban = response.data;
    }); 
    $http({
        method: "GET",
        url: "http://localhost:8000/api/khach_hang/"
    }).then(function (response) {
        $scope.khs = response.data;
    });
    $http({
        method: "GET",
        url: "http://localhost:8000/api/sp/"
    }).then(function (response) {
        $scope.sps = response.data;
    });
    $scope.checkKH = function(id){
        $scope.khs.forEach(item => {
            if(item.id == id)
            {
                $scope.kh = item;
            }
        });
        return '';
    }
    $scope.checkSP = function(id){
        $scope.sps.forEach(item => {
            if(item.id == id)
            {
                $scope.sp = item;
            }
        });
        return '';
    }
    $scope.xacnhan=function(hd){
        hd.tinhtrang = 2;
        $http({
            method: "PUT",
            url: "http://localhost:8000/api/hdban/update/",
            data: hd,
            "content-Type": "application/json"
        }).then(function (response) {
            $scope.message = response.data;
            console.log($scope.message);
        });
    }
    $scope.tenKH = function(){
        return $scope.kh.full_name;
    }
    $scope.showmodal = function(id) {
        $http({
            method: "GET",
            url: "http://localhost:8000/api/cthdban/getIdHDon/" + id,
            "content-Type": "application/json"
        }).then(function (response) {
            $scope.cthd = response.data;
        });
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(hd) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            hd.tinhtrang = 0;
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/hdban/update/",
                data: hd,
                "content-Type": "application/json"
            }).then(function (response) {
                $scope.message = response.data;
                console.log($scope.message);
            });
            location.reload();
        }
    }
});