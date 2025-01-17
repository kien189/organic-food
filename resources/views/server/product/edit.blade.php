@extends('server.layout.master')
@section('title', 'Edit Category')
@section('content')
    <div class="page-body">
        <!-- New Product Add Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <form action="{{ route('product.update', $product->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-2">
                                            <h5>Information Product</h5>
                                        </div>

                                        <div class="theme-form theme-form-2 mega-form">
                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-3 mb-0">Product Name </label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="name" type="text" id="title"
                                                        onkeyup="ChangeToSlug();" value="{{ old('name', $product->name) }}"
                                                        placeholder="Product Name">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-3 mb-0">Product Slug</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="slug" type="text" id="slug"
                                                        placeholder="Product Name">
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
                                                            <option value="{{ $category->id }}"
                                                                {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                                                {{ $category->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-2">
                                            <h5>Product Description </h5>
                                        </div>

                                        <div class="theme-form theme-form-2 mega-form">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row">
                                                        <label class="form-label-title col-sm-3 mb-0">Description</label>
                                                        <div class="col-sm-9">
                                                            <textarea id="editor" name="description">{{ old('description', $product->description) }}</textarea>
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
                                            <h5>Short Description</h5>
                                        </div>

                                        <div class="theme-form theme-form-2 mega-form">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row">
                                                        <label class="form-label-title col-sm-3 mb-0">Short Description
                                                        </label>
                                                        <div class="col-sm-9">
                                                            <textarea id="editor-1" name="short_description">{{ old('short_description', $product->short_description) }}</textarea>
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
                                                <label class="col-sm-3 col-form-label form-label-title">Product
                                                    Image</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control form-choose" name="image" type="file"
                                                        id="formFile">
                                                    <img src="{{ $product->image }}" alt="">
                                                    @error('image')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row align-items-center">
                                                <label class="col-sm-3 col-form-label form-label-title">Product Detail Image
                                                </label>
                                                <div class="col-sm-9">
                                                    <input class="form-control form-choose" name="photos[]" type="file"
                                                        id="formFileMultiple1" multiple>
                                                    <div class="border-black d-flex ">
                                                        @foreach ($product->images as $key => $image)
                                                            <div class="mt-2 mb-2 mx-2">
                                                                <img src="{{ $image->image }}" alt=""
                                                                    width="100px" height="100px" class="border-black">
                                                            </div>
                                                        @endforeach
                                                    </div>
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
                                                    <input class="form-control" value="{{ old('price', $product->price) }}"
                                                        type="number" name="price" placeholder="0">
                                                    @error('price')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-4 row align-items-center">
                                                <label class="col-sm-3 form-label-title">Product Sale Price </label>
                                                <div class="col-sm-9">
                                                    <input class="form-control"
                                                        value="{{ old('sale_price', $product->sale_price) }}"
                                                        type="number" name="sale_price" placeholder="0">

                                                </div>
                                                @error('sale_price')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-4 row align-items-center">
                                                <label class="col-sm-3 form-label-title">Số lượng </label>
                                                <div class="col-sm-9">
                                                    <input class="form-control"
                                                        value="{{ old('quantity', $product->quantity) }}" type="number"
                                                        name="quantity" placeholder="0">
                                                    @error('quantity')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="float-end mb-3  ">
                                    <button type="submit" class="btn btn-primary">Update Product </button>
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
