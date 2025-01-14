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

    <!-- Order section Start -->
    <div class="page-body">
        <!-- Table Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="title-header option-title">
                                <h5>Order List</h5>
                                <a href="#" class="btn btn-solid">Download all orders</a>
                            </div>
                            <div>
                                <div class="table-responsive">
                                    <table class="table all-package order-table theme-table" id="table_id">
                                        <thead>
                                            <tr>
                                                <th>Order Image</th>
                                                <th>Order Code</th>
                                                <th>Date</th>
                                                <th>Payment Method</th>
                                                <th>Delivery Status</th>
                                                <th>Amount</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr data-bs-toggle="offcanvas" href="#order-details">
                                                <td>
                                                    <a class="d-block">
                                                        <span class="order-image">
                                                            <img src="assets/images/product/1.png"
                                                                class="img-fluid" alt="users">
                                                        </span>
                                                    </a>
                                                </td>

                                                <td> 406-4883635</td>

                                                <td>Jul 20, 2022</td>

                                                <td>Paypal</td>

                                                <td class="order-success">
                                                    <span>Success</span>
                                                </td>

                                                <td>$15</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="order-detail.html">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalToggle">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="btn btn-sm btn-solid text-white"
                                                                href="order-tracking.html">
                                                                Tracking
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>

                                            <tr data-bs-toggle="offcanvas" href="#order-details">
                                                <td>
                                                    <span class="order-image">
                                                        <img src="assets/images/product/2.png" alt="users">
                                                    </span>
                                                </td>

                                                <td> 573-685572</td>

                                                <td>Jul 25, 2022</td>

                                                <td>Paypal</td>

                                                <td class="order-success">
                                                    <span>Success</span>
                                                </td>

                                                <td>$15</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="order-detail.html">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalToggle">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="btn btn-sm btn-solid text-white"
                                                                href="order-tracking.html">
                                                                Tracking
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>

                                            <tr data-bs-toggle="offcanvas" href="#order-details">
                                                <td>
                                                    <span class="order-image">
                                                        <img src="assets/images/product/3.png" alt="users">
                                                    </span>
                                                </td>

                                                <td> 759-4568734</td>

                                                <td>Jul 29, 2022</td>

                                                <td>Stripe</td>

                                                <td class="order-pending">
                                                    <span>Pending</span>
                                                </td>

                                                <td>$15</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="order-detail.html">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalToggle">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="btn btn-sm btn-solid text-white"
                                                                href="order-tracking.html">
                                                                Tracking
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>

                                            <tr data-bs-toggle="offcanvas" href="#order-details">
                                                <td>
                                                    <span class="order-image">
                                                        <img src="assets/images/product/4.png" alt="users">
                                                    </span>
                                                </td>

                                                <td> 546-7664537</td>

                                                <td>Jul 30, 2022</td>

                                                <td>Paypal</td>

                                                <td class="order-success">
                                                    <span>Success</span>
                                                </td>

                                                <td>$15</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="order-detail.html">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalToggle">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="btn btn-sm btn-solid text-white"
                                                                href="order-tracking.html">
                                                                Tracking
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>

                                            <tr data-bs-toggle="offcanvas" href="#order-details">
                                                <td>
                                                    <span class="order-image">
                                                        <img src="assets/images/product/5.png" alt="users">
                                                    </span>
                                                </td>

                                                <td> 479-7533144</td>

                                                <td>Aug 01, 2022</td>

                                                <td>Stripe</td>

                                                <td class="order-success">
                                                    <span>Success</span>
                                                </td>

                                                <td>$15</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="order-detail.html">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalToggle">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="btn btn-sm btn-solid text-white"
                                                                href="order-tracking.html">
                                                                Tracking
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>

                                            <tr data-bs-toggle="offcanvas" href="#order-details">
                                                <td>
                                                    <span class="order-image">
                                                        <img src="assets/images/product/6.png" alt="users">
                                                    </span>
                                                </td>

                                                <td> 456-1245789</td>

                                                <td>Aug 10, 2022</td>

                                                <td>Stripe</td>

                                                <td class="order-cancle">
                                                    <span>Cancel</span>
                                                </td>

                                                <td>$15</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="order-detail.html">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalToggle">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="btn btn-sm btn-solid text-white"
                                                                href="order-tracking.html">
                                                                Tracking
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>

                                            <tr data-bs-toggle="offcanvas" href="#order-details">
                                                <td>
                                                    <span class="order-image">
                                                        <img src="assets/images/product/7.png" alt="users">
                                                    </span>
                                                </td>

                                                <td> 057-3657895</td>

                                                <td>Aug 18, 2022</td>

                                                <td>Paypal</td>

                                                <td class="order-cancle">
                                                    <span>Cancel</span>
                                                </td>

                                                <td>$15</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="order-detail.html">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalToggle">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="btn btn-sm btn-solid text-white"
                                                                href="order-tracking.html">
                                                                Tracking
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>

                                            <tr data-bs-toggle="offcanvas" href="#order-details">
                                                <td>
                                                    <span class="order-image">
                                                        <img src="assets/images/product/8.png" alt="users">
                                                    </span>
                                                </td>

                                                <td> 123-1234567</td>

                                                <td>Aug 29, 2022</td>

                                                <td>Paypla</td>

                                                <td class="order-success">
                                                    <span>Success</span>
                                                </td>

                                                <td>$15</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="order-detail.html">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalToggle">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="btn btn-sm btn-solid text-white"
                                                                href="order-tracking.html">
                                                                Tracking
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>

                                            <tr data-bs-toggle="offcanvas" href="#order-details">
                                                <td>
                                                    <span class="order-image">
                                                        <img src="assets/images/product/9.png" alt="users">
                                                    </span>
                                                </td>

                                                <td> 987-9876543</td>

                                                <td>Sep 09, 2022</td>

                                                <td>Paypal</td>

                                                <td class="order-success">
                                                    <span>Success</span>
                                                </td>

                                                <td>$15</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="order-detail.html">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalToggle">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="btn btn-sm btn-solid text-white"
                                                                href="order-tracking.html">
                                                                Tracking
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>

                                            <tr data-bs-toggle="offcanvas" href="#order-details">
                                                <td>
                                                    <span class="order-image">
                                                        <img src="assets/images/product/10.png" alt="users">
                                                    </span>
                                                </td>

                                                <td> 147-3692584</td>

                                                <td>Sep 17, 2022</td>

                                                <td>Stripe</td>

                                                <td class="order-success">
                                                    <span>Success</span>
                                                </td>

                                                <td>$15</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="order-detail.html">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalToggle">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="btn btn-sm btn-solid text-white"
                                                                href="order-tracking.html">
                                                                Tracking
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>

                                            <tr data-bs-toggle="offcanvas" href="#order-details">
                                                <td>
                                                    <span class="order-image">
                                                        <img src="assets/images/product/11.png" alt="users">
                                                    </span>
                                                </td>

                                                <td> 586-5865224</td>

                                                <td>Sep 20, 2022</td>

                                                <td>Stripe</td>

                                                <td class="order-pending">
                                                    <span>Pending</span>
                                                </td>

                                                <td>$15</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="order-detail.html">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalToggle">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="btn btn-sm btn-solid text-white"
                                                                href="order-tracking.html">
                                                                Tracking
                                                            </a>
                                                        </li>
                                                    </ul>
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
        </div>
        <!-- Table End -->

        <!-- footer start-->
        <div class="container-fluid">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Order section End -->
</div>
<!-- Page Body End-->
</div>
<!-- page-wrapper End -->

<!-- Modal start -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-body">
            <h5 class="modal-title" id="staticBackdropLabel">Logging Out</h5>
            <p>Are you sure you want to log out?</p>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="button-box">
                <button type="button" class="btn btn--no" data-bs-dismiss="modal">No</button>
                <button type="button" class="btn  btn--yes btn-primary">Yes</button>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Modal end -->
@endsection
