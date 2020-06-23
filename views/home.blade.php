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
    <div class="newsletter" style="margin-top: 200px;">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="newsletter_content text-center">
                        <div class="newsletter_title_container">
                            <div class="newsletter_title">Trụ sở chính</div>
                            <div class="newsletter_subtitle">Hãy liên lạc với chúng tôi</div>
                        </div>
                        <div class="newsletter_form_container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4432916742526!2d106.62617211476467!3d10.853849292269008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752a20be133a37%3A0x2222564f53ae228d!2zQ8O0bmcgVmnDqm4gUGjhuqduIE3hu4FtIFF1YW5nIFRydW5n!5e0!3m2!1svi!2s!4v1591000450636!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
