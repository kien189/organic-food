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

    <div class="page-body">

        <!-- New Product Add Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Product Information</h5>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Product
                                                Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text"
                                                    placeholder="Product Name">
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Product
                                                Type</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100" name="state">
                                                    <option disabled>Static Menu</option>
                                                    <option>Simple</option>
                                                    <option>Classified</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label
                                                class="col-sm-3 col-form-label form-label-title">Category</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100" name="state">
                                                    <option disabled>Category Menu</option>
                                                    <option>Electronics</option>
                                                    <option>TV & Appliances</option>
                                                    <option>Home & Furniture</option>
                                                    <option>Another</option>
                                                    <option>Baby & Kids</option>
                                                    <option>Health, Beauty & Perfumes</option>
                                                    <option>Uncategorized</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label
                                                class="col-sm-3 col-form-label form-label-title">Subcategory</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100" name="state">
                                                    <option disabled>Subcategory Menu</option>
                                                    <option>Ethnic Wear</option>
                                                    <option>Ethnic Bottoms</option>
                                                    <option>Women Western Wear</option>
                                                    <option>Sandels</option>
                                                    <option>Shoes</option>
                                                    <option>Beauty & Grooming</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label
                                                class="col-sm-3 col-form-label form-label-title">Brand</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100">
                                                    <option disabled>Brand Menu</option>
                                                    <option value="puma">Puma</option>
                                                    <option value="hrx">HRX</option>
                                                    <option value="roadster">Roadster</option>
                                                    <option value="zara">Zara</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Unit</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100">
                                                    <option disabled>Unit Menu</option>
                                                    <option>Kilogram</option>
                                                    <option>Pieces</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Tags</label>
                                            <div class="col-sm-9">
                                                <div class="bs-example">
                                                    <input type="text" class="form-control"
                                                        placeholder="Type tag & hit enter" id="#inputTag"
                                                        data-role="tagsinput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label
                                                class="col-sm-3 col-form-label form-label-title">Exchangeable</label>
                                            <div class="col-sm-9">
                                                <label class="switch">
                                                    <input type="checkbox"><span class="switch-state"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <label
                                                class="col-sm-3 col-form-label form-label-title">Refundable</label>
                                            <div class="col-sm-9">
                                                <label class="switch">
                                                    <input type="checkbox" checked=""><span
                                                        class="switch-state"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Description</h5>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <label class="form-label-title col-sm-3 mb-0">Product
                                                        Description</label>
                                                    <div class="col-sm-9">
                                                        <div id="editor"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Product Images</h5>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label
                                                class="col-sm-3 col-form-label form-label-title">Images</label>
                                            <div class="col-sm-9">
                                                <input class="form-control form-choose" type="file"
                                                    id="formFile" multiple>
                                            </div>
                                        </div>

                                        <div class="row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Thumbnail
                                                Image</label>
                                            <div class="col-sm-9">
                                                <input class="form-control form-choose" type="file"
                                                    id="formFileMultiple1" multiple>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Product Videos</h5>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Video
                                                Provider</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100" name="state">
                                                    <option>Vimeo</option>
                                                    <option>Youtube</option>
                                                    <option>Dailymotion</option>
                                                    <option>Vimeo</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Video
                                                Link</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text"
                                                    placeholder="Video Link">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Product variations</h5>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Option
                                                Name</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100" name="state">
                                                    <option>Color</option>
                                                    <option>Size</option>
                                                    <option>Material</option>
                                                    <option>Style</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Option
                                                Value</label>
                                            <div class="col-sm-9">
                                                <div class="bs-example">
                                                    <input type="text" class="form-control"
                                                        placeholder="Type tag & hit enter" id="#inputTag"
                                                        data-role="tagsinput">
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <a href="#" class="add-option"><i class="ri-add-line me-2"></i> Add Another
                                        Option</a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Shipping</h5>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Weight
                                                (kg)</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="number" placeholder="Weight">
                                            </div>
                                        </div>

                                        <div class="row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Dimensions
                                                (cm)</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100" name="state">
                                                    <option>Length</option>
                                                    <option>Width</option>
                                                    <option>Height</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Product Price</h5>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 form-label-title">price</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="number" placeholder="0">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 form-label-title">Compare at
                                                price</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="number" placeholder="0">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 form-label-title">Cost per item</label>
                                            <div class="col-sm-5">
                                                <input class="form-control" type="number" placeholder="0">
                                            </div>
                                            <div class="col-sm-2">
                                                <label>Margin:</label>
                                                <span>25%</span>
                                            </div>
                                            <div class="col-sm-2">
                                                <label>Profit:</label>
                                                <span>$5</span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Product Inventory</h5>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">SKU</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Stock
                                                Status</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100" name="state">
                                                    <option>In Stock</option>
                                                    <option>Out Of Stock</option>
                                                    <option>On Backorder</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                    <table class="table variation-table table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">Variant</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">SKU</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Red</td>
                                                <td>
                                                    <input class="form-control" type="number" placeholder="0">
                                                </td>
                                                <td>
                                                    <input class="form-control" type="number" placeholder="0">
                                                </td>
                                                <td>
                                                    <input class="form-control" type="number" placeholder="0">
                                                </td>
                                                <td>
                                                    <ul class="order-option">
                                                        <li><a href="javascript:void(0)" data-toggle="modal"
                                                                data-target="#deleteModal"><i
                                                                    class="ri-delete-bin-line"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Blue</td>
                                                <td>
                                                    <input class="form-control" type="number" placeholder="0">
                                                </td>
                                                <td>
                                                    <input class="form-control" type="number" placeholder="0">
                                                </td>
                                                <td>
                                                    <input class="form-control" type="number" placeholder="0">
                                                </td>
                                                <td>
                                                    <ul class="order-option">
                                                        <li><a href="javascript:void(0)" data-toggle="modal"
                                                                data-target="#deleteModal"><i
                                                                    class="ri-delete-bin-line"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Link Products</h5>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Upsells</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="search">
                                            </div>
                                        </div>

                                        <div class="row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Cross-Sells</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="search">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Search engine listing</h5>
                                    </div>

                                    <div class="seo-view">
                                        <span class="link">https://fastkart.com</span>
                                        <h5>Buy fresh vegetables & Fruits online at best price</h5>
                                        <p>Online Vegetable Store - Buy fresh vegetables & Fruits online at best
                                            prices. Order online and get free delivery.</p>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Page title</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="search"
                                                    placeholder="Fresh Fruits">
                                            </div>
                                        </div>

                                        <div class="mb-4 row">
                                            <label class="form-label-title col-sm-3 mb-0">Meta
                                                description</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="form-label-title col-sm-3 mb-0">URL handle</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="search"
                                                    placeholder="https://fastkart.com/fresh-veggies">
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
        <!-- New Product Add End -->

        <!-- footer Start -->
        <div class="container-fluid">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
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
