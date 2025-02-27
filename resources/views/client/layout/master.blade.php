<!DOCTYPE html>
<html lang="en" data-bs-theme="light">


<!-- Mirrored from thetork.com/demos/html/torganic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jan 2025 03:56:44 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <title>Torganic | @yield('title')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Sites meta Data -->
    <meta name="application-name" content="Torganic | Organic Food eCommerce HTML Template">
    <meta name="admin" content="thetork">
    <meta name="keywords" content="Torganic, Crypto, Forex, and Stocks Trading Business">
    <meta name="description"
        content="Torganic is a premium, fully responsive HTML template designed for organic food eCommerce sites. Featuring clean, modern design and powerful functionality, it’s perfect for creating a professional online store. Boost your sales with Torganic's user-friendly layout, SEO-optimized code, and seamless shopping experience.">

    <!-- OG meta data -->
    <meta property="og:title" content="Torganic | Organic Food eCommerce HTML Template">
    <meta property="og:site_name" content=Torganic>
    <meta property="og:url" content="index-2.html">
    <meta property="og:description"
        content="Welcome to Torganic – Organic Food eCommerce HTML Template.

    Discover Torganic, a meticulously designed HTML template tailored for organic food and eco-friendly eCommerce websites. Whether you're building an online store for fresh produce, natural products, or sustainable goods, Torganic offers a clean, modern design with powerful functionality to make your site stand out.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('client/assets') }}/images/og.png">



    <link rel="shortcut icon" href="{{ asset('client/assets') }}/images/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('client/assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('client/assets') }}/css/aos.css">
    <link rel="stylesheet" href="{{ asset('client/assets') }}/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('client/assets') }}/css/swiper-bundle.min.css">
    <!-- main css for template -->
    <link rel="stylesheet" href="{{ asset('client/assets') }}/css/style.css">
</head>

