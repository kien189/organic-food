@extends('client.layout.master')
@section('title','Blogs')
@section('content')
  <!-- ================> Page header start here <================== -->
  <section class="page-header bg--cover" style="background-image:url({{asset('client/assets')}}/images/header/1.png)">
    <div class="container">
      <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
        <h1>Blogs</h1>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item "><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog Right Sidebar</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>
  <!-- ================> Page header end here <================== -->





  <!-- ===============>> Blog section start here <<================= -->
  <section class="blog padding-top padding-bottom section-bg ">
    <div class="container">
      <div class="blog__wrapper" data-aos="fade-up" data-aos-duration="1000">
        <div class="row g-4 align-items-center justify-content-center">
          <div class="col-lg-4 col-md-6">
            <div class="blog__item">
              <div class="blog__item-inner">
                <div class="blog__thumb">
                  <img src="{{asset('client/assets')}}/images/blog/details/1.png" alt="blog Images">
                </div>

                <div class="blog__content">
                  <div class="blog__meta">
                    <a href="blog-left-sidebar.html" class="blog__meta-tag blog__meta-tag--style1">Ecommerce</a>
                  </div>
                  <h4> <a href="blog-details.html">Comprehensive Guide Efficient Grocery Shopping</a>
                  </h4>

                  <div class="blog__admin">
                    <div class="blog__admin-name">
                      <span><i class="fa-regular fa-user"></i></span> By Jex
                    </div>
                    <div class="blog__admin-date">
                      <span><i class="fa-regular fa-calendar-check"></i></span> Sep 20, 2024
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="blog__item">
              <div class="blog__item-inner">
                <div class="blog__thumb">
                  <img src="{{asset('client/assets')}}/images/blog/details/2.png" alt="blog Images">
                </div>

                <div class="blog__content">
                  <div class="blog__meta">
                    <a href="blog-left-sidebar.html" class="blog__meta-tag blog__meta-tag--style2">Essentials</a>
                  </div>
                  <h4> <a href="blog-details.html">Navigating the Freshest Produce in Your Online Grocery Cart</a></h4>

                  <div class="blog__admin">
                    <div class="blog__admin-name">
                      <span><i class="fa-regular fa-user"></i></span> By Canon
                    </div>
                    <div class="blog__admin-date">
                      <span><i class="fa-regular fa-calendar-check"></i></span> Sep 20, 2024
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="blog__item">
              <div class="blog__item-inner">
                <div class="blog__thumb">
                  <img src="{{asset('client/assets')}}/images/blog/details/3.png" alt="blog Images">
                </div>

                <div class="blog__content">
                  <div class="blog__meta">
                    <a href="blog-left-sidebar.html" class="blog__meta-tag blog__meta-tag--style3">Organic</a>
                  </div>
                  <h4> <a href="blog-details.html">Nsider Tips for Budget-Friendly and Healthy Grocery Hauls</a></h4>

                  <div class="blog__admin">
                    <div class="blog__admin-name">
                      <span><i class="fa-regular fa-user"></i></span> By Maug
                    </div>
                    <div class="blog__admin-date">
                      <span><i class="fa-regular fa-calendar-check"></i></span> Sep 20, 2024
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="blog__item">
              <div class="blog__item-inner">
                <div class="blog__thumb">
                  <img src="{{asset('client/assets')}}/images/blog/details/4.png" alt="blog Images">
                </div>

                <div class="blog__content">
                  <div class="blog__meta">
                    <a href="blog-left-sidebar.html" class="blog__meta-tag blog__meta-tag--style3">Pantry</a>
                  </div>
                  <h4> <a href="blog-details.html">A Guide to Smart and Efficient Grocery Shopping</a></h4>

                  <div class="blog__admin">
                    <div class="blog__admin-name">
                      <span><i class="fa-regular fa-user"></i></span> By Karls
                    </div>
                    <div class="blog__admin-date">
                      <span><i class="fa-regular fa-calendar-check"></i></span> Sep 20, 2024
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="blog__item">
              <div class="blog__item-inner">
                <div class="blog__thumb">
                  <img src="{{asset('client/assets')}}/images/blog/details/5.png" alt="blog Images">
                </div>

                <div class="blog__content">
                  <div class="blog__meta">
                    <a href="blog-left-sidebar.html" class="blog__meta-tag blog__meta-tag--style1">Recipes</a>
                  </div>
                  <h4> <a href="blog-details.html">Unlocking the Health and Flavor Benefits in Your Kitchen</a></h4>

                  <div class="blog__admin">
                    <div class="blog__admin-name">
                      <span><i class="fa-regular fa-user"></i></span> By Alex
                    </div>
                    <div class="blog__admin-date">
                      <span><i class="fa-regular fa-calendar-check"></i></span> Sep 20, 2024
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="blog__item">
              <div class="blog__item-inner">
                <div class="blog__thumb">
                  <img src="{{asset('client/assets')}}/images/blog/details/6.png" alt="blog Images">
                </div>

                <div class="blog__content">
                  <div class="blog__meta">
                    <a href="blog-left-sidebar.html" class="blog__meta-tag blog__meta-tag--style2">Hygiene</a>
                  </div>
                  <h4> <a href="blog-details.html">Navigating Challenges for Smooth Shopping in Supermarket</a> </h4>

                  <div class="blog__admin">
                    <div class="blog__admin-name">
                      <span><i class="fa-regular fa-user"></i></span> By Nazu
                    </div>
                    <div class="blog__admin-date">
                      <span><i class="fa-regular fa-calendar-check"></i></span> Sep 20, 2024
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="blog__item">
              <div class="blog__item-inner">
                <div class="blog__thumb">
                  <img src="{{asset('client/assets')}}/images/blog/details/7.png" alt="blog Images">
                </div>

                <div class="blog__content">
                  <div class="blog__meta">
                    <a href="blog-left-sidebar.html" class="blog__meta-tag blog__meta-tag--style2">Wellness</a>
                  </div>
                  <h4> <a href="blog-details.html">Container Solutions for Prolonging Your Food's Shelf Life</a></h4>

                  <div class="blog__admin">
                    <div class="blog__admin-name">
                      <span><i class="fa-regular fa-user"></i></span> By Oliv
                    </div>
                    <div class="blog__admin-date">
                      <span><i class="fa-regular fa-calendar-check"></i></span> Sep 20, 2024
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="blog__item">
              <div class="blog__item-inner">
                <div class="blog__thumb">
                  <img src="{{asset('client/assets')}}/images/blog/details/8.png" alt="blog Images">
                </div>

                <div class="blog__content">
                  <div class="blog__meta">
                    <a href="blog-left-sidebar.html" class="blog__meta-tag blog__meta-tag--style3">Family</a>
                  </div>
                  <h4><a href="blog-details.html">Tips for Stress-Free Shopping with Your Children</a></h4>

                  <div class="blog__admin">
                    <div class="blog__admin-name">
                      <span><i class="fa-regular fa-user"></i></span> By Autin
                    </div>
                    <div class="blog__admin-date">
                      <span><i class="fa-regular fa-calendar-check"></i></span> Sep 20, 2024
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="blog__item">
              <div class="blog__item-inner">
                <div class="blog__thumb">
                  <img src="{{asset('client/assets')}}/images/blog/details/9.png" alt="blog Images">
                </div>

                <div class="blog__content">
                  <div class="blog__meta">
                    <a href="blog-left-sidebar.html" class="blog__meta-tag blog__meta-tag--style1">Seasonal</a>
                  </div>
                  <h4> <a href="blog-details.html">Unveiling the Health Benefits of Cucumber and Tomato Duo</a></h4>

                  <div class="blog__admin">
                    <div class="blog__admin-name">
                      <span><i class="fa-regular fa-user"></i></span> By Marz
                    </div>
                    <div class="blog__admin-date">
                      <span><i class="fa-regular fa-calendar-check"></i></span> Sep 20, 2024
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="blog-btn text-center mt-5">
          <a href="blog-right-sidebar.html" class="trk-btn trk-btn--primary ">View More</a>
        </div>
      </div>
    </div>
  </section>
  <!-- ===============>> Blog section start here <<================= -->




  <!-- ===============>> cta section start here <<================= -->
  <section class="newsletter padding-top padding-bottom  bg-color">
    <div class="container">
      <div class="newsletter__wrapper">
        <div class="newsletter__content">
          <h2 class="newsletter__title">Subscribe To The Newsletter</h2>
          <p class="newsletter__description">Join our subscribers list to get the latest news, updates and special
            offers delivered directly to your inbox.</p>
          <form class="newsletter__form">
            <input type="email" class="newsletter__input" placeholder="Your Email Address" required>
            <button type="submit" class="trk-btn trk-btn--primary">Subscribe</button>
          </form>
        </div>
        <div class="newsletter__image">
          <!-- image include in css -->
        </div>
      </div>
    </div>
  </section>
  <!-- ===============>> cta section start here <<================= -->



  <!-- ===============>> Feature bar section start here <<================= -->
  <div class="feature-bar border-top">
    <div class="container">
      <div class="row py-3 g-5 g-lg-4 justify-content-center">
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 mb-md-0">
          <div class="feature-bar__item d-flex align-items-center">
            <img src="{{asset('client/assets')}}/images/feature/bar/1.png" alt="delivery car">
            <div class="feature-bar__text ms-4">
              <h3 class="feature-bar__title fs-6 fw-bold mb-0">Fast Delivery</h3>
              <p class="feature-bar__description fs-7 mb-0">Minimum order $40</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 mb-md-0">
          <div class="feature-bar__item d-flex align-items-center">
            <img src="{{asset('client/assets')}}/images/feature/bar/2.png" alt="support image">
            <div class="feature-bar__text ms-4">
              <h3 class="feature-bar__title fs-6 fw-bold mb-0">24/7 Support</h3>
              <p class="feature-bar__description fs-7 mb-0">Contact us 24 Hours</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 mb-md-0">
          <div class="feature-bar__item d-flex align-items-center">
            <img src="{{asset('client/assets')}}/images/feature/bar/3.png" alt="pay security">
            <div class="feature-bar__text ms-4">
              <h3 class="feature-bar__title fs-6 fw-bold mb-0">Pay Security</h3>
              <p class="feature-bar__description fs-7 mb-0">100% Secure Payment</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 mb-md-0">
          <div class="feature-bar__item d-flex align-items-center">
            <img src="{{asset('client/assets')}}/images/feature/bar/4.png" alt="money returns">
            <div class="feature-bar__text ms-4">
              <h3 class="feature-bar__title fs-6 fw-bold mb-0">Easy Returns</h3>
              <p class="feature-bar__description fs-7 mb-0">Within 30 Days</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ===============>> Feature bar section end here <<================= -->


@endsection
