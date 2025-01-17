@extends('server.layout.master')
@section('title', 'Create Category')
@section('content')
    <div class="page-wrapper">
        <div class="page-body-wrapper">
            <div class="page-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="title-header option-title d-sm-flex d-block">
                                        <h5>List Product </h5>
                                        <div class="right-options">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">import</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Export</a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-solid" href="{{ route('product.create') }}"><i
                                                            data-feather="plus-square" class="me-2"></i>Add new </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="table-responsive">
                                            <table class="table all-package theme-table table-product" id="table_id">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Product image</th>
                                                        <th>Product name </th>
                                                        <th>Category </th>
                                                        <th>Quantity </th>
                                                        <th>Price</th>
                                                        <th>Sale Price</th>
                                                        <th>Status</th>
                                                        <th>Option</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach ($products as $product)
                                                        <tr>
                                                            <td>#{{ $loop->index + 1 }}</td>
                                                            <td>
                                                                <div class="table-image">
                                                                    <img src="{{ $product->image }}" class="img-fluid"
                                                                        alt="">
                                                                </div>
                                                            </td>

                                                            <td>{{ $product->name }}</td>

                                                            <td>{{ $product->category->name }}</td>

                                                            <td>{{ $product->quantity }}</td>

                                                            <td class="td-price">${{ number_format($product->price, 2) }}
                                                            </td>

                                                            <td class="td-price">
                                                                ${{ number_format($product->sale_price ?? 0, 2) }}</td>
                                                            <td class="status-close">
                                                                <span>Approved</span>
                                                            </td>

                                                            <td>
                                                                <ul>
                                                                    <li>
                                                                        <a href="{{ route('product.show', $product->id) }}">
                                                                            <i class="ri-eye-line"></i>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="{{ route('product.edit', $product->id) }}">
                                                                            <i class="ri-pencil-line"></i>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <form
                                                                            action="{{ route('product.destroy', $product->id) }}"
                                                                            method="POST" style="display: inline;">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit"
                                                                                onclick="return confirm('Are you sure?')"
                                                                                style="background: none; border: none;with:18px; color: red; padding: 0; cursor: pointer;">
                                                                                <i class="ri-delete-bin-line"></i>
                                                                            </button>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
                @if ($products->hasPages())
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-lg-end p-4">
                            {{-- Nút Previous --}}
                            @if ($products->onFirstPage())
                                <li class="page-item disabled"><a class="page-link">Previous</a></li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $products->previousPageUrl() }}">Previous</a>
                                </li>
                            @endif

                            {{-- Các nút trang --}}
                            @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                <li class="page-item {{ $products->currentPage() === $page ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endforeach

                            {{-- Nút Next --}}
                            @if ($products->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $products->nextPageUrl() }}">Next</a>
                                </li>
                            @else
                                <li class="page-item disabled"><a class="page-link">Next</a></li>
                            @endif
                        </ul>
                    </nav>
                @endif
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
