@extends('client.layout.master')
@section('title', 'Cart')
@section('content')



    <!-- ================> Page header start here <================== -->
    <section class="page-header bg--cover" style="background-image:url({{ asset('client/assets') }}/images/header/1.png)">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h1>Cart</h1>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item "><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cart</li>
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
                                    <!-- Hiển thị tổng số sản phẩm trong giỏ -->

                                    @foreach ($cart as $car)
                                        <tr>
                                            <td class="cart__item">
                                                <div class="cart__item-thumb">
                                                    <a href="#"><img src="{{ $car->product->image }}"
                                                            alt="product"></a>
                                                </div>
                                                <div class="cart__item-content">
                                                    <h4><a
                                                            href="
                                                  {{ route('product-detail', ['category' => $car->product->category->name, 'slug' => $car->product->slug]) }}
                                                ">{{ $car->product->name }}</a>
                                                    </h4>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                ${{ number_format($car->product->sale_price ?? $car->product->price, 2) }}
                                            </td>
                                            {{-- <td class="cart__quantity align-middle">
                                                    <div class="quantity-button quantity-button--style2">
                                                        <div class="quantity-button quantity-button--style2">
                                                            <button type="submit" name="quantity[{{ $car->id }}]"
                                                                value="{{ $car->quantity - 1 }}"
                                                                class="quantity-button__control quantity-button__control--decrease"
                                                                {{ $car->quantity <= 1 ? 'disabled' : '' }}>-</button>
                                                            <span
                                                                class="quantity-button__display">{{ $car->quantity }}</span>
                                                            <button type="submit" name="quantity[{{ $car->id }}]"
                                                                value="{{ $car->quantity + 1 }}"
                                                                class="quantity-button__control quantity-button__control--increase">+</button>
                                                        </div>
                                                    </div>
                                                </td> --}}
                                            <td class="cart__quantity  align-middle">
                                                <div class="quantity-button quantity-button--style2">
                                                    <button
                                                        class="quantity-button__control quantity-button__control--decrease"
                                                        {{ $car->quantity <= 1 ? 'disabled' : '' }}
                                                        >-</button>
                                                    <span class="quantity-button__display"
                                                        data-update-id={{ $car->id }}>{{ $car->quantity }}</span>
                                                    <button
                                                        class="quantity-button__control quantity-button__control--increase">+</button>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                ${{ number_format(($car->product->sale_price ?? $car->product->price) * $car->quantity, 2) }}
                                            </td>
                                            <td class="align-middle"><a class="trk-btn trk-btn--outline ">Add to
                                                    cart</a>
                                            </td>
                                            <td class="align-middle">
                                                <div class="close-btn">
                                                    {{-- <a id="remove" href="{{ route('destroy-cart', $car->id)}}"><span><i class="fa-solid fa-xmark"></i></span></a> --}}
                                                    <a id="remove" data-id="{{ $car->id }}"><span><i
                                                                class="fa-solid fa-xmark"></i></span></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                    <tr>
                                        <td colspan="6">
                                            <div class="cart__footer">
                                                <div class="cart__coupon">
                                                    <!-- <label for="cart-coupon" class="form-label">Have Counpon?</label> -->

                                                    <div class="input-group">

                                                        <label for="cart-coupon" class="form-label mb-0">Got any
                                                            tokens?</label>
                                                        <input type="text" class="form-control" id="cart-coupon"
                                                            aria-describedby="cart-coupon" placeholder="Coupon Code">
                                                        <button class="trk-btn trk-btn--primary" id="basic-addon3">Apply
                                                            now</button>
                                                    </div>
                                                </div>
                                                <form action="{{ route('update-cart') }}" id="update-cart" method="post">
                                                    @csrf
                                                    <div class="cart__btn">
                                                        <button type="submit" class="trk-btn trk-btn--primary">Update
                                                            cart</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-end">
                    <div class="col-lg-4">
                        <div class="cart__total">
                            <h3>Cart Total</h3>

                            <div class="cart__total-data">
                                <span>Subtotal</span>
                                <span>${{ number_format($total, 2) }}</span>
                            </div>

                            <div class="cart__total-data">
                                <span>Discount</span>
                                <span>$0</span>
                            </div>

                            <div class="cart__total-data cart__total-data--total">
                                <span>Total</span>
                                <span>${{ number_format($total, 2) }}</span>
                            </div>

                            <a href="{{ route('checkout') }}" class="trk-btn trk-btn--primary">Proceed to checkout</a>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const removeButtons = document.querySelectorAll('#remove');

            removeButtons.forEach(button => {
                button.addEventListener('click', async function() {
                    const cartId = this.getAttribute('data-id');
                    const row = this.closest('tr'); // Tìm phần tử tr chứa nút xóa
                    row.remove();
                    const response = await fetch('/destroy-cart/' + cartId, {
                        method: 'GET',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    });
                    const data = await response.json();
                    if (response.ok) {
                        // location.reload();
                        alert(data.message);
                    } else {
                        alert('Something went wrong. Please try again.');
                    }
                });
            });


            const form = document.getElementById('update-cart')
            form.addEventListener('submit', async (e) => {
                e.preventDefault();

                const formData = new FormData();
                const quantities = {}; // Mảng chứa key (ID sản phẩm) và value (số lượng)

                document.querySelectorAll("span.quantity-button__display").forEach((
                    quantityElement) => {
                    const quantity = quantityElement.textContent.trim();
                    const updateId = quantityElement.getAttribute(
                        'data-update-id'); // Lấy ID từ data-update-id

                    // Thêm vào mảng quantities
                    quantities[updateId] = quantity;
                });
                console.log(quantities);

                // Thêm mảng quantities vào FormData
                formData.append("quantity", JSON.stringify(
                    quantities)); // Chuyển mảng quantities thành chuỗi JSON

                try {
                    // Gửi dữ liệu lên server
                    const response = await fetch("/update-cart", {
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": document.querySelector('input[name="_token"]')
                                .value,
                            "Accept": "application/json"
                        },
                        body: formData
                    })
                    if (!response.ok) {
                        if (response.status === 422) {
                            const errors = await response.json();
                            // Hiển thị lỗi
                            for (const [key, messages] of Object.entries(errors.errors)) {
                                const errorElement = document.getElementById(`errors-${key}`);
                                if (errorElement) {
                                    errorElement.textContent = messages.join(", ");
                                }
                            }
                        } else {
                            alert("Something went wrong. Please try again.");
                        }
                        return;
                    }

                    const result = await response.json();

                    window.location.reload();

                    // Sau khi reload, hiển thị thông báo
                    setTimeout(() => {
                        alert("Cart updated successfully!");
                    }, 100);

                    // Reload trang
                } catch (error) {
                    console.error("Error:", error);
                    alert("An error occurred. Please check the console for more details.");
                }

            })

        })
    </script>
@endsection
