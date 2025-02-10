<!doctype html>
<html lang="zxx">

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Radios - Electronics Store WooCommerce Template</title>

    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}" type="images/x-icon"/>

    <!-- css include -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/uikit.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
</head>

<body>

    <div class="body_wrap">

        {{-- <!-- preloder start  -->
        <div class="preloder_part">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
        <!-- preloder end  --> --}}

        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
            </svg>
        </div>
        <!-- back to top end -->

        <!-- header start -->
        <header class="header header__style-one">
            <div class="header__top-info-wrap d-none d-lg-block">
                <div class="container">
                    <div class="header__top-info ul_li_between mt-none-10">
                        <ul class="ul_li mt-10">
                            <li><i class="far fa-map-marker-alt"></i>Store Location</li>
                            <li><i class="far fa-truck"></i>Track Your Order</li>
                            <li><i class="fas fa-phone"></i>Call Us For Enquiry</li>
                            <li><i class="fas fa-heart"></i>Welcome to Radios. We provides Best Electronics item</li>
                        </ul>
                        <div class="header__top-right ul_li mt-10">
                            <div class="date">
                                <i class="fal fa-calendar-alt"></i> Sunday, February 2, 2025
                            </div>
                            <div class="header__social ml-25">
                                <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                <a href="#!"><i class="fab fa-twitter"></i></a>
                                <a href="#!"><i class="fab fa-instagram"></i></a>
                                <a href="#!"><i class="fab fa-youtube"></i></a>
                                <a href="#!"><i class="fab fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="header__middle ul_li_between justify-content-xs-center">
                    <div class="header__logo">
                        <a href="index.html">
                            <img src="assets/img/logo/logo.svg" alt="">
                        </a>
                    </div>
                    <form class="header__search-box" action="#">
						<div class="select-box">
							<select id="category" name="category">
								<option value="">All Categories</option>
								<option value="4">Summer collections</option>
								<option value="5">Breakfast & Dairy</option>
								<option value="6">Beverage & Drinks</option>
								<option value="7">Cocolate Box</option>
								<option value="8">Dried Food Corner</option>
								<option value="9">Frozen Foods</option>
								<option value="10">Baby Food Corner</option>
								<option value="11">Milk & Juices</option>
								<option value="12">Organic & Snacks</option>
							</select>
						</div>
						<input type="text" name="search" id="search" placeholder="Search For Products"
							required />
						<button type="submit"><i class="far fa-search"></i>
						</button>
					</form>
                    <div class="header__lang ul_li">
                        <div class="header__language mr-15">
                            <ul>
                                <li><a href="#!" class="lang-btn">USD <i class="far fa-chevron-down"></i></a>
                                    <ul class="lang_sub_list">
                                        <li><a href="#"></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="header__language">
                            <ul>
                                <li><a href="#!" class="lang-btn"><img src="assets/img/icon/usd_flag.png" alt="">English <i class="far fa-chevron-down"></i></a>
                                    <ul class="lang_sub_list">
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header__icons ul_li">
                        <div class="icon">
                            <a href="#!"><img src="assets/img/icon/user.svg" alt=""></a>
                        </div>
                        <div class="icon wishlist-icon">
                            <a href="#!">
                                <img src="assets/img/icon/heart.svg" alt="">
                                <span class="count">0</span>
                            </a>
                        </div>
                        <div class="cart_btn icon">
                            <img src="assets/img/icon/shopping_bag.svg" alt="">
                            <span class="count">0</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__cat-wrap" data-uk-sticky="top: 250; animation: uk-animation-slide-top;">
                <div class="container">
                    <div class="header__wrap ul_li_between">
                        <div class="header__cat ul_li" >
                            <div class="hamburger_menu">
                                <a href="javascript:void(0);" class="active">
                                    <div class="icon bar">
                                        <span><i class="fal fa-bars"></i></span>
                                    </div>
                                </a>
                            </div>
                            <ul class="category ul_li">
                                <li><a href="#!"><span><img src="assets/img/icon/hc_01.svg" alt=""></span>Laptops & Computers</a></li>
                                <li><a href="#!"><span><img src="assets/img/icon/hc_02.svg" alt=""></span>CC Tv & Camera</a></li>
                                <li><a href="#!"><span><img src="assets/img/icon/hc_03.svg" alt=""></span>Home Equipment</a></li>
                                <li><a href="#!"><span><img src="assets/img/icon/hc_04.svg" alt=""></span>Tv & Audios</a></li>
                                <li><a href="#!"><span><img src="assets/img/icon/hc_05.svg" alt=""></span>Printers & Ink</a></li>
                                <li><a href="#!"><span><img src="assets/img/icon/hc_06.svg" alt=""></span>Gaming & Fun</a></li>
                            </ul>
                        </div>
                        <div class="login-sign-btn">
                                <a class="btn btn-warning" href="{{Route('login')}}" role="button">login/signin</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->

         <!-- slide-bar start -->
         <aside class="slide-bar">
            <div class="close-mobile-menu">
                <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
            </div>

            <!-- sidebar-info start -->
            <div class="cart_sidebar">
                <button type="button" class="cart_close_btn"><i class="fal fa-times"></i></button>
                <h2 class="heading_title text-uppercase">Cart Items - <span>4</span></h2>
                <div class="cart_items_list">
                    <div class="cart_item">
                        <div class="item_image">
                            <img src="assets/img/product/img_01.png" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <h4 class="item_title">
                                Rorem ipsum dolor sit amet.
                            </h4>
                            <span class="item_price">$19.00</span>
                            <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                        </div>
                    </div>
                    <div class="cart_item">
                        <div class="item_image">
                            <img src="assets/img/product/img_02.png" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <h4 class="item_title">
                                Rorem ipsum dolor sit amet.
                            </h4>
                            <span class="item_price">$22.00</span>
                            <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                        </div>
                    </div>
                    <div class="cart_item">
                        <div class="item_image">
                            <img src="assets/img/product/img_03.png" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <h4 class="item_title">
                                Rorem ipsum dolor sit amet.
                            </h4>
                            <span class="item_price">$43.00</span>
                            <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                        </div>
                    </div>
                    <div class="cart_item">
                        <div class="item_image">
                            <img src="assets/img/product/img_04.png" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <h4 class="item_title">
                                Rorem ipsum dolor sit amet.
                            </h4>
                            <span class="item_price">$14.00</span>
                            <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                        </div>
                    </div>
                </div>
                <div class="total_price text-uppercase">
                    <span>Sub Total:</span>
                    <span>$87.00</span>
                </div>
                <ul class="btns_group ul_li">
                    <li><a href="cart.html" class="thm-btn">
                        <span class="btn-wrap">
                            <span>View Cart</span>
                            <span>View Cart</span>
                        </span>
                    </a></li>
                    <li><a href="checkout.html" class="thm-btn thm-btn__black">
                        <span class="btn-wrap">
                            <span>Checkout</span>
                            <span>Checkout</span>
                        </span>
                    </a></li>
                </ul>
            </div>
            <!-- sidebar-info end -->

            <!-- side-mobile-menu start -->
            <nav class="side-mobile-menu">
                <div class="header-mobile-search">
                    <form role="search" method="get" action="#">
                        <input type="text" placeholder="Search Keywords">
                        <button type="submit"><i class="ti-search"></i></button>
                    </form>
                </div>
                <ul id="mobile-menu-active">
                    <li class="dropdown"><a href="{{Route('index')}}">Home</a>
                        <ul class="sub-menu">
                            <li><a href="{{Route('index')}}">Home </a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Shop</a>
                        <ul class="sub-menu">
                            <li><a href="{{Route('shop')}}">view all product</a></li>
                            <li><a href="{{Route('cart')}}">Shop Cart</a></li>
                            <li><a href="{{Route('checkout')}}">Shop Checkout</a></li>
                        </ul>
                    </li>
                    <li><a href="{{Route('shop')}}">Accesories</a></li>
                    <li class="dropdown">
                        <a href="#!">Pages</a>
                        <ul class="submenu">
                            <li><a href="{{Route('about')}}">About Us</a></li>
                        </ul>
                    </li>
                    <li><a href="{{Route('contact')}}">Contact</a></li>
                </ul>
            </nav>
            <!-- side-mobile-menu end -->
        </aside>
        <div class="body-overlay"></div>
        <!-- slide-bar end -->
        <div class="container mt-2">
            @foreach ($errors->all() as $error)
                <h3>{{ $error }}</h3>
            @endforeach
        </div>
        {{-- signup form --}}
        <form class="mx-1 mx-md-4" action="{{Route('register')}}" method="POST">
            @csrf
            <div class="d-flex flex-row align-items-center mb-4">
              <i class="fas fa-user fa-lg me-3 fa-fw"></i>
              <div data-mdb-input-init class="form-outline flex-fill mb-0">
                <input type="text" id="form3Example1c" name="name" class="form-control" />
                <label class="form-label" for="form3Example1c">Your Name</label>
              </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
              <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
              <div data-mdb-input-init class="form-outline flex-fill mb-0">
                <input type="email" id="form3Example3c" name="email" class="form-control" />
                <label class="form-label" for="form3Example3c">Your Email</label>
              </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
              <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
              <div data-mdb-input-init class="form-outline flex-fill mb-0">
                <input type="password" id="form3Example4c" name="password" class="form-control" />
                <label class="form-label" for="form3Example4c">Password</label>
              </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
              <i class="fas fa-key fa-lg me-3 fa-fw"></i>
              <div data-mdb-input-init class="form-outline flex-fill mb-0">
                <input type="password" id="form3Example4cd" name="re_password" class="form-control" />
                <label class="form-label" for="form3Example4cd">Repeat your password</label>
              </div>
            </div>

            <div class="form-check d-flex justify-content-center mb-5">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
              <label class="form-check-label" for="form2Example3">
                I agree all statements in <a href="#!">Terms of service</a>
              </label>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">sign up</button>
            </div>

          </form>
    </div>
    <!-- jquery include -->
    {{-- <script src="{{asset('')}}"></script> --}}
    <script src="{{ asset("assets/js/jquery-3.5.1.min.js") }}"></script>
    <script src="{{ asset("assets/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("assets/js/slick.js") }}"></script>
    <script src="{{ asset("assets/js/backToTop.js") }}"></script>
    <script src="{{ asset("assets/js/uikit.min.js") }}"></script>
    <script src="{{ asset("assets/js/resize-sensor.min.js") }}"></script>
    <script src="{{ asset("assets/js/theia-sticky-sidebar.min.js") }}"></script>
    <script src="{{ asset("assets/js/wow.min.js") }}"></script>
    <script src="{{ asset("assets/js/jqueryui.js") }}"></script>
    <script src="{{ asset("assets/js/touchspin.js") }}"></script>
    <script src="{{ asset("assets/js/countdown.js") }}"></script>
    <script src="{{ asset("assets/js/jquery.magnific-popup.min.js") }}"></script>
    <script src="{{ asset("assets/js/metisMenu.min.js") }}"></script>
    <script src="{{ asset("assets/js/main.js") }}"></script>
</body>
</html>
