@extends('layouts._layout')
@section('content')
<div class="blog">
    <div class="section_container">
        <div class="container">
            <h1>Đăng Tin Của Bạn</h1>
            <form action="{{}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Chọn danh mục đăng tin</label>
                    <select class="form-control" id="">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Chọn tỉnh, thành phố</label>
                    <select class="form-control" id="">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Quận, huyện, thị xã</label>
                    <select class="form-control" id="">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Phường, xã, thị trấn</label>
                    <select class="form-control" id="">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="">Hình ảnh</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image">
                        <label class="custom-file-label"></label>
                    </div>
                </div>  
                <div class="form-group">
                    <label>Tên</label>
                    <input type="string" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label></label>
                    <input type="string" class="form-control" name="post">
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
                </div>!-->
                <button type="submit" class="btn btn-black">Đăng Bán</button>
            </form>
            
        </div>
    </div>
    
</div>
@endsection
