@extends('client.layout.master')
@section('title', 'Login - Register ')
@section('content')
    <base href="/">
    <!-- ===============>> account pill start here <<================= -->
    <div class="account-pill padding-top padding-bottom">
        <div class="container">
            <div class="account-pill__wrapper">
                <div class="account-pill__filter">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-login-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-login" type="button" role="tab" aria-controls="pills-login"
                                aria-selected="true">Login</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-register-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-register" type="button" role="tab"
                                aria-controls="pills-register" aria-selected="false">Register</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel"
                        aria-labelledby="pills-login-tab">
                        {{-- <form action="" class="account__form needs-validation" novalidate method="post">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    <div>
                                        <label for="account-email" class="form-label">User Name Or Email Address</label>
                                        <input type="email" class="form-control" name="email" id="account-email"
                                            placeholder="Enter your user name or email" required>
                                    </div>
                                </div>
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <div class="col-12">
                                    <div class="form-pass">
                                        <label for="account-pass" class="form-label">Password</label>
                                        <input type="password" class="form-control showhide-pass" name="password"
                                            id="account-pass" placeholder="Password" required>
                                    </div>
                                </div>
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="account__check">
                                <div class="account__check-remember">
                                    <input type="checkbox" class="form-check-input" name="remember" value=""
                                        id="terms-check">
                                    <label for="terms-check" class="form-check-label">
                                        Remember for 30 days
                                    </label>
                                </div>
                                <div class="account__check-forgot">
                                    <a href="{{ route('forgot-password') }}">Forgot Password?</a>
                                </div>
                            </div>
                            <button type="submit" class="trk-btn trk-btn--border trk-btn--primary d-block mt-4">Login your
                                account</button>
                        </form> --}}
                        <form action="" id="loginForm" class="account__form needs-validation" novalidate
                            method="post">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    <div>
                                        <label for="account-email" class="form-label">User Name Or Email Address</label>
                                        <input type="email" class="form-control" name="email" id="account-email"
                                            placeholder="Enter your user name or email" required>
                                        <small class="text-danger" id="errors-email"></small>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-pass">
                                        <label for="account-pass" class="form-label">Password</label>
                                        <input type="password" class="form-control showhide-pass" name="password"
                                            id="account-pass" placeholder="Password" required>
                                        <small class="text-danger" id="errors-password"></small>
                                    </div>
                                </div>

                            </div>
                            <div class="account__check">
                                <div class="account__check-remember">
                                    <input type="checkbox" class="form-check-input" name="remember" value=""
                                        id="terms-check">
                                    <label for="terms-check" class="form-check-label">
                                        Remember for 30 days
                                    </label>
                                </div>
                                <div class="account__check-forgot">
                                    <a href="{{ route('forgot-password') }}">Forgot Password?</a>
                                </div>
                            </div>
                            <button type="submit" class="trk-btn trk-btn--border trk-btn--primary d-block mt-4">Login your
                                account</button>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="pills-register-tab">
                        {{-- <form action="/register" method="post" class="account__form needs-validation" novalidate>
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    <div>
                                        <label for="first-name" class="form-label">Full name</label>
                                        <input class="form-control" type="text" name="name" id="first-name"
                                            placeholder="Enter Your Name">
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div>
                                        <label for="account-email" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" id="account-email2"
                                            placeholder="Enter Your Email" required>
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div>
                                        <label for="account-phone" class="form-label">Phone</label>
                                        <input type="tel" class="form-control" name="phone" id="account-phone"
                                            placeholder="Enter Your Number" required>
                                        @error('phone')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-pass">
                                        <label for="account-pass" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control showhide-pass"
                                            id="account-pass2" placeholder="Password" required>
                                        @error('password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-pass">
                                        <label for="account-cpass" class="form-label">Confirm Password</label>
                                        <input type="password" name="password_confirmation"
                                            class="form-control showhide-pass" id="account-cpass"
                                            placeholder="Re-type password" required>
                                        @error('password_confirmation')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button name="register" type="submit"
                                class="trk-btn trk-btn--border trk-btn--primary d-block mt-4">Create an
                                account</button>

                            <div class="account-switch text-center mt-3">
                                <p>Already have an account? <a href="login.html">Log in</a></p>
                            </div>
                        </form> --}}

                        <form id="registerForm" class="account__form needs-validation" novalidate>
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    <div>
                                        <label for="first-name" class="form-label">Full name</label>
                                        <input class="form-control" type="text" name="name" id="first-name"
                                            placeholder="Enter Your Name">
                                        <small class="text-danger" id="error-name"></small>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div>
                                        <label for="account-email" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" id="account-email"
                                            placeholder="Enter Your Email" required>
                                            <small class="text-danger" id="error-email"></small>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div>
                                        <label for="account-phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" name="phone" id="account-phone"
                                            placeholder="Enter Your Number" required>
                                        <small class="text-danger" id="error-phone"></small>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-pass">
                                        <label for="account-pass" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="account-pass"
                                            placeholder="Password" required>
                                        <small class="text-danger" id="error-password"></small>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-pass">
                                        <label for="account-cpass" class="form-label">Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control"
                                            id="account-cpass" placeholder="Re-type password" required>
                                        <small class="text-danger" id="error-password_confirmation"></small>
                                    </div>
                                </div>
                            </div>

                            <button name="register" type="submit" id="submit-btn"
                                class="trk-btn trk-btn--border trk-btn--primary d-block mt-4">Create an account</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============>> account pill end here <<================= -->




    <!-- ===============>> Feature bar section start here <<================= -->
    <div class="feature-bar border-top">
        <div class="container">
            <div class="row py-3 g-5 g-lg-4 justify-content-center">
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-3 mb-md-0">forgotPassword
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const registerForm = document.getElementById("registerForm");
        const loginForm = document.getElementById("loginForm");
        if (loginForm) {
            loginForm.addEventListener("submit", async function(e) {
                e.preventDefault();
                const form = e.target;
                const formData = new FormData(form);
                try {
                    const response = await fetch("/login", {
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": document.querySelector('input[name="_token"]')
                                .value,
                            "Accept": "application/json"
                        },
                        body: formData
                    });

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
                    // alert(result.message);
                    form.reset();
                    window.location.href = "/";
                } catch (error) {
                    console.error("Error:", error);
                    alert("An error occurred. Please check the console for more details.");
                }
            })
        }
        if (registerForm) {
            registerForm.addEventListener("submit", async function(e) {
                e.preventDefault();

                const form = e.target;
                const formData = new FormData(form);

                // // In các giá trị ra console
                // for (const [key, value] of formData.entries()) {
                //     console.log(key, value);
                // }
                // Xóa thông báo lỗi cũ
                const errorElements = document.querySelectorAll(".text-danger");
                errorElements.forEach(el => el.textContent = "");

                try {
                    const response = await fetch("/register", {
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": document.querySelector('input[name="_token"]')
                                .value,
                            "Accept": "application/json"
                        },
                        body: formData
                    });

                    if (!response.ok) {
                        if (response.status === 422) {
                            const errors = await response.json();
                            // Hiển thị lỗi
                            for (const [key, messages] of Object.entries(errors.errors)) {
                                const errorElement = document.getElementById(`error-${key}`);
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
                    alert(result.message);
                    form.reset();
                    window.location.href = "/login";
                } catch (error) {
                    console.error("Error:", error);
                    alert("An error occurred. Please check the console for more details.");
                }
            });
        }
    });
</script>
