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

    <!-- tracking section start -->
    <div class="page-body">
        <!-- tracking table start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="title-header title-header-block package-card">
                                <div>
                                    <h5>Order #36648</h5>
                                </div>
                                <div class="card-order-section">
                                    <ul>
                                        <li>October 21, 2021 at 9:08 pm</li>
                                        <li>6 items</li>
                                        <li>Total $5,882.00</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bg-inner cart-section order-details-table">
                                <div class="row g-4">
                                    <div class="col-xl-8">
                                        <div class="table-responsive table-details">
                                            <table class="table cart-table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th colspan="2">Items</th>
                                                        <th class="text-end" colspan="2">
                                                            <a href="javascript:void(0)"
                                                                class="theme-color">Edit
                                                                Items</a>
                                                        </th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr class="table-order">
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="assets/images/profile/1.jpg"
                                                                    class="img-fluid blur-up lazyload" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <p>Product Name</p>
                                                            <h5>Outwear & Coats</h5>
                                                        </td>
                                                        <td>
                                                            <p>Quantity</p>
                                                            <h5>1</h5>
                                                        </td>
                                                        <td>
                                                            <p>Price</p>
                                                            <h5>$63.54</h5>
                                                        </td>
                                                    </tr>

                                                    <tr class="table-order">
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="assets/images/profile/2.jpg"
                                                                    class="img-fluid blur-up lazyload" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <p>Product Name</p>
                                                            <h5>Slim Fit Plastic Coat</h5>
                                                        </td>
                                                        <td>
                                                            <p>Quantity</p>
                                                            <h5>5</h5>
                                                        </td>
                                                        <td>
                                                            <p>Price</p>
                                                            <h5>$63.54</h5>
                                                        </td>
                                                    </tr>

                                                    <tr class="table-order">
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="assets/images/profile/3.jpg"
                                                                    class="img-fluid blur-up lazyload" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <p>Product Name</p>
                                                            <h5>Men's Sweatshirt</h5>
                                                        </td>
                                                        <td>
                                                            <p>Quantity</p>
                                                            <h5>1</h5>
                                                        </td>
                                                        <td>
                                                            <p>Price</p>
                                                            <h5>$63.54</h5>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                                <tfoot>
                                                    <tr class="table-order">
                                                        <td colspan="3">
                                                            <h5>Subtotal :</h5>
                                                        </td>
                                                        <td>
                                                            <h4>$55.00</h4>
                                                        </td>
                                                    </tr>

                                                    <tr class="table-order">
                                                        <td colspan="3">
                                                            <h5>Shipping :</h5>
                                                        </td>
                                                        <td>
                                                            <h4>$12.00</h4>
                                                        </td>
                                                    </tr>

                                                    <tr class="table-order">
                                                        <td colspan="3">
                                                            <h5>Tax(GST) :</h5>
                                                        </td>
                                                        <td>
                                                            <h4>$10.00</h4>
                                                        </td>
                                                    </tr>

                                                    <tr class="table-order">
                                                        <td colspan="3">
                                                            <h4 class="theme-color fw-bold">Total Price :</h4>
                                                        </td>
                                                        <td>
                                                            <h4 class="theme-color fw-bold">$6935.00</h4>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="order-success">
                                            <div class="row g-4">
                                                <h4>summery</h4>
                                                <ul class="order-details">
                                                    <li>Order ID: 5563853658932</li>
                                                    <li>Order Date: October 22, 2018</li>
                                                    <li>Order Total: $907.28</li>
                                                </ul>

                                                <h4>shipping address</h4>
                                                <ul class="order-details">
                                                    <li>Gerg Harvell</li>
                                                    <li>568, Suite Ave.</li>
                                                    <li>Austrlia, 235153 Contact No. 48465465465</li>
                                                </ul>

                                                <div class="payment-mode">
                                                    <h4>payment method</h4>
                                                    <p>Pay on Delivery (Cash/Card). Cash on delivery (COD)
                                                        available. Card/Net banking acceptance subject to device
                                                        availability.</p>
                                                </div>

                                                <div class="delivery-sec">
                                                    <h3>expected date of delivery: <span>october 22, 2018</span>
                                                    </h3>
                                                    <a href="order-tracking.html">track order</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- section end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tracking table end -->

        <div class="container-fluid">
            <!-- footer start-->
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- tracking section End -->
</div>
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
