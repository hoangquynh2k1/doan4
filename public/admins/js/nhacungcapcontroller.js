var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.config(function(paginationTemplateProvider) {
    paginationTemplateProvider.setPath('/admins/pagination/customTemplate.html');
});
app.controller('nhanviencontroller', function($scope, $http) { //tao 1 controller
    $scope.timkiem = "";
    $scope.pageSize = 2;
    $scope.serial = 1;
    $scope.indexCount = function(newPageNumber){
        $scope.serial = newPageNumber * $scope.pageSize - ($scope.pageSize - 1);
    }
    $http({
        method: "GET",
        url: "http://localhost:8000/api/nha_cung_cap"
    }).then(function(response) {
        console.log(response.data);
        $scope.nha_cung_cap = response.data;
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Add new product";
            if($scope.product){
            // $scope.product = null
        }
        } else {
            $scope.modalTitle = "Edit product";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/nha_cung_cap/" + id
            }).then(function(response) {
                $scope.product = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/nha_cung_cap/" + id
            }).then(function(response) {
                $scope.message = response.data;
                location.reload();
            });
        }
    }
    $scope.saveData = function() {
        if ($scope.id == 0) { //dang them moi sp
            $http({
                method: "POST",
                url: "http://localhost:8000/api/nha_cung_cap",
                data: $scope.product,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/nha_cung_cap/" + $scope.id,
                data: $scope.product,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(renha_cung_caponse.data);
                location.reload();

            });
        }
    }
});