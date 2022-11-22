@extends('_layout_user1')
@section('content')
    <section>
        <div class="container" ng-controller="lspcontroller" style="height: 860px;">
            <div class="row" >
                <div class="col-lg-4 col-md-12 offset-lg-2">
                    <div class="">
                        <div class="">
                            <label for="loaisp">Loại Sản Phẩm</label>
                            <select name="loaisp" id="" ng-model="DongSP">
                                <option selected>-------------</option>
                                <option ng-repeat="l in loai_sp">@{{ l.tenloai }}</option>
                            </select>
                                <input style="height: 30px; width:200px;" placeholder="Search" type="text" ng-model="name" />
                                <i ng-click="search(DongSP)" class="fa fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="height: 780px;">
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" 
                dir-paginate="s in sp | filter:name |itemsPerPage: pageSize">
                    <!-- Single Prodect -->
                    <div class="product">
                        <span class="badges">
                            <span class="sale">-10%</span>
                            <span class="new">Sale</span>
                        </span>
                        <div class="thumb">
                            <a href="" ng-click="showmodal(s.id)" class="image">
                                <img src="/img/@{{ s.HinhAnh }}" alt="Product" />
                                <img class="hover-image" src="/img/@{{ s.HinhAnh }}" alt="Product" />
                            </a>
                        </div>
                        <div class="content">
                            <a ng-click="showmodal(s.id)" href="">
                                <h5 class="title category">
                                    @{{ s.tenSP }}
                                </h5>
                                <div class="price">
                                    {{-- <span class="old">$48.50</span> --}}
                                    <h5 class="new" style="text-align: center;">@{{ s.giaBan | number }}đ</h5>
                                </div>
                            </a>
                        </div>
                        <div class="actions">
                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal"
                                {{-- data-bs-target="#exampleModal-Cart" --}} ng-click="checklogin(s)"><i class="pe-7s-shopbag"></i></button>
                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal"
                                data-bs-target="#exampleModal-Wishlist"><i class="pe-7s-like"></i></button>
                            <button class="action quickview" data-link-action="quickview" title="Quick view"
                                data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                    class="pe-7s-look"></i></button>
                        </div>
                    </div>
                </div>
                <div style="display: flex; justify-content: center; ">
                    <dir-pagination-controls max-size="5" direction-links="true" boundary-links="true"
                        on-page-change='indexCount(newPageNumber)'>
                    </dir-pagination-controls>
                </div>
            </div>
        </div>
    </section>
@stop
