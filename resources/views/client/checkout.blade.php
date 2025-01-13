@extends('client.layout.master')
@section('content')




  <!-- ============ shop Section start Here========== -->
  <section class="checkout padding-top padding-bottom">
    <div class="container">
      <div class="checkout__wrapper">
        <form action="#" class="checkout__form">
          <div class="row g-5">
            <div class="col-lg-7">
              <div class="checkout__details" data-aos="fade-right" data-aos-duration="800" data-aos-delay="100">
                <div class="row g-4">
                  <div class="col-lg-12">
                    <div class="checkout__title">
                      <h5>Checkout</h5>
                    </div>
                    <div class="checkout__subtitle">
                      <p>Billing Details</p>
                    </div>

                  </div>
                  <div class="col-lg-6">
                    <div class="input-group">
                      <input type="text" class="form-control" id="first-name" placeholder="First name*" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="input-group">
                      <input type="text" class="form-control" id="last-name" placeholder="Last name*" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="input-group">
                      <input type="text" class="form-control" id="address" placeholder="Address*" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="input-group">
                      <input type="text" class="form-control" id="address2" placeholder="Address 2" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="input-group">
                      <input type="text" class="form-control" id="city" placeholder="City/Town*" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="input-group">
                      <input type="text" class="form-control" id="zip-code" placeholder="Zip Code*" required>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="input-group">
                      <textarea id="account-desc" class="form-control" rows="4" placeholder="Write a message..."
                        cols="50"></textarea>
                    </div>
                  </div>

                  <div class="account__form-passcheck">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" value="" id="terms-check">
                      <label for="terms-check" class="form-check-label">
                        Create an account?
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="order" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
                <div class="checkout__title">
                  <h5>Order Summary</h5>
                </div>
                <div class="order__details table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Product</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="2">
                          <table class="table table-borderless">
                            <tbody>
                              <tr>
                                <td>
                                  <div class="o-info">
                                    <img src="{{asset('client/assets')}}/images/product/order/1.png" alt="product">
                                    <div class="o-details">
                                      <div class="c-reviews">
                                        <ul>
                                          <li><i class="fa-solid fa-star"></i>
                                          </li>
                                          <li><i class="fa-solid fa-star"></i>
                                          </li>
                                          <li><i class="fa-solid fa-star"></i>
                                          </li>
                                          <li><i class="fa-solid fa-star"></i>
                                          </li>
                                          <li><i class="fa-solid fa-star"></i>
                                          </li>
                                        </ul>
                                        <p>(13 reviews)</p>
                                      </div>
                                      <a href="product-details.html">Organic Greek Delicacies for Culinary Odyssey</a>
                                    </div>

                                  </div>

                                </td>
                                <td>$21.00</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="o-info">
                                    <img src="{{asset('client/assets')}}/images/product/order/2.png" alt="product">
                                    <div class="o-details">
                                      <div class="c-reviews">
                                        <ul>
                                          <li><i class="fa-solid fa-star"></i>
                                          </li>
                                          <li><i class="fa-solid fa-star"></i>
                                          </li>
                                          <li><i class="fa-solid fa-star"></i>
                                          </li>
                                          <li><i class="fa-solid fa-star"></i>
                                          </li>
                                          <li><i class="fa-solid fa-star mute"></i>
                                          </li>
                                        </ul>
                                        <p>(20 reviews)</p>
                                      </div>
                                      <a href="product-details.html">Organic Delights for a Sweet and Healthy Treat</a>

                                    </div>

                                  </div>

                                </td>
                                <td>$12.00</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="o-info">
                                    <img src="{{asset('client/assets')}}/images/product/order/3.png" alt="course">
                                    <div class="o-details">
                                      <div class="c-reviews">
                                        <ul>
                                          <li><i class="fa-solid fa-star"></i>
                                          </li>
                                          <li><i class="fa-solid fa-star"></i>
                                          </li>
                                          <li><i class="fa-solid fa-star"></i>
                                          </li>
                                          <li><i class="fa-solid fa-star mute"></i>
                                          </li>
                                          <li><i class="fa-solid fa-star mute"></i>
                                          </li>
                                        </ul>
                                        <p>(05 reviews)</p>
                                      </div>
                                      <a href="course-details.html">Pure Organic Goodness for Your Culinary
                                        Creations</a>
                                    </div>
                                  </div>
                                </td>
                                <td>$18.00</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">Sub Total</th>
                        <td>$340.00</td>
                      </tr>
                      <tr>
                        <th scope="row">Discount</th>
                        <td>$40.00</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Total &#40; USD &#41; <p>VAT included, where applicable</p>
                        </th>
                        <td><strong>$300.00</strong></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <div class="order__option">
                  <div class="order__option-title">
                    <p>Payment</p>
                  </div>
                  <div class="order__option-item">
                    <div class="form-radio-wrapper">
                      <input class="form-radio" type="radio" name="payment-radio" value="" id="card">
                      <label class="form-check-label" for="card">
                        Credit/Debit Card
                      </label>
                    </div>
                    <div class="thumb">
                      <img src="{{asset('client/assets')}}/images/payment/master_card.png" alt="payment icon">
                      <img src="{{asset('client/assets')}}/images/payment/visa_card.png" alt="payment icon">
                    </div>
                  </div>
                  <div class="order__option-item">
                    <div class="form-radio-wrapper">
                      <input class="form-radio" type="radio" name="payment-radio" value="" id="paypalCheck">
                      <label class="form-check-label" for="paypalCheck">
                        Paypal
                      </label>
                    </div>
                    <div class="thumb">
                      <img src="{{asset('client/assets')}}/images/payment/paypal_logo.png" alt="payment icon">
                    </div>
                  </div>
                  <div class="order__option-item">
                    <div class="form-radio-wrapper">
                      <input class="form-radio" type="radio" name="payment-radio" value="" id="cash">
                      <label class="form-check-label" for="cash">
                        Cash on Delivery
                      </label>
                    </div>
                  </div>
                </div>

                <div class="order__check mt-5">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="data">
                    <label class="form-check-label" for="data">
                      Your personal data will be used to process your order, support experience throughout this website,
                      and for other purposes described in our privacy policy.
                    </label>
                  </div>
                </div>
                <button type="submit" class="trk-btn trk-btn--primary d-block mt-4">Place
                  Order</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- ============ shop Section Ends Here========== -->



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
