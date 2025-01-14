@extends('server.layout.master')
@section('title','Create Category')
@section('content')
 <!-- Page Body start -->
 <div class="page-body-wrapper">
    <!-- Page Sidebar Start-->
    <div class="sidebar-wrapper">
        <div id="sidebarEffect"></div>
        <div>
            <div class="logo-wrapper logo-wrapper-center">
                <a href="index.html" data-bs-original-title="" title="">
                    <img class="img-fluid for-white" src="assets/images/logo/full-white.png" alt="logo" />
                    <img class="img-fluid for-dark" src="assets/images/logo/1-white.png" alt="" />
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
                    <img class="img-fluid main-logo main-white" src="assets/images/logo/1-white.png"
                        alt="logo" />
                    <img class="img-fluid main-logo main-dark" src="assets/images/logo/logo-white.png"
                        alt="logo" />
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

    <div class="page-body">
        <!-- New Product Add Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Create Role</h5>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Name <span
                                                    class="theme-color">*</span></label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text"
                                                    placeholder="Author Name" />
                                            </div>
                                        </div>
                                    </form>
                                    <div class="mb-3">
                                        <h4 class="form-label-title">Permissions</h4>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form">
                                        <div class="row g-sm-4 g-2">
                                            <div class="col-xl-6">
                                                <div class="row roles-form">
                                                    <div class="col-12">
                                                        <ul>
                                                            <li>Roles :</li>
                                                            <li>
                                                                <input class="checkbox_animated checkall"
                                                                    type="checkbox" value="" id="role1" />
                                                                <label class="form-check-label m-0"
                                                                    for="role1">All</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it"
                                                                    type="checkbox" id="role2" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="role2">Index</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it"
                                                                    type="checkbox" id="role3" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="role3">Create</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it"
                                                                    type="checkbox" id="role4" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="role4">Edit</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it"
                                                                    type="checkbox" id="role5" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="role5">Destroy</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-12">
                                                        <ul>
                                                            <li>Users :</li>
                                                            <li>
                                                                <input class="checkbox_animated checkall1"
                                                                    type="checkbox" value="" id="role01" />
                                                                <label class="form-check-label m-0"
                                                                    for="role01">All</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it1"
                                                                    type="checkbox" id="role02" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="role02">Index</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it1"
                                                                    type="checkbox" id="role03" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="role03">Create</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it1"
                                                                    type="checkbox" id="role04" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="role04">Edit</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it1"
                                                                    type="checkbox" id="role05" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="role05">Destroy</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-12">
                                                        <ul>
                                                            <li>Product :</li>
                                                            <li>
                                                                <input class="checkbox_animated checkall2"
                                                                    type="checkbox" value="" id="role6" />
                                                                <label class="form-check-label m-0"
                                                                    for="role6">All</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it2"
                                                                    type="checkbox" id="role7" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="role7">Index</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it2"
                                                                    type="checkbox" id="role8" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="role8">Create</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it2"
                                                                    type="checkbox" id="role9" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="role9">Edit</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it2"
                                                                    type="checkbox" id="role10" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="role10">Destroy</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-12">
                                                        <ul>
                                                            <li>Category :</li>
                                                            <li>
                                                                <input class="checkbox_animated checkall3"
                                                                    type="checkbox" value="" id="role06" />
                                                                <label class="form-check-label m-0"
                                                                    for="role06">All</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it3"
                                                                    type="checkbox" id="role07" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="role07">Index</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it3"
                                                                    type="checkbox" id="role08" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="role08">Create</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it3"
                                                                    type="checkbox" id="role09" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="role09">Edit</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it3"
                                                                    type="checkbox" id="role010" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="role010">Destroy</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-12">
                                                        <ul>
                                                            <li>Attributes :</li>
                                                            <li>
                                                                <input class="checkbox_animated checkall4"
                                                                    type="checkbox" value="" id="r1" />
                                                                <label class="form-check-label m-0"
                                                                    for="r1">All</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it4"
                                                                    type="checkbox" id="r2" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="r2">Index</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it4"
                                                                    type="checkbox" id="r3" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="r3">Create</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it4"
                                                                    type="checkbox" id="r4" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="r4">Edit</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it4"
                                                                    type="checkbox" id="r5" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="r5">Destroy</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-12">
                                                        <ul>
                                                            <li>Order :</li>
                                                            <li>
                                                                <input class="checkbox_animated checkall5"
                                                                    type="checkbox" value="" id="r6" />
                                                                <label class="form-check-label m-0"
                                                                    for="r6">All</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it5"
                                                                    type="checkbox" id="r7" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="r7">Index</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it5"
                                                                    type="checkbox" id="r8" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="r8">Create</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it5"
                                                                    type="checkbox" id="r9" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="r9">Edit</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it5"
                                                                    type="checkbox" id="r10" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="r10">Destroy</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <div class="row roles-form">
                                                    <div class="col-12">
                                                        <ul>
                                                            <li>Localization :</li>
                                                            <li>
                                                                <input class="checkbox_animated checkall6"
                                                                    type="checkbox" value="" id="rl1" />
                                                                <label class="form-check-label m-0"
                                                                    for="rl1">All</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it6"
                                                                    type="checkbox" id="rl2" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="rl2">Index</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it6"
                                                                    type="checkbox" id="rl3" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="rl3">Create</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it6"
                                                                    type="checkbox" id="rl4" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="rl4">Edit</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it6"
                                                                    type="checkbox" id="rl5" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="rl5">Destroy</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-12">
                                                        <ul>
                                                            <li>Coupons :</li>
                                                            <li>
                                                                <input class="checkbox_animated checkall7"
                                                                    type="checkbox" value="" id="rl6" />
                                                                <label class="form-check-label m-0"
                                                                    for="rl6">All</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it7"
                                                                    type="checkbox" id="rl7" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="rl7">Index</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it7"
                                                                    type="checkbox" id="rl8" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="rl8">Create</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it7"
                                                                    type="checkbox" id="rl9" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="rl9">Edit</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it7"
                                                                    type="checkbox" id="rl10" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="rl10">Destroy</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-12">
                                                        <ul>
                                                            <li>Tax :</li>
                                                            <li>
                                                                <input class="checkbox_animated checkall8"
                                                                    type="checkbox" value="" id="r-1" />
                                                                <label class="form-check-label m-0"
                                                                    for="r-1">All</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it8"
                                                                    type="checkbox" id="r-2" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="r-2">Index</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it8"
                                                                    type="checkbox" id="r-3" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="r-3">Create</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it8"
                                                                    type="checkbox" id="r-4" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="r-4">Edit</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it8"
                                                                    type="checkbox" id="r-5" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="r-5">Destroy</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-12">
                                                        <ul>
                                                            <li>Product Review :</li>
                                                            <li>
                                                                <input class="checkbox_animated checkall9"
                                                                    type="checkbox" value="" id="r-6" />
                                                                <label class="form-check-label m-0"
                                                                    for="r-6">All</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it9"
                                                                    type="checkbox" id="r-7" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="r-7">Index</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it9"
                                                                    type="checkbox" id="r-8" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="r-8">Create</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it9"
                                                                    type="checkbox" id="r-9" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="r-9">Edit</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it9"
                                                                    type="checkbox" id="r-10" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="r-10">Destroy</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-12">
                                                        <ul>
                                                            <li>Support Ticket :</li>
                                                            <li>
                                                                <input class="checkbox_animated checkall10"
                                                                    type="checkbox" value="" id="a1" />
                                                                <label class="form-check-label m-0"
                                                                    for="a1">All</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it10"
                                                                    type="checkbox" id="a2" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="a2">Index</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it10"
                                                                    type="checkbox" id="a3" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="a3">Create</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it10"
                                                                    type="checkbox" id="a4" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="a4">Edit</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it10"
                                                                    type="checkbox" id="a5" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="a5">Destroy</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-12">
                                                        <ul>
                                                            <li>Reports :</li>
                                                            <li>
                                                                <input class="checkbox_animated checkall11"
                                                                    type="checkbox" value="" id="a6" />
                                                                <label class="form-check-label m-0"
                                                                    for="a6">All</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it11"
                                                                    type="checkbox" id="a7" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="a7">Index</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it11"
                                                                    type="checkbox" id="a8" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="a8">Create</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it11"
                                                                    type="checkbox" id="a9" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="a9">Edit</label>
                                                            </li>
                                                            <li>
                                                                <input class="checkbox_animated check-it11"
                                                                    type="checkbox" id="a10" value="" />
                                                                <label class="form-check-label m-0"
                                                                    for="a10">Destroy</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn btn-primary ms-auto mt-4">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New Product Add End -->

        <!-- footer Start -->
        <div class="container-fluid">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">
                            Copyright 2022 © Fastkart theme by pixelstrap
                        </p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- footer En -->
    </div>
    <!-- Container-fluid End -->
</div>
<!-- Page Body End -->
</div>
<!-- page-wrapper End -->

<!-- Modal Start -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-body">
            <h5 class="modal-title" id="staticBackdropLabel">Logging Out</h5>
            <p>Are you sure you want to log out?</p>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            <div class="button-box">
                <button type="button" class="btn btn--no" data-bs-dismiss="modal">
                    No
                </button>
                <button type="button" class="btn btn--yes btn-primary">
                    Yes
                </button>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Modal End -->
@endsection
