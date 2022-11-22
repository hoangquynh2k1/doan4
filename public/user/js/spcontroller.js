var app2 = angular.module('sanphamapp', []); //tao 1 module
app2.controller('spcontroller', function($scope, $http) { //tao 1 controller
    $http({
        method: "GET",
        url: "http://localhost:8000/api/sp"
    }).then(function(response) {
        console.log(response.data);
        $scope.sp = response.data;
    });
    $http({
        method: "GET",
        url: "http://localhost:8000/api/gia"
    }).then(function(response) {
        console.log(response.data);
        $scope.gia = response.data;
    });
    $scope.giasp =0;
    $scope.check = function(id)
    {
        for (let index = 0; index < gia.length; index++) {
            if(gia[i].idSP  == id)
            {
                giasp = gia[i].gia;
            }
        }
        return 0;
    }
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Add new product";
            if($scope.product){
            $scope.product = null
        }
        } else {
            $scope.modalTitle = "Edit product";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/sp/" + id
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
                url: "http://localhost:8000/api/sp/" + id
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
                url: "http://localhost:8000/api/sp",
                data: $scope.product,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                location.reload();

            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/sp/" + $scope.id,
                data: $scope.product,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});
