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

        <!-- preloder start  -->
        <div class="preloder_part">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
        <!-- preloder end  -->

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
                                <i class="fal fa-calendar-alt"></i> Friday, July 27, 2020
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
                                        <li><a href="#">USD</a></li>
                                        <li><a href="#">BDT</a></li>
                                        <li><a href="#">EUR</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="header__language">
                            <ul>
                                <li><a href="#!" class="lang-btn"><img src="assets/img/icon/usd_flag.png" alt="">English <i class="far fa-chevron-down"></i></a>
                                    <ul class="lang_sub_list">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Arabic</a></li>
                                        <li><a href="#">Bangla</a></li>
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
                            <a class="thm-btn" href="account.html">
                                <span class="btn-wrap">
                                    <span>Login / Sign Up</span>
                                    <span>Login / Sign Up</span>
                                </span>
                            </a>
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
                    <li class="dropdown"><a href="index.html">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Home One</a></li>
                            <li><a href="home-2.html">Home Two</a></li>
                            <li><a href="home-3.html">Home Three</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Shop</a>
                        <ul class="sub-menu">
                            <li><a href="shop.html">Shop Default</a></li>
                            <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                            <li><a href="shop-single.html">Shop Single</a></li>
                            <li><a href="cart.html">Shop Cart</a></li>
                            <li><a href="checkout.html">Shop Checkout</a></li>
                            <li><a href="account.html">Account</a></li>
                        </ul>
                    </li>
                    <li><a href="shop.html">Accesories</a></li>
                    <li class="dropdown">
                        <a href="#!">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="news.html">Blog</a></li>
                            <li><a href="news-single.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#!">Pages</a>
                        <ul class="submenu">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="about.html">Account</a></li>
                            <li><a href="404.html">404</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
            <!-- side-mobile-menu end -->
        </aside>
        <div class="body-overlay"></div>
        <!-- slide-bar end -->

        <main>
            @php
            $total = 0;
            @endphp
            @foreach (Session::get('cart') as $item)
            @php
                $total=$total+$item['quantity']*$item['price'];
                @endphp
            @endforeach
            <!-- breadcrumb start -->
            <section class="breadcrumb-area">
                <div class="container">
                    <div class="radios-breadcrumb breadcrumbs">
                                <form name="checkout" method="post" class="checkout woocommerce-checkout" action="{{Route('place_order')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col2-set" id="customer_details">
                                        <div class="coll-1">
                                            <div class="woocommerce-billing-fields">

                                                <h3>Billing Details</h3>

                                                <p class="form-row form-row form-row-first validate-required" id="billing_first_name_field">
                                                    <label for="billing_first_name" class="">First Name <abbr class="required" title="required">*</abbr></label>
                                                    <input type="text" class="input-text " name="first_name" id="billing_first_name" placeholder="" autocomplete="given-name" value="" />
                                                </p>

                                                <p class="form-row form-row form-row-last validate-required" id="billing_last_name_field">
                                                    <label for="billing_last_name" class="">Last Name <abbr class="required" title="required">*</abbr></label>
                                                    <input type="text" class="input-text " name="last_name" id="billing_last_name" placeholder="" autocomplete="family-name" value="" />
                                                </p>

                                                <p class="form-row form-row form-row-first validate-required validate-email" id="billing_email_field">
                                                    <label for="billing_email" class="">Email Address <abbr class="required" title="required">*</abbr></label>
                                                    <input type="email" class="input-text " name="email" id="billing_email" placeholder="" autocomplete="email" value="" />
                                                </p>

                                                <p class="form-row form-row form-row-last validate-required validate-phone" id="billing_phone_field">
                                                    <label for="billing_phone" class="">Phone <abbr class="required" title="required">*</abbr></label>
                                                    <input type="tel" class="input-text " name="phone" id="billing_phone" placeholder="" autocomplete="tel" value="" />
                                                </p>
                                                <div class="clear"></div>

                                                <p class="form-row form-row form-row-wide address-field validate-required" id="billing_address_1_field">
                                                    <label for="billing_address_1" class="">Address <abbr class="required" title="required">*</abbr></label>
                                                    <input type="text" class="input-text " name="address1" id="billing_address_1" placeholder="Street address" autocomplete="address-line1" value="" />
                                                </p>

                                                <p class="form-row form-row form-row-wide address-field" id="billing_address_2_field">
                                                    <input type="text" class="input-text " name="address2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" autocomplete="address-line2" value="" />
                                                </p>

                                                <p class="form-row form-row address-field validate-postcode validate-required form-row-first  woocommerce-invalid-required-field" id="billing_city_field">
                                                    <label for="billing_city" class="">Town / City <abbr class="required" title="required">*</abbr></label>
                                                    <input type="text" class="input-text " name="city" id="billing_city" placeholder="" autocomplete="address-level2" value="" />
                                                </p>
                                                <input type="hidden" name="cost" value="{{$total}}">
                                                <p>
                                                    <button type="submit" class="btn btn-primary">Place order</button>
                                                </p>

                                            </div>
                                        </div>


                                    </div>

                                    <h3 id="order_review_heading">Your order</h3>

                                    <div id="order_review" class="woocommerce-checkout-review-order">
                                        <table class="shop_table woocommerce-checkout-review-order-table">
                                            <thead>
                                                <tr>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-total">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach(Session::get('cart') as $item)
                                                <tr class="cart_single">
                                                    <td class="product-name">{{$item['name']}} </td>
                                                    <td class="product-total">
                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Rs </span>{{$item['price']}}</span>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>



                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">RS </span>{{$total}}</span></strong> </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end checkout-section -->

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
                            <p>4517 Washington Ave. Manchester, Kentucky 39495 ashington Ave. Manchester,</p>
                            <ul class="footer__info mt-30">
                                <li><i class="far fa-map-marker-alt"></i>254 Lillian Blvd, Holbrook</li>
                                <li><i class="fas fa-phone"></i>1-800-654-3210</li>
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
