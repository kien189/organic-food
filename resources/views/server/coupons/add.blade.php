@extends('server.layout.master')
@section('title','Create Category')
@section('content')
  <!-- Page Body Start-->
  <div class="page-body-wrapper">
    <!-- Page Sidebar Start-->
    <div class="sidebar-wrapper">
        <div id="sidebarEffect"></div>
        <div>
            <div class="logo-wrapper logo-wrapper-center">
                <a href="index.html" data-bs-original-title="" title="">
                    <img class="img-fluid for-white" src="assets/images/logo/full-white.png" alt="logo">
                </a>
                <div class="back-btn">
                    <i class="fa fa-angle-left"></i>
                </div>
                <div class="toggle-sidebar">
                    <i class="ri-apps-line status_toggle middle sidebar-toggle"></i>
                </div>
            </div>
            <div class="logo-icon-wrapper">
                <a href="index.html">
                    <img class="img-fluid main-logo main-white" src="assets/images/logo/1-white.png" alt="logo">
                    <img class="img-fluid main-logo main-dark" src="assets/images/logo/logo-white.png"
                        alt="logo">
                </a>
            </div>
            <nav class="sidebar-main">
                <div class="left-arrow" id="left-arrow">
                    <i data-feather="arrow-left"></i>
                </div>

                <div id="sidebar-menu">
                    <ul class="sidebar-links" id="simple-bar">
                        <li class="back-btn"></li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="index.html">
                                <i class="ri-home-line"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-list">
                            <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                <i class="ri-store-3-line"></i>
                                <span>Product</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="products.html">Prodcts</a>
                                </li>

                                <li>
                                    <a href="add-new-product.html">Add New Products</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-list">
                            <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                <i class="ri-list-check-2"></i>
                                <span>Category</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="category.html">Category List</a>
                                </li>

                                <li>
                                    <a href="add-new-category.html">Add New Category</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-list">
                            <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                <i class="ri-list-settings-line"></i>
                                <span>Attributes</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="attributes.html">Attributes</a>
                                </li>

                                <li>
                                    <a href="add-new-attributes.html">Add Attributes</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                <i class="ri-user-3-line"></i>
                                <span>Users</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="all-users.html">All users</a>
                                </li>
                                <li>
                                    <a href="add-new-user.html">Add new user</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                <i class="ri-user-3-line"></i>
                                <span>Roles</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="role.html">All roles</a>
                                </li>
                                <li>
                                    <a href="create-role.html">Create Role</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="media.html">
                                <i class="ri-price-tag-3-line"></i>
                                <span>Media</span>
                            </a>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                <i class="ri-archive-line"></i>
                                <span>Orders</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="order-list.html">Order List</a>
                                </li>
                                <li>
                                    <a href="order-detail.html">Order Detail</a>
                                </li>
                                <li>
                                    <a href="order-tracking.html">Order Tracking</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-list">
                            <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                <i class="ri-focus-3-line"></i>
                                <span>Localization</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="translation.html">Translation</a>
                                </li>

                                <li>
                                    <a href="currency-rates.html">Currency Rates</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-list">
                            <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                <i class="ri-price-tag-3-line"></i>
                                <span>Coupons</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="coupon-list.html">Coupon List</a>
                                </li>

                                <li>
                                    <a href="create-coupon.html">Create Coupon</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="taxes.html">
                                <i class="ri-price-tag-3-line"></i>
                                <span>Tax</span>
                            </a>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="product-review.html">
                                <i class="ri-star-line"></i>
                                <span>Product Review</span>
                            </a>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="support-ticket.html">
                                <i class="ri-phone-line"></i>
                                <span>Support Ticket</span>
                            </a>
                        </li>

                        <li class="sidebar-list">
                            <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                <i class="ri-settings-line"></i>
                                <span>Settings</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="profile-setting.html">Profile Setting</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="reports.html">
                                <i class="ri-file-chart-line"></i>
                                <span>Reports</span>
                            </a>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="list-page.html">
                                <i class="ri-list-check"></i>
                                <span>List Page</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="right-arrow" id="right-arrow">
                    <i data-feather="arrow-right"></i>
                </div>
            </nav>
        </div>
    </div>
    <!-- Page Sidebar Ends-->

    <!-- Create Coupon Table start -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>Create Coupon</h5>
                                    </div>
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-home-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-home"
                                                type="button">General</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-profile-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-profile"
                                                type="button">Restriction</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-usage-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-usage" type="button">Usage</button>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                            <form class="theme-form theme-form-2 mega-form">
                                                <div class="card-header-1">
                                                    <h5>General</h5>
                                                </div>

                                                <div class="row">
                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="form-label-title col-lg-2 col-md-3 mb-0">Coupon
                                                            Title</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="col-lg-2 col-md-3 col-form-label form-label-title">Coupon
                                                            Code</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <input class="form-control" type="number">
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="col-lg-2 col-md-3 col-form-label form-label-title">Start
                                                            Date</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <input class="form-control" type="date">
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="col-lg-2 col-md-3 col-form-label form-label-title">End
                                                            Date</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <input class="form-control" type="date">
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="form-label-title col-lg-2 col-md-3 mb-0">Free
                                                            Shipping</label>
                                                        <div class="col-md-9">
                                                            <div class="form-check user-checkbox ps-0">
                                                                <input class="checkbox_animated check-it"
                                                                    type="checkbox" value=""
                                                                    id="flexCheckDefault">
                                                                <label
                                                                    class="form-label-title col-md-2 mb-0">Allow
                                                                    Free Shipping</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="col-lg-2 col-md-3 col-form-label form-label-title">Quantity</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <input class="form-control" type="number">
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="col-sm-2 col-form-label form-label-title">Discount
                                                            Type</label>
                                                        <div class="col-sm-10">
                                                            <select class="js-example-basic-single"
                                                                name="state">
                                                                <option disabled>--Select--</option>
                                                                <option>Percent</option>
                                                                <option>Fixed</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center">
                                                        <label
                                                            class="form-label-title col-lg-2 col-md-3 mb-0">Status</label>
                                                        <div class="col-md-9">
                                                            <div class="form-check user-checkbox ps-0">
                                                                <input class="checkbox_animated check-it"
                                                                    type="checkbox" value=""
                                                                    id="flexCheckDefault1">
                                                                <label class="form-label-title col-md-2 mb-0">
                                                                    Enable the Coupon</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel">
                                            <form class="theme-form theme-form-2 mega-form">
                                                <div class="card-header-1">
                                                    <h5>Restriction</h5>
                                                </div>

                                                <div class="row">
                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="form-label-title col-lg-2 col-md-3 mb-0">Products</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="col-sm-2 col-form-label form-label-title">Category</label>
                                                        <div class="col-sm-10">
                                                            <select class="js-example-basic-single"
                                                                name="state">
                                                                <option disabled>--Select--</option>
                                                                <option>Electronics</option>
                                                                <option>Clothes</option>
                                                                <option>Shoes</option>
                                                                <option>Digital</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="col-lg-2 col-md-3 col-form-label form-label-title">Minimum
                                                            Spend</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <input class="form-control" type="number">
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center">
                                                        <label
                                                            class="col-lg-2 col-md-3 col-form-label form-label-title">Maximum
                                                            Spend</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <input class="form-control" type="number">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="tab-pane fade" id="pills-usage" role="tabpanel">
                                            <form class="theme-form theme-form-2 mega-form">
                                                <div class="card-header-1">
                                                    <h5>Usage Limits</h5>
                                                </div>

                                                <div class="row">
                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="form-label-title col-lg-2 col-md-3 mb-0">Per
                                                            Limited</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <input class="form-control" type="number">
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center">
                                                        <label
                                                            class="form-label-title col-lg-2 col-md-3 mb-0">Per
                                                            Customer</label>
                                                        <div class="col-md-9 col-lg-10">
                                                            <input class="form-control" type="number">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
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
    <!-- Create Coupon Table End -->

    
    <!-- footer end-->
</div>
</div>
@endsection
