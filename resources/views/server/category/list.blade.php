@extends('server.layout.master')
@section('title', 'List Category')
@section('content')
    <!-- Container-fluid starts-->
    <div class="page-body">
        <!-- All User Table Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">

                            <div class="title-header option-title d-flex align-items-center">

                                <h5>Danh sách danh mục</h5>

                                <form action="{{ route('category.index') }}" method="GET" class="d-inline-flex">
                                    <div class="input-group mx-3 ">
                                        <input type="text" name="search" class="form-control "
                                            placeholder="Tìm kiếm danh mục ..." aria-label="Recipient's username"
                                            aria-describedby="basic-addon2">
                                        <span class="input-group-text bg-white" id="basic-addon2">
                                            <button type="submit" class="border-0 bg-white">
                                                <svg fill="#000000" width="16px" height="16px" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z" />
                                                </svg></span>
                                        </button>
                                    </div>
                                    <a href="{{ route('category.create') }}"
                                        class="align-items-center btn btn-theme d-flex">
                                        <i data-feather="plus-square"></i>Thêm mới 
                                    </a>
                                </form>
                            </div>

                            <div class="table-responsive category-table">
                                <div>
                                    <table class="table all-package theme-table" id="table_id">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Product Name</th>
                                                <th>Date</th>
                                                <th>Product Image</th>
                                                <th>Slug</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($categories as $category)
                                                <tr>
                                                    <td>#{{ $loop->index + 1 }}</td>
                                                    <td>{{ $category->name }}</td>

                                                    <td>{{ $category->created_at->format('M d, Y') }}</td>

                                                    <td>
                                                        <div class="table-image">
                                                            {{-- <img src="{{ asset('storage/categories/' . $category->image) }}"
                                                                class="img-fluid" style="background-color:balck" alt=""> --}}
                                                            <img src="{{ $category->image }}" alt="">
                                                        </div>
                                                    </td>


                                                    <td>{{ $category->slug }}</td>

                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <a href="order-detail.html">
                                                                    <i class="ri-eye-line"></i>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="{{ route('category.edit', $category->id) }}">
                                                                    <i class="ri-pencil-line"></i>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <form
                                                                    action="{{ route('category.destroy', $category->id) }}"
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
        <!-- All User Table Ends-->
        @if ($categories->hasPages())
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-lg-end p-4">
                    {{-- Nút Previous --}}
                    @if ($categories->onFirstPage())
                        <li class="page-item disabled"><a class="page-link">Previous</a></li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $categories->previousPageUrl() }}">Previous</a>
                        </li>
                    @endif

                    {{-- Các nút trang --}}
                    @foreach ($categories->getUrlRange(1, $categories->lastPage()) as $page => $url)
                        <li class="page-item {{ $categories->currentPage() === $page ? 'active' : '' }}">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach

                    {{-- Nút Next --}}
                    @if ($categories->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $categories->nextPageUrl() }}">Next</a>
                        </li>
                    @else
                        <li class="page-item disabled"><a class="page-link">Next</a></li>
                    @endif
                </ul>
            </nav>
        @endif


    </div>
    <!-- Container-fluid end -->

@endsection
