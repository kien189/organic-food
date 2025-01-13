@extends('client.layout.master')
@section('content')



  <!-- ================> 404 section start here <================== -->
  <div class="error padding-top padding-bottom sec-bg-color2">
    <div class="container">
      <div class="error__wrapper">
        <div class="error__inner" data-aos="fade-up" data-aos-duration="1000">
          <div class="error__thumb text-center">
            <img src="{{ asset('client/assets') }}/images/others/error.png" alt="404 image">
          </div>
          <div class="error__content text-center">
            <h3>Oops! <span>page not found</span></h3>
            <a href="/" class="trk-btn trk-btn--border trk-btn--primary">Back to home</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ================> 404 section end here <================== -->





  <!-- ===============>> Feature bar section start here <<================= -->
  <div class="feature-bar border-top">
    <div class="container">
      <div class="row py-3 g-5 g-lg-4 justify-content-center">
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 mb-md-0">
          <div class="feature-bar__item d-flex align-items-center">
            <img src="{{ asset('client/assets') }}/images/feature/bar/1.png" alt="delivery car">
            <div class="feature-bar__text ms-4">
              <h3 class="feature-bar__title fs-6 fw-bold mb-0">Fast Delivery</h3>
              <p class="feature-bar__description fs-7 mb-0">Minimum order $40</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 mb-md-0">
          <div class="feature-bar__item d-flex align-items-center">
            <img src="{{ asset('client/assets') }}/images/feature/bar/2.png" alt="support image">
            <div class="feature-bar__text ms-4">
              <h3 class="feature-bar__title fs-6 fw-bold mb-0">24/7 Support</h3>
              <p class="feature-bar__description fs-7 mb-0">Contact us 24 Hours</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 mb-md-0">
          <div class="feature-bar__item d-flex align-items-center">
            <img src="{{ asset('client/assets') }}/images/feature/bar/3.png" alt="pay security">
            <div class="feature-bar__text ms-4">
              <h3 class="feature-bar__title fs-6 fw-bold mb-0">Pay Security</h3>
              <p class="feature-bar__description fs-7 mb-0">100% Secure Payment</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 mb-md-0">
          <div class="feature-bar__item d-flex align-items-center">
            <img src="{{ asset('client/assets') }}/images/feature/bar/4.png" alt="money returns">
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
