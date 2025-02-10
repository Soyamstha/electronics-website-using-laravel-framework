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

        <main>

            <!-- hero start -->
            <div class="hero hero__height ul_li" data-background="assets/img/bg/hero_bg.jpg">
                <div class="container">
                    <div class="row align-items-center mt-none-30">
                        <div class="col-lg-9 mt-30">
                            <div class="row align-items-center flex-row-reverse mt-none-30">
                                <div class="col-lg-7 mt-30">
                                    <div class="hero__product">
                                        <div class="hero__product-wrap">
                                            <div class="hero__product-carousel">
                                                <div class="hero__product-item">
                                                    <img src="assets/img/product/img_52.png" alt="">
                                                </div>
                                            </div>
                                            <span class="hero__product-offer">
                                                <span class="discount">29<span>%</span></span>
                                                <span>off</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 mt-30">
                                    <div class="hero__content">
                                        <span class="subtitle">100% Best Product</span>
                                        <h2 class="title">Waterma Watch <br> Beats Studio</h2>
                                        <p>Widescreen 4k ultra Laptop</p>
                                        <h3 class="price">$ 1800.99 / <span>$2860</span></h3>
                                        <div class="mxw_343 mb-20">
                                            <div class="product__progress progress h-16 color-primary">
                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="ul_li_between mb-6">
                                                <span class="product__available">Available: <span>334</span></span>
                                                <span class="product__available">Stock: <span>180</span></span>
                                            </div>
                                        </div>
                                        <a class="hero__btn" href="#!">Shop Now <i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-30">
                            <div class="hot-deal__slide-wrap style-2 bg-white ">
                                <h2 class="section-heading mb-25"><span>Top Product</span></h2>
                                <div class="hot-deal__slide tx-arrow">
                                    <div class="hot-deal__item text-center">
                                        <div class="thumb">
                                            <a href="#!">
                                                <img src="assets/img/product/img_55.png" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <ul class="rating-star ul_li_center mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h2 class="title mb-15"><a href="#!">Asus 2022 Vivobook</a></h2>
                                            <h4 class="product__price mb-20"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                            <div class="mxw_216 m-auto">
                                                <div class="product__progress progress mb-6 h-8 color-primary">
                                                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="ul_li_between">
                                                    <span class="product__available">Available: <span>334</span></span>
                                                    <span class="product__available">Sold: <span>180</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hot-deal__item text-center">
                                        <div class="thumb">
                                            <a href="#!">
                                                <img src="assets/img/product/img_55.png" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <ul class="rating-star ul_li_center mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h2 class="title mb-15"><a href="#!">Asus 2022 Vivobook</a></h2>
                                            <h4 class="product__price mb-20"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                            <div class="mxw_216 m-auto">
                                                <div class="product__progress progress mb-6 h-8 color-primary">
                                                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="ul_li_between">
                                                    <span class="product__available">Available: <span>334</span></span>
                                                    <span class="product__available">Sold: <span>180</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hot-deal__item text-center">
                                        <div class="thumb">
                                            <a href="#!">
                                                <img src="assets/img/product/img_55.png" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <ul class="rating-star ul_li_center mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h2 class="title mb-15"><a href="#!">Asus 2022 Vivobook</a></h2>
                                            <h4 class="product__price mb-20"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                            <div class="mxw_216 m-auto">
                                                <div class="product__progress progress mb-6 h-8 color-primary">
                                                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="ul_li_between">
                                                    <span class="product__available">Available: <span>334</span></span>
                                                    <span class="product__available">Sold: <span>180</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- hero end -->

            <!-- feature start -->
            <div class="feature pt-40 pb-30">
                <div class="container">
                    <div class="feature__wrap ul_li">
                        <div class="feature__item ul_li">
                            <div class="icon">
                                <img src="assets/img/icon/feat_01.svg" alt="">
                            </div>
                            <div class="content">
                                <h3>Free Shipping</h3>
                                <p>Free shipping over RS 1000</p>
                            </div>
                        </div>
                        <div class="feature__item ul_li">
                            <div class="icon">
                                <img src="assets/img/icon/feat_02.svg" alt="">
                            </div>
                            <div class="content">
                                <h3>Payment Secure</h3>
                                <p>Got 100% Payment Safe</p>
                            </div>
                        </div>
                        <div class="feature__item ul_li">
                            <div class="icon">
                                <img src="assets/img/icon/feat_03.svg" alt="">
                            </div>
                            <div class="content">
                                <h3>Support 24/7</h3>
                                <p>Top quialty 24/7 Support</p>
                            </div>
                        </div>
                        <div class="feature__item ul_li">
                            <div class="icon">
                                <img src="assets/img/icon/feat_04.svg" alt="">
                            </div>
                            <div class="content">
                                <h3>100% Money Back</h3>
                                <p>Cutomers Money Backs</p>
                            </div>
                        </div>
                        <div class="feature__item ul_li">
                            <div class="icon">
                                <img src="assets/img/icon/feat_05.svg" alt="">
                            </div>
                            <div class="content">
                                <h3>Quality Products</h3>
                                <p>We Insure Product Quailty</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- feature end -->

            <!-- tab product start -->
            <div class="tab-product pt-40 pb-40">
                <div class="container">
                    <div class="product__nav-wrap ul_li_between mb-20">
                        <h2 class="section-heading"><span>Hot <span>New Arrival</span> You May Like</span></h2>
                    </div>
                    <div class="vd-products">
                        <div class="tab-content tab_has_slider" id="vd-myTabContent">
                            <div class="tab-pane fade" id="vd-tab1" role="tabpanel" aria-labelledby="vd-tab-01">
                                <div class="tab-product__slide tx-arrow">
                                    <div class="tab-product__item tx-product text-center">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_01.png" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <div class="product__review ul_li_center">
                                                <ul class="rating-star ul_li mr-10">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <span>(126)</span>
                                            </div>
                                            <h3 class="title"><a href="shop-single.html">Portable 2TB External Hard Drive Portable HDD</a></h3>
                                            <span class="price">( $28.52 - <span class="old-price">$30.00</span> )</span>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-skew">New</span>
                                    </div>
                                    <div class="tab-product__item tx-product text-center">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_02.png" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <div class="product__review ul_li_center">
                                                <ul class="rating-star ul_li mr-10">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <span>(126)</span>
                                            </div>
                                            <h3 class="title"><a href="shop-single.html">Ninja Compact Smoothie & Food Processing Blender</a></h3>
                                            <span class="price">( $28.52 - <span class="old-price">$30.00</span> )</span>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-skew">New</span>
                                    </div>
                                    <div class="tab-product__item tx-product text-center">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_03.png" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <div class="product__review ul_li_center">
                                                <ul class="rating-star ul_li mr-10">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <span>(126)</span>
                                            </div>
                                            <h3 class="title"><a href="shop-single.html">Skullcandy Dime True In-Ear Earbuds – Golden Red</a></h3>
                                            <span class="price">( $28.52 - <span class="old-price">$30.00</span> )</span>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-skew">New</span>
                                    </div>
                                    <div class="tab-product__item tx-product text-center">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_04.png" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <div class="product__review ul_li_center">
                                                <ul class="rating-star ul_li mr-10">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <span>(126)</span>
                                            </div>
                                            <h3 class="title"><a href="shop-single.html">Galaxy S20 FE 5G Cell Phone, Factory Unlocked</a></h3>
                                            <span class="price">( $28.52 - <span class="old-price">$30.00</span> )</span>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-skew">New</span>
                                    </div>
                                    <div class="tab-product__item tx-product text-center">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_05.png" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <div class="product__review ul_li_center">
                                                <ul class="rating-star ul_li mr-10">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <span>(126)</span>
                                            </div>
                                            <h3 class="title"><a href="shop-single.html">Rokinon Xeen CF 16mm T2.6 Pro Cinema Wide</a></h3>
                                            <span class="price">( $28.52 - <span class="old-price">$30.00</span> )</span>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-skew">New</span>
                                    </div>
                                    <div class="tab-product__item tx-product text-center">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_06.png" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <div class="product__review ul_li_center">
                                                <ul class="rating-star ul_li mr-10">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <span>(126)</span>
                                            </div>
                                            <h3 class="title"><a href="shop-single.html">Amazon Basics Window Air Conditioner Control</a></h3>
                                            <span class="price">( $28.52 - <span class="old-price">$30.00</span> )</span>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-skew">New</span>
                                    </div>
                                    <div class="tab-product__item tx-product text-center">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_02.png" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <div class="product__review ul_li_center">
                                                <ul class="rating-star ul_li mr-10">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <span>(126)</span>
                                            </div>
                                            <h3 class="title"><a href="shop-single.html">JBL Tune 510BT Wireless On-Ear Head phones Blue</a></h3>
                                            <span class="price">( $28.52 - <span class="old-price">$30.00</span> )</span>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-skew">New</span>
                                    </div>
                                    <div class="tab-product__item tx-product text-center">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="assets/img/product/img_03.png" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <div class="product__review ul_li_center">
                                                <ul class="rating-star ul_li mr-10">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <span>(126)</span>
                                            </div>
                                            <h3 class="title"><a href="shop-single.html">Skullcandy Dime True In-Ear Earbuds – Golden Red</a></h3>
                                            <span class="price">( $28.52 - <span class="old-price">$30.00</span> )</span>
                                        </div>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <span class="badge-skew">New</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tab product end -->

            <!-- rd slide product start -->
            <div class="rd-slide-product">
                <div class="container">
                    <div class="row mt-none-30">
                        <div class="col-lg-3 mt-30">
                            <div class="product-category" data-background="assets/img/bg/cat_bg.jpg">
                                <h2 class="section-heading mb-25"><span><span>Catagory</span></span></h2>
                                <ul class="list-unstyled">
                                    <li class="cat-item-has-children"><a href="#!"><img src="assets/img/icon/cat_01.svg" alt="">Bluetooth speaker</a></li>
                                    <li class="cat-item-has-children"><a href="#!"><img src="assets/img/icon/cat_02.svg" alt="">Digital camera</a></li>
                                    <li class="cat-item-has-children"><a href="#!"><img src="assets/img/icon/cat_03.svg" alt="">Laser printer</a></li>
                                    <li><a href="#!"><img src="assets/img/icon/cat_04.svg" alt="">Electric frying pan</a></li>
                                    <li class="cat-item-has-children"><a href="#!"><img src="assets/img/icon/cat_05.svg" alt="">Robotics vacuum</a></li>
                                    <li class="cat-item-has-children"><a href="#!"><img src="assets/img/icon/cat_06.svg" alt="">external hard drive</a></li>
                                    <li><a href="#!"><img src="assets/img/icon/cat_07.svg" alt="">Electric razor</a></li>
                                    <li><a href="#!"><img src="assets/img/icon/cat_08.svg" alt="">Washing machine</a></li>
                                    <li class="cat-item-has-children"><a href="#!"><img src="assets/img/icon/cat_09.svg" alt="">Rice cooker</a></li>
                                    <li><a href="#!"><img src="assets/img/icon/cat_10.svg" alt="">Telivsion & Monitor</a></li>
                                    <li class="more-item"><a href="#!">+ More item</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 mt-30">
                            <div class="rd-slide-products">
                                <h2 class="section-heading mb-25"><span>Trending Product</span></h2>
                                @foreach ($products as $product)
                                <div class="rd-product__slide tx-arrow">
                                    <div class="rd-product__slide-item">
                                        <div class="product__item">
                                            <div class="product__img text-center pos-rel">
                                                <a href=""><img src="{{$product->image}}" alt=""></a>
                                            </div>
                                            <div class="product__content">
                                                <div class="product__review ul_li_center">
                                                    <ul class="rating-star ul_li mr-10">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                    </ul>
                                                    <span>(126) Review</span>
                                                </div>
                                                <h2 class="product__title"><a href="">{{$product->name}}</a></h2>
                                                <h4 class="product__price"><span class="new">
                                                    @if ($product->sellprice!=null)
                                                        <span class="new">RS{{$product->sellprice}}</span>
                                                        <span class="old">RS{{$product->price}}</span></h4>
                                                    @else
                                                        <span class="new">RS{{$product->price}}</span></h4>
                                                    @endif
                                                </h4>
                                            </div>
                                            <ul class="product__action">
                                                <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                                <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                                <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                            </ul>
                                            <span class="badge-skew">New</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- rd slide product end -->


            <!-- add start -->
            <div class="add pt-50 pb-50">
                <div class="container">
                    <div class="add__wrap bg_img" data-background="assets/img/bg/add_bg_01.jpg">
                        <div class="add__text">
                            <span><span>10%</span>  Free Shipping On All Order Over <span>RS 1000</span></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- add end -->

            <!-- brand start -->
            <div class="brand pt-80 pb-80">
                <div class="container">
                    <div class="brand__active">
                        <div class="brand__item">
                            <a href="#!">
                                <img src="assets/img/brand/img_01.png" alt="">
                            </a>
                        </div>
                        <div class="brand__item">
                            <a href="#!">
                                <img src="assets/img/brand/img_02.png" alt="">
                            </a>
                        </div>
                        <div class="brand__item">
                            <a href="#!">
                                <img src="assets/img/brand/img_03.png" alt="">
                            </a>
                        </div>
                        <div class="brand__item">
                            <a href="#!">
                                <img src="assets/img/brand/img_04.png" alt="">
                            </a>
                        </div>
                        <div class="brand__item">
                            <a href="#!">
                                <img src="assets/img/brand/img_05.png" alt="">
                            </a>
                        </div>
                        <div class="brand__item">
                            <a href="#!">
                                <img src="assets/img/brand/img_06.png" alt="">
                            </a>
                        </div>
                        <div class="brand__item">
                            <a href="#!">
                                <img src="assets/img/brand/img_03.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand end -->

        </main>

        <!-- footer start -->
        <footer class="footer" data-background="assets/img/bg/footer_bg.jpg">
            <div class="newslater newslater__border pt-30 pb-30">
                <div class="container">
                    <div class="newslater__two ul_li">
                        <div class="newslater__content">
                            <h2 class="title">We are ready to <span>help</span></h2>
                            <p>For information Consult with our expert members</p>
                        </div>
                        <form class="newslater__form" action="#!">
                            <input placeholder="Enter your Email" type="text">
                            <button>Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer__main pt-90 pb-90">
                    <div class="row mt-none-40">
                        <div class="footer__widget col-lg-3 col-md-6 mt-40">
                            <div class="footer__logo mb-20">
                                <a href="index.html"><img src="assets/img/logo/logo.svg" alt=""></a>
                            </div>
                            <ul class="footer__info mt-30">
                                <li><i class="far fa-map-marker-alt"></i>madhapur thimi ,Nepa</li>
                                <li><i class="fas fa-phone"></i>+977-9841736211</li>
                            </ul>
                            <div class="apps-img mt-15 ul_li">
                                <div class="app mt-15">
                                    <a href="#!"><img src="assets/img/icon/google_play.png" alt=""></a>
                                </div>
                                <div class="app mt-15">
                                    <a href="#!"><img src="assets/img/icon/app_store.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="footer__widget col-lg-3 col-md-6 mt-40">
                            <h2 class="title">Find It Fast</h2>
                            <ul class="quick-links">
                                <li><a href="#!">Laptops & Computers</a></li>
                                <li><a href="#!">Cameras & Photography</a></li>
                                <li><a href="#!">Smart Phones & Tablets</a></li>
                                <li><a href="#!">Video Games & Consoles</a></li>
                                <li><a href="#!">TV & Audio</a></li>
                                <li><a href="#!">Gadgets</a></li>
                                <li><a href="#!">Waterproof Headphones</a></li>
                            </ul>
                        </div>

                        <div class="footer__widget col-lg-3 col-md-6 mt-40">
                            <h2 class="title">Quick Links</h2>
                            <ul class="quick-links">
                                <li><a href="#!">Your Account</a></li>
                                <li><a href="#!">Returns & Exchanges</a></li>
                                <li><a href="#!">Return Center</a></li>
                                <li><a href="#!">Purchase Hisotry</a></li>
                                <li><a href="#!">App Download</a></li>
                                <li><a href="#!">Latest News Blog</a></li>
                                <li><a href="#!">Shipping & Delivery</a></li>
                            </ul>
                        </div>
                        <div class="footer__widget col-lg-3 col-md-6 mt-40">
                            <h2 class="title">Service us</h2>
                            <ul class="category">
                                <li><a href="#!">Support Center</a></li>
                                <li><a href="#!">Term & Conditions</a></li>
                                <li><a href="#!">Shipping</a></li>
                                <li><a href="#!">Privacy Policy</a></li>
                                <li><a href="#!">Help</a></li>
                                <li><a href="#!">Products Return</a></li>
                                <li><a href="#!">FAQS</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer__bottom ul_li_center">
                    <div class="footer__copyright mt-15">
                        &copy; 2022 <a href="#!">Themexriver</a> . All Rights Reserved.
                    </div>
                    <div class="footer__social mt-15">
                        <a href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a href="#!"><i class="fab fa-twitter"></i></a>
                        <a href="#!"><i class="fab fa-instagram"></i></a>
                        <a href="#!"><i class="fab fa-youtube"></i></a>
                        <a href="#!"><i class="fab fa-pinterest"></i></a>
                    </div>
                    <div class="payment_method mt-15">
                        <img src="assets/img/bg/payment_method.png" alt="">
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->


        <!-- start cookies-area -->
        <div class="cookies-area">
            <p> This website uses cookies to improve your experience. By using this website you agree to our <a href="#">Data Protection Policy</a>. </p>
            <a href="#" class="read-more">Read more</a>
            <div>
                <button class="cookie-btn">Accept</button>
            </div>
        </div>
        <!-- end cookies-area -->


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