<body>

    <!-- ===============>> Preloader start here <<================= -->
    <div class="preloader">
        <img src="{{ asset('client/assets') }}/images/logo/preloader.png" alt="preloader icon">
    </div>
    <!-- ===============>> Preloader end here <<================= -->



    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Thành công!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif



    <!-- ===============>> Header section start here <<================= -->
    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <div class="header__brand">
                    <a href="/"><img src="{{ asset('client/assets') }}/images/logo/logo.svg" alt="logo"></a>
                </div>

                <!-- section navbar Menu -->


                <div class="header__navbar">
                    <div class="header__overlay"></div>
                    <nav class="menu">
                        <div class="menu-mobile-header">
                            <button type="button" class="menu-mobile-arrow"><i
                                    class="fa-solid fa-arrow-left"></i></button>
                            <div class="menu-mobile-title"></div>
                            <button type="button" class="menu-mobile-close"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                        <ul class="menu-section">
                            <li class="menu-item-has-children">
                                <a href="/">Home </a>
                            </li>
                            <li><a href="{{ route('flash-sale') }}">Flash Sale</a></li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('blogs') }}">Blog</a>

                            </li>

                            <li class="menu-item-has-children">
                                <a href="{{ route('shop') }}">Shop</a>
                            </li>

                            <li><a href="{{ route('contact') }}">Contact</a></li>

                        </ul>
                    </nav>
                </div>

                <div class="header__action">
                    @if (auth()->check())
                        <a class="header__action-btn d-none d-xl-grid"  href="{{ route('logout') }}" id="logout-btn" ><i
                                class="fa-regular fa-user"></i></a>
                    @else
                        <a class="header__action-btn d-none d-xl-grid" href="{{ route('login') }}"><i
                                class="fa-regular fa-user"></i></a>
                    @endif
                    <a class="header__action-btn d-none d-xl-grid" href="{{route('wishlist')}}"><i
                            class="fa-regular fa-heart"></i></a>
                    <a class="header__action-btn d-none d-xl-grid" href="{{route('cart')}}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="cart-icon">
                            <path
                                d="M4.92383 18.2228C4.92383 18.6943 5.11832 19.1464 5.46451 19.4798C5.81071 19.8132 6.28025 20.0005 6.76985 20.0005C7.25944 20.0005 7.72899 19.8132 8.07518 19.4798C8.42138 19.1464 8.61587 18.6943 8.61587 18.2228C8.61587 17.7513 8.42138 17.2991 8.07518 16.9658C7.72899 16.6324 7.25944 16.4451 6.76985 16.4451C6.28025 16.4451 5.81071 16.6324 5.46451 16.9658C5.11832 17.2991 4.92383 17.7513 4.92383 18.2228Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M15.0762 18.2228C15.0762 18.6943 15.2707 19.1464 15.6169 19.4798C15.9631 19.8132 16.4326 20.0005 16.9222 20.0005C17.4118 20.0005 17.8813 19.8132 18.2275 19.4798C18.5737 19.1464 18.7682 18.6943 18.7682 18.2228C18.7682 17.7513 18.5737 17.2991 18.2275 16.9658C17.8813 16.6324 17.4118 16.4451 16.9222 16.4451C16.4326 16.4451 15.9631 16.6324 15.6169 16.9658C15.2707 17.2991 15.0762 17.7513 15.0762 18.2228Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M16.923 16.4446H6.76985V4.00049H4.92383" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.76953 5.77881L19.6917 6.66767L18.7687 12.8897H6.76953" stroke="currentColor"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <a href="{{route('cart')}}" class="header__action-btn menu-icon d-xl-none"><i
                            class="fa-solid fa-cart-shopping"></i></a>
                    <button id="trk-search-icon" class="menu-icon search-icon header__action-btn"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                    <button type="button" class="menu-mobile-trigger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <div class="trk-search">
                        <div class="trk-search__inner">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Here"
                                    aria-label="trk Search Bar" aria-describedby="trk-search">
                                <button type="submit" class="trk-search__btn" id="trk-search">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="trk-search__overlay"></div>
                </div>
            </div>

        </div>
    </header>
    <!-- ===============>> Header section end here <<================= -->



    <!-- ===============>> Banner section start here <<================= -->

    <!-- ===============>> Banner section end here <<================= -->
    @yield('content')



    <!-- ===============>> footer start here <<================= -->
    <footer class="footer ">
        <div class="footer__top">
            <div class="container">
                <div class="footer__top-wrapper">
                    <div class="row gy-5 gx-2">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="footer__about">
                                <a href="/" class="footer__about-logo"><img
                                        src="{{ asset('client/assets') }}/images/logo/logo-dark.svg"
                                        alt="Logo"></a>
                                <p class="footer__about-moto ">We are ensuring a delightful shopping experience for
                                    every customer.</p>
                                <div class="footer__social">
                                    <ul class="social">
                                        <li class="social__item">
                                            <a href="#" class="social__link social__link--style2"><i
                                                    class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="social__item">
                                            <a href="#" class="social__link social__link--style2"><i
                                                    class="fa-brands fa-linkedin-in"></i></a>
                                        </li>
                                        <li class="social__item">
                                            <a href="#" class="social__link social__link--style2"><i
                                                    class="fab fa-youtube"></i></a>
                                        </li>
                                        <li class="social__item">
                                            <a href="#" class="social__link social__link--style2"><i
                                                    class="fa-brands fa-x-twitter"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-3 col-sm-6 col-6">
                            <div class="footer__links">
                                <div class="footer__links-tittle">
                                    <h4>Support</h4>
                                </div>
                                <div class="footer__links-content">
                                    <ul class="footer__linklist">
                                        <li class="footer__linklist-item"> <a href="contact.html">Help</a>
                                        </li>
                                        <li class="footer__linklist-item"> <a href="contact.html">Hotline</a>
                                        </li>
                                        <li class="footer__linklist-item"> <a href="contact.html">Contact</a> </li>
                                        <li class="footer__linklist-item"> <a href="#">Chat now</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-3 col-sm-6 col-6">
                            <div class="footer__links">
                                <div class="footer__links-tittle">
                                    <h4>Account</h4>
                                </div>
                                <div class="footer__links-content">
                                    <ul class="footer__linklist">
                                        <li class="footer__linklist-item"> <a href="">Sign In</a>
                                        </li>
                                        <li class="footer__linklist-item"> <a href="{{route('cart')}}">View Cart</a>
                                        </li>
                                        <li class="footer__linklist-item"> <a href="{{route('wishlist')}}">My Wishlist</a>
                                        </li>
                                        <li class="footer__linklist-item"> <a href="invoice.html">Shipping Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-6">
                            <div class="footer__links">
                                <div class="footer__links-tittle">
                                    <h4>Quick Links</h4>
                                </div>
                                <div class="footer__links-content">
                                    <ul class="footer__linklist">
                                        <li class="footer__linklist-item"> <a href="#">Customer Support</a>
                                        </li>
                                        <li class="footer__linklist-item"> <a href="#">Delivery Details</a>
                                        </li>
                                        <li class="footer__linklist-item"> <a href="#">Terms & Conditions</a>
                                        </li>
                                        <li class="footer__linklist-item"> <a href="#">Privacy Policy</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-1 col-md-6 col-sm-6">
                            <div class="footer__links">
                                <div class="footer__links-tittle">
                                    <h4>Company</h4>
                                </div>
                                <div class="footer__links-content">
                                    <ul class="footer__linklist">
                                        <li class="footer__linklist-item"> <a href="flash-sale.html">Flash Sale</a>
                                        </li>
                                        <li class="footer__linklist-item"> <a href="blogs.html">Blogs</a>
                                        </li>
                                        <li class="footer__linklist-item"> <a href="shop.html">All Brands</a> </li>
                                        <li class="footer__linklist-item"> <a href="#">Coupons</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer__bottom">
            <div class="container">
                <div class="footer__bottom-wrapper">
                    <div class="footer__bottom-payment">
                        <ul class="payment">
                            <li class="payment__item">
                                <img src="{{ asset('client/assets') }}/images/payment/1.png"
                                    alt="payment method logo">
                            </li>
                            <li class="payment__item">
                                <img src="{{ asset('client/assets') }}/images/payment/2.png"
                                    alt="payment method logo">
                            </li>
                            <li class="payment__item">
                                <img src="{{ asset('client/assets') }}/images/payment/3.png"
                                    alt="payment method logo">
                            </li>
                            <li class="payment__item">
                                <img src="{{ asset('client/assets') }}/images/payment/4.png"
                                    alt="payment method logo">
                            </li>
                            <li class="payment__item">
                                <img src="{{ asset('client/assets') }}/images/payment/5.png"
                                    alt="payment method logo">
                            </li>
                        </ul>
                    </div>
                    <div class="footer__bottom-copyright">
                        <p class=" mb-0">Copyright© 2024 <a href="https://themeforest.net/user/thetork"
                                target="_blank">thetork</a>.
                            All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer__shape">
            <span class="footer__shape-item footer__shape-item--1"><img
                    src="{{ asset('client/assets') }}/images/banner/home1/leaf.png" alt="shape icon"></span>

            <span class="footer__shape-item footer__shape-item--2"><img
                    src="{{ asset('client/assets') }}/images/banner/home1/tomato.png" alt="shape icon"></span>

            <span class="footer__shape-item footer__shape-item--3"><img
                    src="{{ asset('client/assets') }}/images/banner/home1/chilli.png" alt="shape icon"></span>
        </div>
    </footer>
    <!-- ===============>> footer end here <<================= -->



    <!-- ===============>> scrollToTop start here <<================= -->
    <a href="#" class="scrollToTop scrollToTop--style1"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
    <!-- ===============>> scrollToTop ending here <<================= -->


    <!-- vendor plugins -->

    <script src="{{ asset('client/assets') }}/js/metismenujs.min.js"></script>
    <script src="{{ asset('client/assets') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('client/assets') }}/js/all.min.js"></script>
    <script src="{{ asset('client/assets') }}/js/swiper-bundle.min.js"></script>
    <script src="{{ asset('client/assets') }}/js/aos.js"></script>
    <script src="{{ asset('client/assets') }}/js/fslightbox.js"></script>
    <script src="{{ asset('client/assets') }}/js/purecounter_vanilla.js"></script>
    <script src="{{ asset('client/assets') }}/js/trk-menu.js"></script>
    <script src="{{ asset('client/assets') }}/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            cosnt logoutBtn = document.getElementById('logoutBtn');
            if(logoutBtn){
                console.log(logoutBtn);
            }
        })
    </script>
</body>


<!-- Mirrored from thetork.com/demos/html/torganic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jan 2025 03:57:17 GMT -->

</html>
