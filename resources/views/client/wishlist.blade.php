@extends('client.layout.master')
@section('content')




  <!-- ================> Page header start here <================== -->
  <section class="page-header bg--cover" style="background-image:url({{asset('client/assets')}}/images/header/1.png)">
    <div class="container">
      <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
        <h1>Wishlist</h1>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item "><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>
  <!-- ================> Page header end here <================== -->





  <!-- ==========>> cart Section start Here <<========== -->
  <div class="cart padding-top padding-bottom section-bg">
    <div class="container">
      <div class="section-wrapper">
        <div class="row g-5">
          <!-- cart top product list -->
          <div class="col-lg-12">
            <div class="cart__product table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Add To Cart</th>
                    <th>Remove</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="cart__item">
                      <div class="cart__item-thumb">
                        <a href="#"><img src="{{asset('client/assets')}}/images/product/cart/1.png" alt="product"></a>
                      </div>
                      <div class="cart__item-content">
                        <h4><a href="#">Premium Beef </a></h4>
                      </div>
                    </td>
                    <td class="align-middle">$44.00</td>
                    <td class="cart__quantity  align-middle">
                      <div class="quantity-button quantity-button--style2">
                        <button class="quantity-button__control quantity-button__control--decrease">-</button>
                        <span class="quantity-button__display">2</span>
                        <button class="quantity-button__control quantity-button__control--increase">+</button>
                      </div>
                    </td>
                    <td class="align-middle">$88.00</td>
                    <td class="align-middle"><a class="trk-btn trk-btn--outline ">Add to cart</a></td>
                    <td class="align-middle">
                      <div class="close-btn">
                        <a href="#"><span><i class="fa-solid fa-xmark"></i></span></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="cart__item">
                      <div class="cart__item-thumb">
                        <a href="#"><img src="{{asset('client/assets')}}/images/product/cart/2.png" alt="product"></a>
                      </div>
                      <div class="cart__item-content">
                        <h4><a href="#">Artisan Bread</a></h4>
                      </div>
                    </td>
                    <td class="align-middle">$36.00</td>
                    <td class="cart__quantity  align-middle">
                      <div class="quantity-button quantity-button--style2">
                        <button class="quantity-button__control quantity-button__control--decrease">-</button>
                        <span class="quantity-button__display">3</span>
                        <button class="quantity-button__control quantity-button__control--increase">+</button>
                      </div>
                    </td>
                    <td class="align-middle">$36.00</td>
                    <td class="align-middle"><a class="trk-btn trk-btn--outline ">Add to cart</a></td>
                    <td class="align-middle">
                      <div class="close-btn">
                        <a href="#"><span><i class="fa-solid fa-xmark"></i></span></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="cart__item">
                      <div class="cart__item-thumb">
                        <a href="#"><img src="{{asset('client/assets')}}/images/product/cart/3.png" alt="product"></a>
                      </div>
                      <div class="cart__item-content">
                        <h4><a href="#">Exquisite Cheese</a></h4>
                      </div>
                    </td>
                    <td class="align-middle">$32.00</td>
                    <td class="cart__quantity  align-middle">
                      <div class="quantity-button quantity-button--style2">
                        <button class="quantity-button__control quantity-button__control--decrease">-</button>
                        <span class="quantity-button__display">1</span>
                        <button class="quantity-button__control quantity-button__control--increase">+</button>
                      </div>
                    </td>
                    <td class="align-middle">$32.00</td>
                    <td class="align-middle"><a class="trk-btn trk-btn--outline ">Add to cart</a></td>
                    <td class="align-middle">
                      <div class="close-btn">
                        <a href="#"><span><i class="fa-solid fa-xmark"></i></span></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="cart__item">
                      <div class="cart__item-thumb">
                        <a href="#"><img src="{{asset('client/assets')}}/images/product/cart/4.png" alt="product"></a>
                      </div>
                      <div class="cart__item-content">
                        <h4><a href="#">Fresh Strawberry</a></h4>
                      </div>
                    </td>
                    <td class="align-middle">$18.00</td>
                    <td class="cart__quantity  align-middle">
                      <div class="quantity-button quantity-button--style2">
                        <button class="quantity-button__control quantity-button__control--decrease">-</button>
                        <span class="quantity-button__display">4</span>
                        <button class="quantity-button__control quantity-button__control--increase">+</button>
                      </div>
                    </td>
                    <td class="align-middle">$50</td>
                    <td class="align-middle"><a class="trk-btn trk-btn--outline ">Add to cart</a></td>
                    <td class="align-middle">
                      <div class="close-btn">
                        <a href="#"><span><i class="fa-solid fa-xmark"></i></span></a>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ==========>> cart Section Ends Here <<========== -->




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
