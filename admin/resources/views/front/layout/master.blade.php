<!DOCTYPE html>
<html lang="en">
<head>
     <base href="{{asset('/')}}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Đồ Phượt 3655</title>
    <script src="front/js/jquery-3.3.1.js"></script>
    <script src="front/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="front/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="front/fonts/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="front/css/style.css">
    <link rel="stylesheet" href="front/css/home.css">
  
    {{-- <link rel="stylesheet" href="front/css/product.css">
    <link rel="stylesheet" href="front/css/cart.css">
    <link rel="stylesheet" href="front/css/contact.css">
    <link rel="stylesheet" href="front/css/post.css"> --}}

</head>
<body>
    <div class="app">
        <header id="header">
        <!-- header top -->
        <div class="header__top">
            <div class="container">
                <section class="row flex">
                    <div class="col-lg-5 col-md-0 col-sm-0 heade__top-left">
                        <span>Đồ Phượt 365 - Provide quality backpacking</span>
                    </div>

                    <nav class="col-lg-7 col-md-0 col-sm-0 header__top-right">
                        <ul class="header__top-list">
                            <li class="header__top-item">
                                <a href="#" class="header__top-link">

                                    Q&A</a>
                            </li>
                            <li class="header__top-item">
                                <a href="#" class="header__top-link">Guide</a>
                            </li>
                            <li class="header__top-item">
                                <a href="{{route('register')}}" class="header__top-link">Registes</a>
                            </li>
                            <li class="header__top-item">
                                <a href="{{route('login')}}" class="header__top-link">Log in</a> 
                            </li>
                        </ul>
                    </nav>
                </section>
            </div>
        </div>
        <!--end header top -->

        <!-- header bottom -->
        <div class="header__bottom">
            <div class="container">7
                <section class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 header__logo">
                        <h1 class="header__heading">
                            <a href="#" class="header__logo-link">
                                <img src="front/images/logo.png" alt="Logo" class="header__logo-img">
                            </a>
                        </h1>
                    </div>

                    <div class="col-lg-6 col-md-7 col-sm-0 header__search">
                        <select name="" id="" class="header__search-select">
                            <option value="0">All</option>
                            <option value="1">Helmet</option>
                            <option value="2">Gloves</option>
                            <option value="3">Coat</option>
                            <option value="4">Shoes</option>
                            <option value="5">Balo</option>
                        </select>
                        <input type="text" class="header__search-input" placeholder="Tìm kiếm tại đây...">
                        <button class="header__search-btn">
                            <div class="header__search-icon-wrap">
                                <i class="fas fa-search header__search-icon"></i>
                            </div>
                        </button>
                    </div>

                    <div class="col-lg-2 col-md-0 col-sm-0 header__call">
                        <div class="header__call-icon-wrap">
                            <i class="fas fa-phone-alt header__call-icon"></i>  
                        </div>
                        <div class="header__call-info">
                            <div class="header__call-text">
                                Call for advice
                            </div>
                            <div class="header__call-number">
                                0352.860.701
                            </div>
                        </div>
                    </div>

                    <a href="{{route('cart')}}" class="col-lg-1 col-md-1 col-sm-0 header__cart">
                        <div class="header__cart-icon-wrap">
                            <span class="header__notice">4</span>
                            <i class="fas fa-shopping-cart header__nav-cart-icon"></i>
                        </div>
                    </a>
                </section>
            </div>   
        </div>
        <!--end header bottom -->

        <!-- header nav -->
        <div class="header__nav">
            <div class="container">
                <section class="row">
                    <div class="header__nav-menu-wrap col-lg-3 col-md-0 col-sm-0">
                        <i class="fas fa-bars header__nav-menu-icon"></i>
                        <div class="header__nav-menu-title">Product portfolio</div>
                    </div>

                    <div class="header__nav col-lg-9 col-md-0 col-sm-0">
                        <ul class="header__nav-list">
                            <li class="header__nav-item">
                                <a href="#" class="header__nav-link">Home page</a>
                            </li>
                            <li class="header__nav-item">
                                <a href="#" class="header__nav-link">Introduce</a>
                            </li>
                            <li class="header__nav-item">
                                <a href="#" class="header__nav-link">Product</a>
                            </li>
                            <li class="header__nav-item">
                                <a href="{{route('post')}}" class="header__nav-link">Posts</a>
                            </li>
                            <li class="header__nav-item">
                                <a href="#" class="header__nav-link">Recruit collaborators</a>
                            </li>
                            <li class="header__nav-item">
                                <a href="{{route('contact')}}" class="header__nav-link">Contact</a>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </header>
    <!--end header nav -->

     {{-- Body here --}}
      @yield('body')

     <!-- footer -->
     <footer>
        <section class="footer__top">
            <div class="container">
                <div class="row">
                    <article class="footer__top-intro col-lg-5 col-md-4 col-sm-6">
                        <h4 class="footer__top-intro-heading">
                            Về chúng tôi
                        </h4>
                        <div class="footer__top-intro-content">
                            Dophuot365.com là hệ thống chuyên cung cấp những
                            phụ kiện, thiết bị cần thiết cho các bạn đam mê 
                            phượt trên khắp cả nước.Chúng tôi sẽ liên tục cập 
                            nhật những sản phẩm mới nhất, chất lượng nhất, 
                            hợp thời nhất giúp các bạn có những trải nghiệm 
                            tuyệt vời! <br> <br>
                            Điện thoại: 0352 860 701 <br>
                            Email: dophuot365@gmail.com <br>
                            Zalo: 0352 860 701 <br>
                        </div>
                    </article>

                    <article class="footer__top-policy col-lg-3 col-md-4 col-sm-6">
                        <h4 class="footer__top-policy-heading">
                            Chính sách mua hàng
                        </h4>

                        <ul class="footer__top-policy-list">
                            <li class="footer__top-policy-item">
                                <a href="#" class="footer__top-policy-link">Hình thức đặt hàng</a>
                            </li>
                            <li class="footer__top-policy-item">
                                <a href="#" class="footer__top-policy-link">Hình thức thanh toán</a>
                            </li>
                            <li class="footer__top-policy-item">
                                <a href="#" class="footer__top-policy-link">Phương thức vận chuyển</a>
                            </li>
                            <li class="footer__top-policy-item">
                                <a href="#" class="footer__top-policy-link">Chính sách đổi trả</a>
                            </li>
                            <li class="footer__top-policy-item">
                                <a href="#" class="footer__top-policy-link">Hướng dẫ sử dụng</a>
                            </li>
                        </ul>
                    </article>

                    <article class="footer__top-contact-wrap col-lg-4 col-md-4 col-sm-6">
                        <h4 class="footer__top-contact-heading">
                            Hotline liên hệ
                        </h4>

                        <div class="footer__top-contact">
                            <div class="footer__top-contact-icon">
                                <img src="front/images/phone_top.png" class="footer__top-contact-img">
                            </div>

                            <div class="footer__top-contact-phone-wrap">
                                <div class="footer__top-contact-phone">
                                    0352.860.701
                                </div>
                                <div class="footer__top-contact-des">
                                    (Tư vấn miễn phí 24/24)
                                </div>
                            </div>
                        </div>
                    
                        <h4 class="footer__top-contact-heading">
                            Kết nối với chúng tôi
                        </h4>

                        <div class="footer__top-contact-social">
                            <a href="#" class="footer__top-contact-social-link">
                                <img src="front/images/facebook.png">
                            </a>
                            <a href="#" class="footer__top-contact-social-link">
                                <img src="front/images/youtube.png">
                            </a>
                            <a href="#" class="footer__top-contact-social-link">
                                <img src="front/images/tiktok.png">
                            </a>
                            <a href="#" class="footer__top-contact-social-link">
                                <img src="front/images/zalo.png">
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section class="footer__bottom">
            <div class="container">
                <div class="row">
                    <span class="footer__bottom-content">@Bản quyền thuộc về Dophuot365.com | Thiết kế bởi NhatNguyen</span>
                </div>
            </div>
        </section>
    </footer>
    <!-- end footer -->

    <div class="main__modal">
        <div class="modal__overlay"></div>
        <div class="modal__body">
            <!-- resgist form -->
            <div class="sale-off">
                <div class="sale-off__container">
                    <h2 class="sale-off__heading">
                        Nhận phiếu giảm giá <span class="sale-off__sp">30%</span>  khi mua <br> <span class="sale-off__name">Mũ Bảo Hiểm Yohe 962 </span> 
                    </h2>
                    <div class="sale-off__img">
                        <img src="front/images/product_16.png" width="300">
                    </div>
                    
                    <a href="{{route('product')}}" class="sale-off__link">
                        <button class="sale-off__btn">Mua ngay</button>
                    </a>
                </div>

                <div class="sale-off__close">
                    <!-- <svg class="sale-off__close-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg> -->
                    x
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="front/js/jq.js"></script>
</body>
</html>   