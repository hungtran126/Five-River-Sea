@extends('layouts._layout')
@section('content')
@if(!session('user'))
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="title align-middle">LOGIN</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="text-align: center">
                        <form action="/login" class="text-center justify-content-center">
                            <label for="">Email:</label><br>
                            <input type="text" id="forms" placeholder="Điền email vào đây..." name="email" style="padding: 5px; width: 300px;"><br>
                            @if($errors -> has('email'))
                                <span class="help-block">
                                    <strong>{{$errors -> first('email')}}</strong>
                                </span><br>
                            @endif 
                            <label for="">Password:</label><br>
                            <input type="password" name="password" id="forms" placeholder="Điền password vào đây..." id="" style="padding: 5px; width: 300px;"><br>
                            @if($errors -> has('password'))
                                <span class="help-block">
                                    <strong>{{$errors -> first('password')}}</strong>
                                </span><br>
                            @endif 
                            <a href="#" style="padding: 5px;">Quên mật khẩu?</a>
                            <button type="submit" id="submitt" class="btn btn-primary" style="margin-top: 5px; margin-left: 120px;">Login</button>
                        </form><br>
                        <a href="/createuser" class="btn btn-success col-md-8">Tạo tài khoản</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="blog">
        <div class="section_container">
            <div class="container">
                <h1>Đăng Tin Của Bạn</h1>
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Chọn danh mục đăng tin</label>
                        <select class="form-control" id="" name="danhmuc" id="danhmuc">
                            <option disabled>-- Chọn danh mục --</option>
                            @foreach($listcate as $cate)
                                <option value="">{{ $cate->nameCategory }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Chọn tỉnh, thành phố</label>
                        <select class="form-control" id="" name="thanhpho" id="thanhpho">
                            <option>-- Chọn tỉnh, thành phố --</option>
                            <option value="1">TP.HCM</option>
                            <option value="2">HÀ NỘI</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Quận, huyện, thị xã</label>
                        <select class="form-control" id="" name="quan" id="quan">
                            <option>-- Chưa chọn quận, huyện --</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Phường, xã, thị trấn</label>
                        <select class="form-control" id="" name="phuong" id="phuong">
                            <option>-- Chưa chọn quận, xã --</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Hình ảnh</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image[]" multiple>
                            <label class="custom-file-label"></label>
                        </div>
                    </div>  
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="string" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label>Hình thức</label>
                        <select name="hinhthuc" id="">
                            <option value=""></option>
                            <option value="">Tôi bán</option>
                            <option value="">Tôi mua</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input type="text" class="form-control" name="title" placeholder="VD: Quần lửng nữ màu kem size M">
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả chi tiết</label>
                    <textarea class="form-control _16tLs7dZ58oB3l8shll3x8" placeholder="Viết tiếng Việt có dấu
                    - Loại quần áo
                    - Nam/nữ
                    - Kích cỡ: S,M,L
                    - Nhãn hiệu
                    - Chất liệu, màu sắc" name="detail" rows="12" id="" maxlength="1000"></textarea>
                    </div>
                    <button type="submit" class="btn btn-black">Đăng Bán</button>
                </form>
                <script>
                    $(document).ready(function(){
                        $('#thanhpho').on('change',function(e){
                            console.log(e);
                            var idthanhpho = e.target.value;

                            //ajax
                            $.get('/post/loc?idthanhpho='+ idthanhpho, function(data){
                                $("#quan").empty();
                                $.each(data, function(index, idquan){
                                    $('#quan').append('<option value="'+idquan.idquan+'">'+idquan.tenquan+'</option>');
                                })
                            })
                        })
                    })
                </script>
            </div>
        </div>
    </div>
@endif
@endsection
