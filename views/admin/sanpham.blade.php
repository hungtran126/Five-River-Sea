<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
@extends('layouts.master')
@section('title')
    <p class="navbar-brand">Sản phẩm</p>
@endsection
<!-- Phần menu -->
@section('dashboard')
<li>
    <a href="/admin">
      <i class="now-ui-icons design_app"></i>
      <p>Dashboard</p>
    </a>
</li>
@endsection

@section('page')
<li>
    <a href="/admin/page">
        <i class="now-ui-icons education_atom"></i>
        <p>Bài viết</p>
    </a>
</li>
@endsection
@section('sanpham')
<li class="active">
    <a href="/admin/product">
        <i class="now-ui-icons shopping_box"></i>
        <p>Sản phẩm</p>
    </a>
</li>
@endsection

@section('gallery')
<li>
    <a href="/admin/gallery">
        <i class="now-ui-icons ui-1_bell-53"></i>
        <p>Thư viện</p>
    </a>
</li>
@endsection

@section('user')
<li>
  <a href="/admin/user">
    <i class="now-ui-icons users_single-02"></i>
    <p>User Profile</p>
  </a>
</li>
@endsection

@section('table')
<li>
    <a href="/admin/table">
      <i class="now-ui-icons design_bullet-list-67"></i>
      <p>Table List</p>
    </a>
</li>
@endsection

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="card ">
            <div class="card-header ">
                <h5 class="title">Sản phẩm</h5>
                <!-- <div class="col-md-2" style="margin-left: -15px">
                    <a href="/admin/addproduct" class="btn btn-primary btn-block">Tạo sản phẩm</a>
                </div> -->
            </div>
            <div class="card-body">
                <form action="">
                    <select name="danhmuc" id="">
                        <option value="0">Lọc theo danh mục</option>
                        @foreach($filter as $filters)
                        <option value="{{$filters->iddanhmuc}}" name="{{$filters->tendanhmuc}}">{{$filters->tendanhmuc}}</option>
                        @endforeach
                    </select>
                    <select name="thanhpho" id="">
                        <option value="0">Lọc theo thành phố</option>
                        @foreach($filter as $filters)
                        <option value="{{$filters->iddanhmuc}}" name="{{$filters->iddanhmuc}}">{{$filters->thanhpho}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn-info" style="border: none">Lọc</button>
                </form>
                <table class="table fonts-size">
                    <thead>
                        <tr>
                            <th><input type="checkbox" name="" id=""></th>
                            <th>Tên sản phẩm</th>
                            <th>Tên người bán</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Danh mục</th>
                            <th>Ngày đăng</th>
                            <th>Trạng thái</th>
                            <th>Thành phố</th>
                            <th>Báo cáo</th>
                            <th>Hình ảnh</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($innercat as $innercats)
                            @foreach($product as $products)
                                <tr>
                                    <th><input type="checkbox" name="{{$products->idsanpham}}" id=""></th>
                                    <th>{{$products->tensanpham}}</th>
                                    <th>{{$products->tennguoiban}}</th>
                                    <th>{{$products->gia}}đ</th>
                                    <th>{{$products->soluong}}</th>
                                    <th>{{$innercats->tendanhmuc}}</th>
                                    <th>{{$products->ngaydang}}</th>
                                    <th>{{$products->trangthai}}</th>
                                    <th>{{$products->thanhpho}}</th>
                                    <th>{{$products->baocao}}</th>
                                    <th><img src="{{$products->hinhanh}}" alt=""></th>
                                    <th><a href="#">Thông tin chi tiết</a></th>
                                    <th><input type="checkbox" checked data-toggle="toggle" data-onstyle="outline-primary" data-offstyle="outline-secondary"></th>
                                    <th><a href="#">Xóa</a></th>
                                </tr>
                            @endforeach
                            @endforeach
                        
                    </tbody>
                </table>
            </div>
            <div id="nav-neo" class="col-md-12">
                {{$product -> links()}};
            </div>            
            <script>
                $('#nav-neo nav ul').addClass('justify-content-center');
            </script>
        </div>
    </div>
</div>
@endsection