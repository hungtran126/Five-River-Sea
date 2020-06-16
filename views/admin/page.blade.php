@extends('layouts.master')
@section('title')
    <p class="navbar-brand">Page</p>
@endsection
<!-- Menu -->
@section('dashboard')
<li>
    <a href="/admin">
      <i class="now-ui-icons design_app"></i>
      <p>Dashboard</p>
    </a>
</li>
@endsection

@section('page')
<li class="active">
    <a href="/admin/page">
        <i class="now-ui-icons education_atom"></i>
        <p>Bài viết</p>
    </a>
</li>
@endsection

@section('sanpham')
<li>
    <a href="/admin/product">
        <i class="now-ui-icons shopping_box"></i>
        <p>Sản phẩm</p>
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

<!-- Hết menu -->

<!-- Content -->
@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Bài viết</h5>
                    <div class="col-md-2" style="margin-left: -15px">
                        <a class="btn btn-primary btn-block">Tạo bài viết</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <table class="table fonts-size">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" name="" id=""></th>
                                    <th>Tiêu đề</th>
                                    <th>Tác giả</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
