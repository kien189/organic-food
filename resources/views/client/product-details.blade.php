@extends('client.layout.master')
@section('content')




  <!-- ===============>>Product Details section start here <<================= -->
  <section class="product-details padding-top padding-bottom ">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="product-details">
            <div class="row g-5">
              <div class="col-md-6 col-12">
                <div class="product-thumb">
                  <div class="swiper pro-single-top">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="single-thumb"><img src="{{asset('client/assets')}}/images/product/details/01.png" alt="shop">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="single-thumb"><img src="{{asset('client/assets')}}/images/product/details/02.png" alt="shop">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="single-thumb"><img src="{{asset('client/assets')}}/images/product/details/03.png" alt="shop">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="single-thumb"><img src="{{asset('client/assets')}}/images/product/details/01.png" alt="shop">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper pro-single-thumbs">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="single-thumb"><img src="{{asset('client/assets')}}/images/product/details/01.png" alt="shop">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="single-thumb"><img src="{{asset('client/assets')}}/images/product/details/02.png" alt="shop">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="single-thumb"><img src="{{asset('client/assets')}}/images/product/details/03.png" alt="shop">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="single-thumb"><img src="{{asset('client/assets')}}/images/product/details/01.png" alt="shop">
                        </div>
                      </div>
                    </div>
                    <div class="pro-single-next"><i class="fas fa-angle-left"></i></div>
                    <div class="pro-single-prev"><i class="fas fa-angle-right"></i></div>
                  </div>


                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="post-content">
                  <h2>Fresh and Organic Mixed Berries for Healthy Delights</h2>
                  <p class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    (56 Reviews)
                  </p>

                  <div class="post-content__price">
                    <h2>$49.50</h2>
                    <del>$55.00</del>
                    <span>(8% off)</span>
                  </div>

                  <div class="post-content__brand">
                    Brand: <span>Torganic</span>
                  </div>

                  <ul class="post-content__list">
                    <li>
                      <img src="{{asset('client/assets')}}/images/invoice/check.svg" alt="Check">
                      Lowers bad cholesterol, supports cardiovascular wellness.
                    </li>
                    <li>
                      <img src="{{asset('client/assets')}}/images/invoice/check.svg" alt="Check">
                      Rich in vitamins, minerals, promoting overall health.
                    </li>
                    <li>
                      <img src="{{asset('client/assets')}}/images/invoice/check.svg" alt="Check">
                      Aids in satiety, beneficial for weight control.
                    </li>
                    <li>
                      <img src="{{asset('client/assets')}}/images/invoice/check.svg" alt="Check">
                      Delivery might delay due to some external dependency
                    </li>
                  </ul>

                  <div class="post-content__btn btn-group">
                    <div class="quantity-button">
                      <button class="quantity-button__control quantity-button__control--decrease">-</button>
                      <span class="quantity-button__display">3</span>
                      <button class="quantity-button__control quantity-button__control--increase">+</button>
                    </div>
                    <a href="cart.html" class="trk-btn trk-btn--primary">Add to Cart</a>

                    <a class="product-details__fav-btn" href="wishlist.html"><i class="fa-regular fa-heart"></i></a>
                  </div>

                  <div class="post-content__social">
                    <h4>Share with:</h4>
                    <ul class="social">
                      <li class="social__item">
                        <a href="#" class="social__link"><i class="fab fa-facebook-f"></i></a>
                      </li>
                      <li class="social__item">
                        <a href="#" class="social__link "><i class="fab fa-instagram"></i></a>
                      </li>
                      <li class="social__item">
                        <a href="#" class="social__link"><i class="fa-brands fa-linkedin-in"></i></a>
                      </li>
                      <li class="social__item">
                        <a href="#" class="social__link"><i class="fab fa-youtube"></i></a>
                      </li>
                      <li class="social__item">
                        <a href="#" class="social__link"><i class="fa-brands fa-x-twitter"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="product-details__pill">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-description-tab" data-bs-toggle="pill"
                  data-bs-target="#pills-description" type="button" role="tab" aria-controls="pills-description"
                  aria-selected="true">Description</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-info-tab" data-bs-toggle="pill" data-bs-target="#pills-info"
                  type="button" role="tab" aria-controls="pills-info" aria-selected="false">Additional
                  Information</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-review-tab" data-bs-toggle="pill" data-bs-target="#pills-review"
                  type="button" role="tab" aria-controls="pills-review" aria-selected="false">Reviews</button>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                aria-labelledby="pills-description-tab" tabindex="0">

                <div class="product-details__content">
                  <h3>The Berries Advantage</h3>
                  <p>Avocados, nature's treasure trove, offer a bounty of essential nutrients. Explore the health
                    benefits that make avocados
                    a must-have in your diet. or randomised words which don't look even slightly believable. If you are
                    going to use a
                    passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle
                    of text.ve suffered
                    alteration in some form, by injected humour, or randomised words which don't look even slightly
                    believable you are going
                    to use a passage of Lorem Ipsum.</p>

                  <h3>Culinary Versatility</h3>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form,
                    by injected humour, or randomised words which don't look even slightly believable. If you are going
                    to use a passage of
                    Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.ve
                    suffered alteration
                    in some form, by injected humour, or randomised words which don't look even slightly believable. If
                    you are going to use
                    a passage of Lorem Ipsum, you need to be sure.</p>

                  <div class="row g-2 my-4">
                    <div class="col-lg-4">
                      <img src="{{asset('client/assets')}}/images/product/details/1.png" alt="recepie">
                    </div>
                    <div class="col-lg-4">
                      <img src="{{asset('client/assets')}}/images/product/details/2.png" alt="recepie">
                    </div>
                    <div class="col-lg-4">
                      <img src="{{asset('client/assets')}}/images/product/details/3.png" alt="recepie">
                    </div>
                  </div>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form,
                    by injected humour, or randomised words which don't look even slightly believable.</p>

                  <h3>Freshness Guaranteed</h3>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form,
                    by injected humour, or randomised words which don't look even slightly believable. If you are going
                    to use a passage of
                    Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.ve
                    suffered alteration
                    in some form, by injected humour, or randomised words which don't look even slightly believable. If
                    you are going to use
                    a passage of Lorem Ipsum, you need to be sure.</p>

                  <h3>Picking the Perfect Berry</h3>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form,
                    by injected humour, or randomised words which don't look even slightly believable. If you are going
                    to use a passage of
                    Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.ve
                    suffered alteration
                    in some form, by injected humour, or randomised words which don't look even slightly believable. If
                    you are going to use
                    a passage of Lorem Ipsum, you need to be sure.</p>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form,
                    by injected humour, or randomised words which don't look even slightly believable. If you are going
                    to use a passage.</p>

                </div>
              </div>

              <div class="tab-pane fade" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab" tabindex="0">
                <div class="product-details__content">
                  <h3>Return Policy</h3>
                  <p>Avocados, nature's treasure trove, offer a bounty of essential nutrients. Explore the health
                    benefits that make avocados
                    a must-have in your diet. or randomised words which don't look even slightly believable. If you are
                    going to use a
                    passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle
                    of text.ve suffered
                    alteration in some form, by injected humour, or randomised words which don't look even slightly
                    believable you are going
                    to use a passage of Lorem Ipsum.</p>

                  <h3>Shipping</h3>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form,
                    by injected humour, or randomised words which don't look even slightly believable. If you are going
                    to use a passage of
                    Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.ve
                    suffered alteration
                    in some form, by injected humour, or randomised words which don't look even slightly believable. If
                    you are going to use
                    a passage of Lorem Ipsum, you need to be sure.</p>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab"
                tabindex="0">
                <div class="product-details__review section-bg">
                  <div class="product-details__review-title">
                    <h2>Reviews</h2>
                  </div>
                  <div class="product-details__review-card">
                    <div class="product-details__review-author">
                      <div class="product-details__review-thumb">
                        <img src="{{asset('client/assets')}}/images/testimonial/4.png" alt="client image">
                      </div>
                      <div class="product-details__review-name">
                        <h4>Jenny Wilson</h4>
                        <p>February 11, 2024</p>
                      </div>
                    </div>
                    <div class="product-details__review-content">
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                      </div>
                      <p>Excellent variety, fresh produce, and prompt delivery. My go-to for quality groceries. Highly
                        recommend this
                        user-friendly and efficient grocery website!</p>
                    </div>
                  </div>

                  <div class="product-details__review-card">
                    <div class="product-details__review-author">
                      <div class="product-details__review-thumb">
                        <img src="{{asset('client/assets')}}/images/testimonial/5.png" alt="client image">
                      </div>
                      <div class="product-details__review-name">
                        <h4>Dianne Russell</h4>
                        <p>March 6, 2024</p>
                      </div>
                    </div>
                    <div class="product-details__review-content">
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>
                          <i class="fa-solid fa-star"></i>
                        </span>
                        <span>
                          <i class="fa-solid fa-star"></i>
                        </span>
                      </div>
                      <p>Impressed with the organic selection, easy navigation, and on-time deliveries. A reliable
                        grocery partner for quality
                        and convenience.</p>
                    </div>
                  </div>

                  <div class="product-details__review-card">
                    <div class="product-details__review-author">
                      <div class="product-details__review-thumb">
                        <img src="{{asset('client/assets')}}/images/testimonial/6.png" alt="client image">
                      </div>
                      <div class="product-details__review-name">
                        <h4>Darrell Steward</h4>
                        <p>December 19, 2024</p>
                      </div>
                    </div>
                    <div class="product-details__review-content">
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>
                          <i class="fa-solid fa-star"></i>
                        </span>
                      </div>
                      <p>Outstanding service! From the diverse product range to the user-friendly interface, shopping
                        here is a pleasure.</p>
                    </div>
                  </div>
                </div>

                <div class="product-details__review  product-details__review--add section-bg">
                  <div class="product-details__review-title">
                    <h2>Add a review</h2>
                  </div>

                  <div class="product-details__review-form">
                    <div class="rating">
                      <h4>Your Review</h4>

                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                    </div>
                    <form action="https://thetork.com/">
                      <div class="row g-4">
                        <div class="col-md-6">
                          <div>
                            <label for="name" class="form-label">Name</label>
                            <input class="form-control" type="text" id="name" placeholder="Full Name">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div>
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control" type="email" id="email" placeholder="Email here">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div>
                            <label for="textarea" class="form-label">Message</label>
                            <textarea cols="30" rows="5" class="form-control" id="textarea"
                              placeholder="Enter Your Message"></textarea>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="trk-btn trk-btn--border trk-btn--primary mt-4">Send
                        message</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===============>>Product Details section end here <<================= -->




  <!-- ===============>>Featured products section start here <<================= -->
  <section class="product-feature padding-bottom">
    <div class="container">
      <div class="section-header">
        <div class="section-header__content">
          <h2 class="mb-10">Featured products</h2>
        </div>
        <div class="section-header__action">
          <div class="swiper-nav swiper-nav--style1">
            <button class="swiper-nav__btn product__slider-prev"><i class="fa-solid fa-arrow-left-long"></i></button>
            <button class="swiper-nav__btn product__slider-next active"><i
                class="fa-solid fa-arrow-right-long"></i></button>
          </div>
        </div>
      </div>
      <div class="product__wrapper">
        <div class="product-feature__slider swiper">
          <div class="swiper-wrapper mb-1">
            <div class="swiper-slide">
              <div class="product__item product__item--style2">
                <div class="product__item-inner">
                  <div class="product__item-thumb">
                    <img src="{{asset('client/assets')}}/images/product/popular/6.png" alt="Popular Product Images">
                  </div>
                  <div class="product__item-content">
                    <h5><a href="product-details.html">Bloom Delight</a></h5>
                    <div class="product__item-rating">
                      <i class="fa-solid fa-star"></i> 4.9 <span>(29 Reviews)</span>
                    </div>
                    <div class="product__item-footer">
                      <div class="product__item-price">
                        <h4>$32.00</h4>
                      </div>
                      <div class="product__item-action">
                        <a class="trk-btn trk-btn--outline" href="cart.html">Add to cart</a>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="product__item product__item--style2">
                <div class="product__item-inner">
                  <div class="product__item-thumb">
                    <img src="{{asset('client/assets')}}/images/product/popular/7.png" alt="Popular Product Images">
                  </div>
                  <div class="product__item-content">
                    <h5><a href="product-details.html">Vibrant Pepper</a></h5>
                    <div class="product__item-rating">
                      <i class="fa-solid fa-star"></i> 5.0 <span>(33 Reviews)</span>
                    </div>
                    <div class="product__item-footer">
                      <div class="product__item-price">
                        <h4>$23.00</h4>
                      </div>
                      <div class="product__item-action">
                        <a class="trk-btn trk-btn--outline" href="cart.html">Add to cart</a>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="product__item product__item--style2">
                <div class="product__item-inner">
                  <div class="product__item-thumb">
                    <img src="{{asset('client/assets')}}/images/product/popular/8.png" alt="Popular Product Images">
                  </div>
                  <div class="product__item-content">
                    <h5><a href="product-details.html">Crisp Refresher</a></h5>
                    <div class="product__item-rating">
                      <i class="fa-solid fa-star"></i> 4.5 <span>(108 Reviews)</span>
                    </div>
                    <div class="product__item-footer">
                      <div class="product__item-price">
                        <h4>$38.00</h4>
                      </div>
                      <div class="product__item-action">
                        <a class="trk-btn trk-btn--outline" href="cart.html">Add to cart</a>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="product__item product__item--style2">
                <div class="product__item-inner">
                  <div class="product__item-thumb">
                    <img src="{{asset('client/assets')}}/images/product/popular/9.png" alt="Popular Product Images">
                  </div>
                  <div class="product__item-content">
                    <h5><a href="product-details.html">Crisp Leaf Luxury</a></h5>
                    <div class="product__item-rating">
                      <i class="fa-solid fa-star"></i> 4.5 <span>(157 Reviews)</span>
                    </div>
                    <div class="product__item-footer">
                      <div class="product__item-price">
                        <h4>$27.00</h4>
                      </div>
                      <div class="product__item-action">
                        <a class="trk-btn trk-btn--outline" href="cart.html">Add to cart</a>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="product__item product__item--style2">
                <div class="product__item-inner">
                  <div class="product__item-thumb">
                    <img src="{{asset('client/assets')}}/images/product/popular/10.png" alt="Popular Product Images">
                  </div>
                  <div class="product__item-content">
                    <h5><a href="product-details.html">Fresh Pumpkin</a></h5>
                    <div class="product__item-rating">
                      <i class="fa-solid fa-star"></i> 5.0 <span>(08 Reviews)</span>
                    </div>
                    <div class="product__item-footer">
                      <div class="product__item-price">
                        <h4>$24.00</h4>
                      </div>
                      <div class="product__item-action">
                        <a class="trk-btn trk-btn--outline" href="cart.html">Add to cart</a>
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
  </section>
  <!-- ===============>>Featured products section end here <<================= -->




  <!-- ===============>> Feature bar section start here <<================= -->
  <div class="feature-bar border-top">
    <div class="container">
      <div class="row py-3 g-4 justify-content-center">
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
