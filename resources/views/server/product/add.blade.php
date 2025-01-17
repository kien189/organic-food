@extends('server.layout.master')
@section('title', 'Create Category')
@section('content')
    <div class="page-body">
        <!-- New Product Add Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-2">
                                            <h5>Information Product</h5>
                                        </div>

                                        <div class="theme-form theme-form-2 mega-form">
                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-3 mb-0">Product Name</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" value="{{ old('name') }}" name="name" type="text" id="title"
                                                        onkeyup="ChangeToSlug();" placeholder="Product Name">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-3 mb-0">Product Slug </label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="slug"  type="text" id="slug"
                                                        placeholder="Product Slug">
                                                    @error('slug')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label class="col-sm-3 col-form-label form-label-title">Category</label>
                                                <div class="col-sm-9">
                                                    <select class="js-example-basic-single w-100" name="category_id">
                                                        <option disabled>Category Menu</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">
                                                                {{ $category->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            {{-- <div class="mb-4 row align-items-center">
                                                <label class="col-sm-3 col-form-label form-label-title">Active</label>
                                                <div class="col-sm-9">
                                                    <label class="switch">
                                                        <input type="checkbox" name="status" checked=""><span
                                                            class="switch-state"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <label class="col-sm-3 col-form-label form-label-title">Hidden</label>
                                                <div class="col-sm-9">
                                                    <label class="switch">
                                                        <input type="checkbox"><span class="switch-state"></span>
                                                    </label>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-2">
                                            <h5>Description</h5>
                                        </div>

                                        <div class="theme-form theme-form-2 mega-form">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row">
                                                        <label class="form-label-title col-sm-3 mb-0">Description</label>
                                                        <div class="col-sm-9">
                                                            <textarea id="editor" name="description" >{{ old('description') }}</textarea>
                                                            @error('description')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-2">
                                            <h5>Short Description </h5>
                                        </div>

                                        <div class="theme-form theme-form-2 mega-form">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row">
                                                        <label class="form-label-title col-sm-3 mb-0">Short Description
                                                        </label>
                                                        <div class="col-sm-9">
                                                            <textarea id="editor-1" name="short_description">{{ old('short_description') }}</textarea>
                                                            @error('short_description')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-2">
                                            <h5>Product Image </h5>
                                        </div>

                                        <div class="theme-form theme-form-2 mega-form">
                                            <div class="mb-4 row align-items-center">
                                                <label class="col-sm-3 col-form-label form-label-title">Product Image</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control form-choose" value="{{ old('image') }}" name="image" type="file"
                                                        id="formFile" >
                                                    @error('image')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row align-items-center">
                                                <label class="col-sm-3 col-form-label form-label-title">Product Detail Image
                                                </label>
                                                <div class="col-sm-9">
                                                    <input class="form-control form-choose" value="{{ old('photos') }}" name="photos[]" type="file" id="formFileMultiple1" multiple>
                                                    @error('photos')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-2">
                                            <h5>Product Price </h5>
                                        </div>

                                        <div class="theme-form theme-form-2 mega-form">
                                            <div class="mb-4 row align-items-center">
                                                <label class="col-sm-3 form-label-title">Price </label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="number" value="{{ old('price') }}" name="price"
                                                        placeholder="0">
                                                    @error('price')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-4 row align-items-center">
                                                <label class="col-sm-3 form-label-title">Sale Price</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="number" value="{{ old('sale_price') }}" name="sale_price"
                                                        placeholder="0">

                                                </div>
                                                @error('sale_price')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                            </div>
                                            <div class="mb-4 row align-items-center">
                                                <label class="col-sm-3 form-label-title">Quantity</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="number" value="{{ old('quantity') }}" name="quantity"
                                                        placeholder="0">
                                                    @error('quantity')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="float-end mb-3  ">
                                    <button type="submit" class="btn btn-primary"><i data-feather="plus-square" class="me-2"></i> Add new</button>
                                </div>
                            </form>
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
