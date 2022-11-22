var app = angular.module('userapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('loaispcontroller', function ($scope, $http, $rootScope) { //tao 1 controller
    $http({
        method: "GET",
        url: "http://localhost:8000/api/loai_sp"
    }).then(function (response) {
        $scope.loai_sp = response.data;
    });
});
app.controller('spcontroller', function ($scope, $http, $rootScope) { //tao 1 controller
    $http({
        method: "GET",
        url: "http://localhost:8000/api/sp"
    }).then(function (response) {
        $scope.spall = response.data;
        var s = 1;
        $scope.arr1 = [];
        $scope.arr2 = [];
        for (var i = 0; i < $scope.spall.length; i++) {
            if (s > 8)
                break
            else {
                $scope.arr1.push($scope.spall[i]);
                $scope.arr2.push($scope.spall[$scope.spall.length - 1 - i]);
                s++;
            }
        }
    });
    $scope.showmodal = function (id) {
        sessionStorage.setItem("id", id);
        window.location.pathname = '/product-detail';
    }
    $scope.kh = sessionStorage.getItem('login');
    $scope.checklogin = function (sp) {
        var idkh = sessionStorage.getItem('login');
        if (idkh != null) {
            $http({
                method: "GET",
                url: "http://localhost:8000/api/hdban/" + idkh
            }).then(function (response) {
                $scope.hdban = response.data;
                console.log($scope.hdban);
                if ($scope.hdban != -1) {
                    $scope.cthd = new Object;
                    $scope.cthd.idhdBan = $scope.hdban.id;
                    console.log($scope.hdban);
                    $scope.cthd.idSP = sp.id;
                    $scope.cthd.giaBan = sp.giaBan;
                    $scope.cthd.soLuong = 1;

                    $http({
                        method: "POST",
                        url: "http://localhost:8000/api/cthdban",
                        data: $scope.cthd,
                        "content-Type": "application/json"
                    }).then(function (response) {
                        $scope.message = response.data;
                    });
                }
                else {
                    var d = new Date();
                    $scope.hdban = new Object;
                    $scope.hdban.idKH = idkh;
                    $scope.hdban.tinhtrang = 0;
                    $scope.hdban.NgayDat = d.toISOString().replace('Z', '');
                    $http({
                        method: "POST",
                        url: "http://localhost:8000/api/hdban",
                        data: $scope.hdban,
                        "content-Type": "application/json"
                    }).then(function (response) {
                        $scope.message = response.data;
                        console.log($scope.message);
                        $http({
                            method: "GET",
                            url: "http://localhost:8000/api/hdban/" + idkh
                        }).then(function (response) {
                            $scope.hdban2 = response.data;
                            console.log($scope.hdban2);
                            $scope.cthd = new Object;
                            $scope.cthd.idhdBan = $scope.hdban2.id;
                            $scope.cthd.idSP = sp.id;
                            $scope.cthd.giaBan = sp.giaBan;
                            $scope.cthd.soLuong = 1;
                            $http({
                                method: "POST",
                                url: "http://localhost:8000/api/cthdban",
                                data: $scope.cthd,
                                "content-Type": "application/json"
                            }).then(function (response) {
                                $scope.message = response.data;
                            })
                        });
                    })
                }
            });
            $('#exampleModal-Cart').modal('show');
        }
        else {
            window.location.pathname = '/login';
        }
    }
    $scope.ct = function (id) {
        $scope.ctsp = null;
        $http({
            method: "GET",
            url: "http://localhost:8000/api/sp/" + id
        }).then(function (response) {
            $scope.ctsp = response.data;
        });
        $('#exampleModal').modal('show');
    }
});
app.controller('ctspcontroller', function ($scope, $http) {
    $scope.arrCauTao = null;
    $http({
        method: "GET",
        url: "http://localhost:8000/api/sp/" + sessionStorage.getItem('id')
    }).then(function (response) {
        $scope.arrCauTao = response.data.CauTao.split(',');
        $scope.product = response.data;
    });
    $scope.checklogin = function (sp) {
        var idkh = sessionStorage.getItem('login');
        if (idkh != null) {
            $http({
                method: "GET",
                url: "http://localhost:8000/api/hdban/" + idkh
            }).then(function (response) {
                $scope.hdban = response.data;
                console.log($scope.hdban);
                if ($scope.hdban != -1) {
                    $scope.cthd = new Object;
                    $scope.cthd.idhdBan = $scope.hdban.id;
                    console.log($scope.hdban);
                    $scope.cthd.idSP = sp.id;
                    $scope.cthd.giaBan = sp.giaBan;
                    $scope.cthd.soLuong = 1;

                    $http({
                        method: "POST",
                        url: "http://localhost:8000/api/cthdban",
                        data: $scope.cthd,
                        "content-Type": "application/json"
                    }).then(function (response) {
                        $scope.message = response.data;
                    });
                }
                else {
                    var d = new Date();
                    $scope.hdban = new Object;
                    $scope.hdban.idKH = idkh;
                    $scope.hdban.tinhtrang = 0;
                    $scope.hdban.NgayDat = d.toISOString().replace('Z', '');
                    $http({
                        method: "POST",
                        url: "http://localhost:8000/api/hdban",
                        data: $scope.hdban,
                        "content-Type": "application/json"
                    }).then(function (response) {
                        $scope.message = response.data;
                        console.log($scope.message);
                        $http({
                            method: "GET",
                            url: "http://localhost:8000/api/hdban/" + idkh
                        }).then(function (response) {
                            $scope.hdban2 = response.data;
                            console.log($scope.hdban2);
                            $scope.cthd = new Object;
                            $scope.cthd.idhdBan = $scope.hdban2.id;
                            $scope.cthd.idSP = sp.id;
                            $scope.cthd.giaBan = sp.giaBan;
                            $scope.cthd.soLuong = 1;
                            $http({
                                method: "POST",
                                url: "http://localhost:8000/api/cthdban",
                                data: $scope.cthd,
                                "content-Type": "application/json"
                            }).then(function (response) {
                                $scope.message = response.data;
                            })
                        });
                    })
                }
            });
            $('#exampleModal-Cart').modal('show');
        }
        else {
            window.location.pathname = '/login';
        }
    }
    $http({
        method: "GET",
        url: "http://localhost:8000/api/sp"
    }).then(function (response) {
        $scope.sp = response.data;
    });

});
app.controller('logincontroller', function ($scope, $http) {
    $http({
        method: "GET",
        url: "http://localhost:8000/api/khach_hang"
    }).then(function (response) {
        $scope.khach_hang = response.data;
    });
    $scope.check = function (username, userpassword) {
        var ch = false;
        $scope.khach_hang.forEach(e => {
            if (e.users_name == username && e.password == userpassword) {
                sessionStorage.setItem('login', e.id);
                ch = true;
            }
        });
        if (ch) {
            window.location.pathname = '/';
            alert('Đăng nhập thành công!');
        }
        else
            alert('Tài khoản hoặc mật khẩu không chính xác!');
    }
    $scope.DangKy = function (username, userpassword, email) {
        var ch = false;
        $scope.khach_hang.forEach(e => {
            if (e.users_name == username) {
                ch = true;
            }
        });
        if (ch)
            alert("Tên tài khoản đã tồn tại!");
        else {
            var acc = new Object;
            acc.users_name = username;
            acc.password = userpassword;
            acc.email = email;
            acc.full_name = null;
            acc.phone = null;
            acc.address = null;
            $http({
                method: "POST",
                url: "http://localhost:8000/api/khach_hang",
                data: acc,
                "content-Type": "application/json"
            }).then(function (response) {
                $scope.message = response.data;
                sessionStorage.setItem('login', response.data.id);
                window.location.pathname = '/';

            });
        }
    }
    $scope.logout = function () {
        sessionStorage.removeItem("login");
        window.location.pathname = '/login';
    }
    $scope.clickAvatar = function () {
        if (sessionStorage.getItem('login') != null) {
            window.location.pathname = "/account";
        }
        else {
            window.location.pathname = "/login";
        }
    }
});
app.controller('cartcontroller', function ($scope, $http) {
    $scope.cta = [];
    $scope.s = [];
    $scope.kh = sessionStorage.getItem('login');
    $scope.t = 1;
    $http({
        method: "GET",
        url: "http://localhost:8000/api/hdban/" + $scope.kh
    }).then(function (response) {
        $scope.hdban = response.data;
        if ($scope.hdban != -1) {
            $http({
                method: "GET",
                url: "http://localhost:8000/api/cthdban/getIdHDon/" + $scope.hdban.id,
                "content-Type": "application/json"
            }).then(function (response) {
                $scope.ct = response.data;
            });
        }
    });
    $http({
        method: "GET",
        url: "http://localhost:8000/api/khach_hang/" + $scope.kh
    }).then(function (response) {
        $scope.kh = response.data;
    });
    $scope.clickCart = function () {
        if ($scope.kh.id > 0) {
            window.location.pathname = "/cart";
        }
        else {
            window.location.pathname = "/login";
        }
    }
    $scope.laysp = function (id) {
        for (var i = 0; i < $scope.sp.length; i++) {
            if ($scope.sp[i].id == id) {
                $scope.showSP = $scope.sp[i];
            }
        }
        return '';
    }
    $scope.num = function () {

        var sum = 0;
        if ($scope.ct == null)
            return sum;
        $scope.ct.forEach(e => {
            sum = sum + e.soLuong;
            $scope.sumprice = $scope.sumprice + (e.soLuong * e.giaBan);
        });
        if (sum < 10)
            return '0' + sum;
        return sum;
    }
    $scope.sumprice = function () {
        var sum = 0;
        if ($scope.ct != null) {
            $scope.ct.forEach(e => {
                sum = sum + (e.soLuong * e.giaBan);
            });
        }
        if (sum < 10)
            return '0' + sum;
        return sum;
    }
    $http({
        method: "GET",
        url: "http://localhost:8000/api/sp/"
    }).then(function (response) {
        $scope.sp = response.data;
    });
    $scope.changequantity = function (i) {
        $scope.hdban.tongtien = $scope.sumprice();
        console.log($scope.hdban.tongtien);
        $http({
            method: "PUT",
            url: "http://localhost:8000/api/hdban/update/",
            data: $scope.hdban,
            "content-Type": "application/json"
        }).then(function (response) {

        });
        $http({
            method: "PUT",
            url: "http://localhost:8000/api/cthdban/update/",
            data: i,
            "content-Type": "application/json"
        }).then(function (response) {
            $scope.message = response.data;
        });
    }
    $scope.total = 0;
    $scope.tenSP = function () {
        return $scope.showSP.tenSP;
    }
    $scope.tenSP2 = function () {
        return $scope.showSP.tenSP.length > 20 ? $scope.showSP.tenSP.slice(0, 20) + '...' : $scope.showSP.tenSP;
    }
    $scope.image = function () {
        return $scope.showSP.HinhAnh;
    }
    $scope.quantity = function () {
        return $scope.showSP.SoLuong;
    }
    $scope.delete = function (e) {

        $http({
            method: "DELETE",
            url: "http://localhost:8000/api/cthdban/" + e.id,
            "content-Type": "application/json"
        }).then(function (response) {
            $scope.message = response.data;
            for (var i = 0; i < $scope.ct.length; i++) {
                if ($scope.ct[i].id == e.id) {
                    $scope.ct.splice(i, 1);
                    break;
                }
            }
        })
    }
    $scope.Sum = function (gia, soluong) {
        return gia * soluong;
    }
    $scope.Sum2 = function () {
        return format(document.getElementById('total1').innerHTML);
    }
    function format(a) {
        var v = 0;
        while (a.includes(',')) {
            a = a.replace(',', '');
        }
        v = parseInt(a);
        return v * 1.1;
    }
    $scope.Order = function () {
        $http({
            method: "PUT",
            url: "http://localhost:8000/api/khach_hang/" + $scope.kh.id,
            data: $scope.kh,
            "content-Type": "application/json"
        }).then(function (response) {
            $scope.message = response.data;
            console.log($scope.message);
        });
        $scope.hdban.tinhtrang = 1;
        $http({
            method: "PUT",
            url: "http://localhost:8000/api/hdban/update/",
            data: $scope.hdban,
            "content-Type": "application/json"
        }).then(function (response) {
            $scope.message = response.data;
            console.log($scope.message);
            alert("Đặt hàng thành công!");
            window.location("/");
        });
    }
});
app.config(function (paginationTemplateProvider) {
    paginationTemplateProvider.setPath('/admins/pagination/customTemplate.html');
});
app.controller('lspcontroller', function ($scope, $http) {
    $scope.name = "";
    $scope.pageSize = 8;
    $scope.serial = 1;
    $scope.indexCount = function (newPageNumber) {
        $scope.serial = newPageNumber * $scope.pageSize - ($scope.pageSize - 1);
    }
    $http({
        method: "GET",
        url: "http://localhost:8000/api/loai_sp"
    }).then(function (response) {
        $scope.loai_sp = response.data;
    });
    $http({
        method: "GET",
        url: "http://localhost:8000/api/sp"
    }).then(function (response) {
        $scope.sp = response.data;
    });
    $scope.search = function (DongSP) {

        if (DongSP == "-------------") {
            $http({
                method: "GET",
                url: "http://localhost:8000/api/sp"
            }).then(function (response) {
                $scope.sp = response.data;
            });
        }
        else {
            for (var i = 0; i < $scope.loai_sp.length; i++) {
                if ($scope.loai_sp[i].tenloai == DongSP) {
                    $http({
                        method: "GET",
                        url: "http://localhost:8000/api/sp/getIdLoai/" + $scope.loai_sp[i].id
                    }).then(function (response) {

                        $scope.sp = response.data;
                        //$scope.dong_sp = response.data;
                        // for (var j = 0; j < $scope.dong_sp.length; j++) {
                        //     $http({
                        //         method: "GET",
                        //         url: "http://localhost:8000/api/sp/getIdDong/" + $scope.dong_sp[j].id
                        //     }).then(function (response) {
                        //         $scope.dong = response.data;
                        //         for (var k = 0; k < $scope.dong.length; k++) {
                        //             $scope.sp.push($scope.dong[k])
                        //         }
                        //     });
                        // }
                    });
                }
            }
        }
    }
    $scope.checklogin = function (sp) {
        var idkh = sessionStorage.getItem('login');
        if (idkh != null) {
            $http({
                method: "GET",
                url: "http://localhost:8000/api/hdban/" + idkh
            }).then(function (response) {
                $scope.hdban = response.data;
                console.log($scope.hdban);
                if ($scope.hdban != -1) {
                    $scope.cthd = new Object;
                    $scope.cthd.idhdBan = $scope.hdban.id;
                    console.log($scope.hdban);
                    $scope.cthd.idSP = sp.id;
                    $scope.cthd.giaBan = sp.giaBan;
                    $scope.cthd.soLuong = 1;

                    $http({
                        method: "POST",
                        url: "http://localhost:8000/api/cthdban",
                        data: $scope.cthd,
                        "content-Type": "application/json"
                    }).then(function (response) {
                        $scope.message = response.data;
                    });
                }
                else {
                    var d = new Date();
                    $scope.hdban = new Object;
                    $scope.hdban.idKH = idkh;
                    $scope.hdban.tinhtrang = 0;
                    $scope.hdban.NgayDat = d.toISOString().replace('Z', '');
                    $http({
                        method: "POST",
                        url: "http://localhost:8000/api/hdban",
                        data: $scope.hdban,
                        "content-Type": "application/json"
                    }).then(function (response) {
                        $scope.message = response.data;
                        console.log($scope.message);
                        $http({
                            method: "GET",
                            url: "http://localhost:8000/api/hdban/" + idkh
                        }).then(function (response) {
                            $scope.hdban2 = response.data;
                            console.log($scope.hdban2);
                            $scope.cthd = new Object;
                            $scope.cthd.idhdBan = $scope.hdban2.id;
                            $scope.cthd.idSP = sp.id;
                            $scope.cthd.giaBan = sp.giaBan;
                            $scope.cthd.soLuong = 1;
                            $http({
                                method: "POST",
                                url: "http://localhost:8000/api/cthdban",
                                data: $scope.cthd,
                                "content-Type": "application/json"
                            }).then(function (response) {
                                $scope.message = response.data;
                            })
                        });
                    })
                }
            });
            $('#exampleModal-Cart').modal('show');
        }
        else {
            window.location.pathname = '/login';
        }
    }
    $scope.showmodal = function (id) {
        sessionStorage.setItem("id", id);
        window.location.pathname = '/product-detail';
    }
});