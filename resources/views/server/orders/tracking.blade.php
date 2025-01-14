@extends('server.layout.master')
@section('title','Create Category')
@section('content')
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

    <!-- Order Tracking Seation starts-->
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>Order Tracking</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 overflow-hidden">
                                            <div class="order-left-image">
                                                <div class="tracking-product-image">
                                                    <img src="assets/images/profile/1.jpg"
                                                        class="img-fluid w-100 blur-up lazyload" alt="">
                                                </div>

                                                <div class="order-image-contain">
                                                    <h4>Van Heusen Men's Solid Regular Fit Polo</h4>
                                                    <div class="tracker-number">
                                                        <p>Order Number : <span>W765EWR8568871</span></p>
                                                        <p>Brand : <span>Van Heusen</span></p>
                                                        <p>Order Placed : <span>June 25, 2021</span></p>
                                                    </div>
                                                    <h5>Your items is on the way. Tracking information will be
                                                        available within 24 hours.</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <ol class="progtrckr">
                                            <li class="progtrckr-done">
                                                <h5>Order Processing</h5>
                                                <h6>05:43 AM</h6>
                                            </li>
                                            <li class="progtrckr-done">
                                                <h5>Pre-Production</h5>
                                                <h6>01:21 PM</h6>
                                            </li>
                                            <li class="progtrckr-done">
                                                <h5>In Production</h5>
                                                <h6>Processing</h6>
                                            </li>
                                            <li class="progtrckr-todo">
                                                <h5>Shipped</h5>
                                                <h6>Pending</h6>
                                            </li>
                                            <li class="progtrckr-todo">
                                                <h5>Delivered</h5>
                                                <h6>Pending</h6>
                                            </li>
                                        </ol>

                                        <div class="col-12 overflow-visible">
                                            <div class="tracker-table">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr class="table-head">
                                                                <th scope="col">Date</th>
                                                                <th scope="col">Time</th>
                                                                <th scope="col">Discription</th>
                                                                <th scope="col">Location</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <h6>21/05/2021</h6>
                                                                </td>
                                                                <td>
                                                                    <h6>12:21 AM</h6>
                                                                </td>
                                                                <td>
                                                                    <p class="fw-bold">Shipped Info</p>
                                                                </td>
                                                                <td>
                                                                    <h6>3 SW. Summit St. Lithonia, GA 30038</h6>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <h6>15/04/2021</h6>
                                                                </td>
                                                                <td>
                                                                    <h6>01:00 PM</h6>
                                                                </td>
                                                                <td>
                                                                    <p class="fw-bold">Shipped</p>
                                                                </td>
                                                                <td>
                                                                    <h6>70 Rockwell Lane Falls Church, VA 22041
                                                                    </h6>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <h6>04/05/2021</h6>
                                                                </td>
                                                                <td>
                                                                    <h6>03:58 AM</h6>
                                                                </td>
                                                                <td>
                                                                    <p class="fw-bold">Shipped Info Received</p>
                                                                </td>
                                                                <td>
                                                                    <h6>13 Durham St. The Villages, FL 32162
                                                                    </h6>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <h6>30/04/2021</h6>
                                                                </td>
                                                                <td>
                                                                    <h6>06:26 PM</h6>
                                                                </td>
                                                                <td>
                                                                    <p class="fw-bold">Origin Scan</p>
                                                                </td>
                                                                <td>
                                                                    <h6>38 Saxon Lane Mobile, AL 36605</h6>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <h6>02/02/2021</h6>
                                                                </td>
                                                                <td>
                                                                    <h6>03:45 PM</h6>
                                                                </td>
                                                                <td>
                                                                    <p class="fw-bold">Shipped Info Received</p>
                                                                </td>
                                                                <td>
                                                                    <h6>3 Willow Street Chillicothe, OH 45601
                                                                    </h6>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <h6>14/01/2021</h6>
                                                                </td>
                                                                <td>
                                                                    <h6>12:21 AM</h6>
                                                                </td>
                                                                <td>
                                                                    <p class="fw-bold">Shipped</p>
                                                                </td>
                                                                <td>
                                                                    <h6>35 Brickyard Rd. Marshalltown, IA 50158
                                                                    </h6>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end border-0 pb-0 d-flex justify-content-end">
                                    <button class="btn btn-primary me-3">Submit</button>
                                    <button class="btn btn-outline">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

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
        <!-- footer end-->
    </div>
    <!-- Order Tracking Seation End-->
</div>
<!-- Page Body End-->
</div>
<!-- page-wrapper End-->

<!-- Modal Start -->
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
<!-- Modal End -->
@endsection
