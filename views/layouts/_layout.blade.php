<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="aStar Fashion Template Project">
    <title>Five River Sea</title>
    <link rel="stylesheet" type="text/css" href="{{asset('styles')}}/bootstrap-4.1.3/bootstrap.css">
    <link href="{{asset('plugins')}}/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins')}}/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins')}}/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="{{asset('styles')}}/main_styles.css">
    <link rel="stylesheet" type="text/css" href="{{asset('styles')}}/responsive.css">
    <link rel="stylesheet" type="text/css" href="{{asset('styles')}}/blog.css">
    <link rel="stylesheet" type="text/css" href="{{asset('styles')}}/blog_responsive.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/png" href="{{asset('images')}}/icon1.png"/>
</head>
<body>
<div class="super_container">
    <header class="header">
        <div class="header_content d-flex flex-row align-items-center justify-content-start">
            
            <!-- Hamburger -->
            <div class="hamburger menu_mm"><i class="fa fa-bars menu_mm" aria-hidden="true"></i></div>

            <!-- Logo -->
            <div class="header_logo">
                <a href="/"><div>a<span>River</span><p>MARKETPLACE</p></div></a>
            </div>

            <!-- Navigation -->
            <nav class="header_nav">
                <ul class="d-flex flex-row align-items-center justify-content-start">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Tôi bán</a></li>
                    <li><a href="#">Chat</a></li>
                    <li><a href="#">Thông báo</a></li> 
                    <li><a href="#">About us</a></li>
                </ul>
            </nav>

            <!-- Header Extra -->
            <div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">

            </div>
        </div>
    </header>

    <!-- Menu -->

    <div class="menu d-flex flex-column align-items-start justify-content-start menu_mm trans_400">
        <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
        <div class="menu_top d-flex flex-row align-items-center justify-content-start">

        </div>
        <div class="menu_search">
            <form action="#" class="header_search_form menu_mm">
                <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
                <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                    <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <nav class="menu_nav">
            <ul class="menu_mm">
                <li class="menu_mm"><a href="/">Home</a></li>
                <li class="menu_mm"><a href="#">Tôi bán</a></li>
                <li class="menu_mm"><a href="#">Chat</a></li>
                <li class="menu_mm"><a href="#">Thông báo</a></li>
                <li class="menu_mm"><a href="#">About us</a></li>
            </ul>
        </nav>
        <div class="menu_extra">
            <div class="menu_social">
                <ul>
                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <!-- Sidebar -->

    <div class="sidebar">
        
        <!-- Info -->
        <div class="info" style="margin-left: -11px;">
            <div class="info_content d-flex flex-row align-items-center justify-content-start">
                <!-- Đăng nhập --->
                <div class="info_languages has_children">
                    <i class='far fa-user-circle' style="color: #FFF; font-size: 18px"></i>
                    <button type="button" data-toggle="modal" data-target="#myModal" style="background-color: #1a1a1a; color: #FFF; border: none; cursor: pointer;">
                        ĐĂNG NHẬP
                    </button>
                </div>
                <!-- Đăng tin --->
                <div class="info_currencies has_children">
                <i class='far fa-edit' style="color: #FFF; font-size: 18px"></i> <a href="/post" style="color: #FFF;">ĐĂNG TIN</a>
                </div>

            </div>
        </div>

        <!-- Logo -->
        <div class="sidebar_logo">
            <a href="/"><div>5<span>River Sea</span><p>MARKETPLACE</p></div></a>
        </div>

        <!-- Sidebar Navigation -->
        <nav class="sidebar_nav" style="font-size: 18pt;">
            <ul style="color: #FFF;">
                <li><i class="fas fa-home"></i> <a href="/"> Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><i class="far fa-grin-wink"></i> <a href="/ibuy">Tôi bán<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><i class="fas fa-comments-dollar"></i> <a href="/chat">Chat<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><i class="fas fa-bullhorn"></i> <a href="#">Thông báo<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><i class="fa fa-odnoklassniki"></i> <a href="/about">About us<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            </ul>
        </nav>

        <!-- Search -->
        <div class="search">
            <form action="#" class="search_form" id="sidebar_search_form">
                <input type="text" class="search_input" placeholder="Search" required="required">
                <button class="search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>

        <!-- Cart -->
        <div class="cart d-flex flex-row align-items-center justify-content-start">
            <div class="cart_icon"><a href="cart.html">
                <img src="{{asset('images')}}/bag.png" alt="">
                <div class="cart_num">2</div>
            </a></div>
            <div class="cart_text">TIN LƯU</div>
        </div>
    </div>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="title align-middle">LOGIN</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="" class="text-center justify-content-center">
                        <label for="">Email:</label><br>
                        <input type="text" placeholder="Điền email vào đây..." name="email" style="padding: 5px; width: 300px;"><br>
                        <label for="">Password:</label><br>
                        <input type="password" name="password" placeholder="Điền password vào đây..." id="" style="padding: 5px; width: 300px;"><br>
                        <a href="#" style="padding: 5px;">Quên mật khẩu?</a>
                        <button type="submit" class="btn btn-primary" style="margin-top: 5px; margin-left: 120px;">Login</button>
                    </form>   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @section('content')
    @show
    <!-- Footer -->

    <footer class="footer">
        <div class="footer_content">
            <div class="section_container">
                <div class="container">
                    <div class="row">
                        <!-- About -->
                        <div class="col-xxl-3 col-md-6 footer_col">
                            <div class="footer_about">
                                <!-- Logo -->
                                <div class="footer_logo">
                                    <a href="#"><div>5<span>River Sea</span><p>MARKETPLACE</p></div></a>
                                </div>
                                <div class="footer_about_text">
                                    <p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam fringilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
                                </div>
                                <!-- <div class="cards">
                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                        <li><a href="#"><img src="{{asset('images')}}/card_1.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('images')}}/card_2.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('images')}}/card_3.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('images')}}/card_4.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('images')}}/card_5.jpg" alt=""></a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>

                        <!-- Questions -->
                        <div class="col-xxl-3 col-md-6 footer_col">
                            <div class="footer_questions">
                                <div class="footer_title">questions</div>
                                <div class="footer_list">
                                    <ul>
                                        <li><a href="#">About us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Blog -->
                        <div class="col-xxl-3 col-md-6 footer_col">
                            <div class="footer_blog">
                                <div class="footer_title">blog</div>
                                <div class="footer_blog_container">

                                    <!-- Blog Item -->
                                    <div class="footer_blog_item d-flex flex-row align-items-start justify-content-start">
                                        <div class="footer_blog_image"><a href="blog.html"><img src="{{asset('images')}}/footer_blog_1.jpg" alt=""></a></div>
                                        <div class="footer_blog_content">
                                            <div class="footer_blog_title"><a href="blog.html">what shoes to wear</a></div>
                                            <div class="footer_blog_date">june 06, 2018</div>
                                            <div class="footer_blog_link"><a href="blog.html">Read More</a></div>
                                        </div>
                                    </div>

                                    <!-- Blog Item -->
                                    <div class="footer_blog_item d-flex flex-row align-items-start justify-content-start">
                                        <div class="footer_blog_image"><a href="blog.html"><img src="{{asset('images')}}/footer_blog_2.jpg" alt=""></a></div>
                                        <div class="footer_blog_content">
                                            <div class="footer_blog_title"><a href="blog.html">trends this year</a></div>
                                            <div class="footer_blog_date">june 06, 2018</div>
                                            <div class="footer_blog_link"><a href="blog.html">Read More</a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Contact -->
                        <div class="col-xxl-3 col-md-6 footer_col">
                            <div class="footer_contact">
                                <div class="footer_title">contact</div>
                                <div class="footer_contact_list">
                                    <ul>
                                        <li class="d-flex flex-row align-items-start justify-content-start"><span>C.</span><div>Your Company Ltd</div></li>
                                        <li class="d-flex flex-row align-items-start justify-content-start"><span>A.</span><div>1481 Creekside Lane  Avila Beach, CA 93424, P.O. BOX 68</div></li>
                                        <li class="d-flex flex-row align-items-start justify-content-start"><span>T.</span><div>+53 345 7953 32453</div></li>
                                        <li class="d-flex flex-row align-items-start justify-content-start"><span>E.</span><div>office@youremail.com</div></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Social -->
        <div class="footer_social">
            <div class="section_container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="footer_social_container d-flex flex-row align-items-center justify-content-between">
                                <!-- Instagram -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">instagram</div>
                                    </div>
                                </a>
                                <!-- Google + -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">FACEBOOK</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>				
        </div>
    </footer>

    </div>

    <script src="{{asset('js')}}/jquery-3.2.1.min.js"></script>
    <script src="{{asset('styles')}}/bootstrap-4.1.3/popper.js"></script>
    <script src="{{asset('styles')}}/bootstrap-4.1.3/bootstrap.min.js"></script>
    <script src="{{asset('plugins')}}/greensock/TweenMax.min.js"></script>
    <script src="{{asset('plugins')}}/greensock/TimelineMax.min.js"></script>
    <script src="{{asset('plugins')}}/scrollmagic/ScrollMagic.min.js"></script>
    <script src="{{asset('plugins')}}/greensock/animation.gsap.min.js"></script>
    <script src="{{asset('plugins')}}/greensock/ScrollToPlugin.min.js"></script>
    <script src="{{asset('plugins')}}/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="{{asset('plugins')}}/easing/easing.js"></script>
    <script src="{{asset('plugins')}}/parallax-js-master/parallax.min.js"></script>
    <script src="{{asset('plugins')}}/Isotope/isotope.pkgd.min.js"></script>
    <script src="{{asset('plugins')}}/Isotope/fitcolumns.js"></script>
    <script src="{{asset('js')}}/custom.js"></script>
</body>
</html>
