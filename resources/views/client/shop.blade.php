@extends('client.layout.master')
@section('title', ' Shop')
@section('content')
    <!-- ===============>>Flash Product section start here <<================= -->
    <section class="product padding-top padding-bottom ">
        <div class="container">
            <div class="product__wrapper">
                <div class="row justify-content-center flex-lg-row-reverse g-5">


                    <div class="col-lg-9">
                        <div class="row row-cols-xl-4  row-cols-md-3 row-cols-2 row-cols-1 justify-content-center g-3">
                            @foreach ($products as $pro)
                                <div class="col">
                                    <div class="product__item product__item--style2">
                                        <form action="" method="post">
                                            @csrf
                                            <div class="product__item-inner">
                                                <div class="product__item-badge">
                                                    @if ($pro->sale_price > 0)
                                                        -
                                                        {{ round((($pro->price - $pro->sale_price) / $pro->price) * 100) }}
                                                        %
                                                    @endif
                                                </div>
                                                <div class="product__item-thumb">
                                                    <img src="{{ $pro->image }}" alt="Popular Product Images">
                                                </div>
                                                <div class="product__item-content">
                                                    <h5><a
                                                            href="
                                                    {{ route('product-detail', ['category' => $pro->category->name, 'slug' => $pro->slug]) }}">
                                                            {{ $pro->name }}
                                                        </a></h5>
                                                    <div class="product__item-rating">
                                                        <i class="fa-solid fa-star"></i> 5.0 <span>(35 Reviews)</span>
                                                    </div>
                                                    <div class="product__item-footer">
                                                        <div class="product__item-price">
                                                            @if (empty($pro->sale_price))
                                                                <h4>${{ number_format($pro->price, 2) }}</h4>
                                                            @else
                                                                <h4>${{ number_format($pro->sale_price, 2) }}/</h4>
                                                                <span><del>${{ number_format($pro->price, 2) }}</del></span>
                                                            @endif

                                                        </div>
                                                        <div class="product__item-action">
                                                            <a class="trk-btn trk-btn--outline addtocart_btn"
                                                                data-product-id="{{ $pro->id }}">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="product-btn text-center mt-5">
                            <a href="#" class="about__btn trk-btn trk-btn--primary">View More</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-8 col-md-6">
                        <div class="product__sidebar">
                            <div class="sidebar-filter sidebar-filter--brand sidebar-filter--collapsible mb-40">
                                <div class="sidebar-filter__header">
                                    <h3 class="sidebar-filter__title">Brand</h3>
                                    <button class="sidebar-filter__toggle btn btn-link p-0" aria-expanded="true"
                                        aria-controls="brand-filter-content">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </button>
                                </div>
                                <div id="brand-filter-content" class="sidebar-filter__content">
                                    <div class="sidebar-filter__search">
                                        <div class="input-group">
                                            <input type="text" class="form-control sidebar-filter__search-input"
                                                placeholder="Search">
                                            <span class="input-group-text">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <ul class="sidebar-filter__list list-unstyled">
                                        @foreach ($brand as $key => $bra)
                                            <form action="" method="get">
                                                @csrf
                                                <li class="sidebar-filter__item">
                                                    <div class="form-check">
                                                        <div class="check-group flex-grow-1">
                                                            <input class="form-check-input fruits-check" type="checkbox"
                                                                id="fruits-check-{{ $key + 1 }}"
                                                                data-slug={{ $bra->slug }}>
                                                            <label class="form-check-label d-block"
                                                                for="fruits-check-{{ $key + 1 }}">{{ $bra->name }}</label>
                                                        </div>
                                                        <span
                                                            class="sidebar-filter__count">({{ $bra->products_count }})</span>
                                                    </div>
                                                </li>
                                            </form>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar-filter sidebar-filter--color sidebar-filter--collapsible mb-40">
                                <div class="sidebar-filter__header">
                                    <h3 class="sidebar-filter__title">Color</h3>
                                    <button class="sidebar-filter__toggle btn btn-link p-0" aria-expanded="true"
                                        aria-controls="brand-filter-content">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </button>
                                </div>
                                <div id="brand-filter-content1" class="sidebar-filter__content">
                                    <ul class="sidebar-filter__list list-unstyled">
                                        <li class="sidebar-filter__item">
                                            <div class="form-check">
                                                <div class="check-group flex-grow-1">
                                                    <input class="form-check-input" type="checkbox" checked id="red-check">
                                                    <label class="form-check-label d-block" for="red-check">Red</label>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="sidebar-filter__item">
                                            <div class="form-check">
                                                <div class="check-group flex-grow-1">
                                                    <input class="form-check-input" type="checkbox" id="green-check">
                                                    <label class="form-check-label d-block" for="green-check">Green</label>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="sidebar-filter__item">
                                            <div class="form-check">
                                                <div class="check-group flex-grow-1">
                                                    <input class="form-check-input" type="checkbox" id="yellow-check">
                                                    <label class="form-check-label d-block"
                                                        for="yellow-check">Yellow</label>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="sidebar-filter__item">
                                            <div class="form-check">
                                                <div class="check-group flex-grow-1">
                                                    <input class="form-check-input" type="checkbox" id="blue-check">
                                                    <label class="form-check-label d-block" for="blue-check">Blue</label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            <div class="sidebar-filter sidebar-filter--brand sidebar-filter--collapsible">
                                <div class="sidebar-filter__header">
                                    <h3 class="sidebar-filter__title">Discount</h3>
                                    <button class="sidebar-filter__toggle btn btn-link p-0" aria-expanded="true"
                                        aria-controls="brand-filter-content">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </button>
                                </div>
                                <div id="brand-filter-content2" class="sidebar-filter__content">
                                    <ul class="sidebar-filter__list list-unstyled">
                                        <li class="sidebar-filter__item">
                                            <div class="form-check">
                                                <div class="check-group flex-grow-1">
                                                    <input class="form-check-input" type="checkbox" checked
                                                        id="d1-check">
                                                    <label class="form-check-label d-block" for="d1-check">Up to
                                                        5%</label>
                                                </div>
                                                <span class="sidebar-filter__count">(34)</span>
                                            </div>
                                        </li>

                                        <li class="sidebar-filter__item">
                                            <div class="form-check">
                                                <div class="check-group flex-grow-1">
                                                    <input class="form-check-input" type="checkbox" id="d2-check">
                                                    <label class="form-check-label d-block" for="d3-check">05% -
                                                        20%</label>
                                                </div>
                                                <span class="sidebar-filter__count">(24)</span>
                                            </div>
                                        </li>

                                        <li class="sidebar-filter__item">
                                            <div class="form-check">
                                                <div class="check-group flex-grow-1">
                                                    <input class="form-check-input" type="checkbox" id="d3-check">
                                                    <label class="form-check-label d-block" for="d3-check">20% -
                                                        30%</label>
                                                </div>
                                                <span class="sidebar-filter__count">(8)</span>
                                            </div>
                                        </li>

                                        <li class="sidebar-filter__item">
                                            <div class="form-check">
                                                <div class="check-group flex-grow-1">
                                                    <input class="form-check-input" type="checkbox" id="d4-check">
                                                    <label class="form-check-label d-block" for="d4-check">30% -
                                                        50%</label>
                                                </div>
                                                <span class="sidebar-filter__count">(05)</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>>Flash Product section end here <<================= -->




    <!-- ===============>> cta section start here <<================= -->
    <section class="newsletter padding-top padding-bottom  bg-color">
        <div class="container">
            <div class="newsletter__wrapper">
                <div class="newsletter__content">
                    <h2 class="newsletter__title">Subscribe To The Newsletter</h2>
                    <p class="newsletter__description">Join our subscribers list to get the latest news, updates and
                        special
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
        document.addEventListener("DOMContentLoaded", function() {
            const addtocart_btn = document.querySelectorAll('.addtocart_btn');
            addtocart_btn.forEach(btn => {
                btn.addEventListener('click', async function(e) {
                    e.preventDefault();

                    const form = btn.closest('form')
                    if (form) {
                        // form.submit();
                        const product_id = btn.getAttribute('data-product-id');
                        const formData = new FormData(form);
                        formData.append('product_id', product_id);

                        try {
                            const response = await fetch('/add-to-cart', {
                                method: 'POST',
                                headers: {
                                    "X-CSRF-TOKEN": document.querySelector(
                                            'input[name="_token"]')
                                        .value
                                },
                                body: formData
                            });

                            const data = await response.json(); // Xử lý phản hồi từ server
                            if (response.ok) {
                                alert(data.message);
                                // Thực hiện hành động khi thêm thành công (ví dụ, cập nhật giỏ hàng, thông báo)
                            } else {
                                console.error("Error adding product to cart:", data);
                            }
                        } catch (error) {
                            console.error("Fetch error:", error);
                        }
                    }

                })
            });



            const category_btn = document.querySelectorAll('.fruits-check');
            // console.log(category_btn);
            category_btn.forEach(btn => {
                btn.addEventListener('click', async function(e) {
                    const slug = btn.getAttribute('data-slug');
                    console.log(slug);
                            try {
                                const response = await fetch(
                                `/shop/${slug}`, { // Sử dụng query string thay vì body
                                    method: 'GET',
                                    headers: {
                                        "Content-Type": "application/json"
                                    }
                                });

                                const data = await response.json(); // Xử lý phản hồi từ server
                                if (response.ok) {
                                    console.log(data);
                                    // Cập nhật giao diện với dữ liệu sản phẩm
                                } else {
                                    console.error("Error fetching products:", data);
                                }
                            } catch (error) {
                                console.error("Fetch error:", error);
                            }
                });
            });

        })
    </script>
@endsection
