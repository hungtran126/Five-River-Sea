@extends('layouts._layout')
@section('content')
    <!-- Home -->

    <div class="home">
        
        <!-- Home Slider -->
        <div class="home_slider_container">
            <div class="owl-carousel owl-theme home_slider">
                
                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url({{asset('images')}}/home_slider_2.jpg)"></div>
                    <div class="home_content_container" style="margin-left: 30px;">
                        <div class="home_content" >
                            <div class="home_discount d-flex flex-row align-items-end justify-content-start">
                                <div class="home_discount_text">Ở ĐÂY</div>
                            </div><br>
                            <div class="home_title">Cái gì cũng bán</div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url({{asset('images')}}/home_slider_1.jpg)"></div>
                    <div class="home_content_container" style="margin-left: 30px;">
                        <div class="home_content">
                            <div class="home_discount d-flex flex-row align-items-end justify-content-start">
                                <div class="home_discount_text">Ở ĐÂY</div>
                            </div><br>
                            <div class="home_title">Cái gì cũng có</div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url({{asset('images')}}/home_slider_3.jpg);"></div>
                    <div class="home_content_container" style="margin-left: 330px;">
                        <div class="home_content">
                            <div class="home_discount d-flex flex-row align-items-end justify-content-start">
                                <div class="home_discount_text" style="font-size: 13pt;">Hỗ trợ Freeship</div>
                            </div><br>
                            <div class="home_title">TOÀN QUỐC</div>
                        </div>
                    </div>
                </div>

            </div>
                
            <!-- Home Slider Navigation -->
            <div class="home_slider_nav home_slider_prev trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="{{asset('images')}}/prev.png" alt=""></div></div>
            <div class="home_slider_nav home_slider_next trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="{{asset('images')}}/next.png" alt=""></div></div>

        </div>
    </div>

    <!-- Boxes -->
    
    <div class="boxes">
        <div class="section_container">
            <div class="container">
                <div class="row">
                    
                    <!-- Box -->
                    @foreach($listcate as $i)
                    <div class="col-lg-4 box_col mt-5">
                        <div class="box">
                            <div class="box_image"><img src="{{asset('images')}}/{{$i->images}}" alt=""></div>
                            <div class="box_title trans_200"><a href="/category/{{$i->idCategory}}">{{$i->nameCategory}}</a></div>
                        </div>
                    </div>
                    @endforeach

                    <!-- Box -->

                </div>
            </div>
        </div>
    </div>

    <!-- Categories -->

    <!-- Products -->


    <!-- Maps -->


@endsection
