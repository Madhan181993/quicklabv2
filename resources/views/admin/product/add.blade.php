@extends('layouts.admin')

@section('content')
<style>
    label {
        font-size: 14px;
        font-weight: 500;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type='select'] {
        height: 30px;
    }
</style>

@if (session('status'))
<div class="alert alert-success">{{ session('status') }}</div>
@endif

<h4>Add Products</h4>
<div class="container w-75  border mt-5 ">

    <form class="form-horizontal" enctype="multipart/form-data" action="{{ Route('admin.insert-product') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="UrunID" class="form-label">SKU</label>
                <input type="text" class="form-control" id="SKU" name="SKU" required>
            </div>
            <div class="col-md-5 mb-3">
                <label for="UrunID" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="UrunAdi" class="form-label">Product Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="short_description" class="form-label">Short Description</label>
            <textarea name="short_description" cols="20" rows="2" class="form-control" placeholder="Short Description"></textarea>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" cols="20" rows="4" class="form-control" placeholder="Description"></textarea>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="" class="form-label">Regular Price (INR)</label>
                <input type="text" class="form-control" id="regular_price" name="regular_price" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="" class="form-label">Sale Price (INR)</label>
                <input type="text" class="form-control" id="sale_price" name="sale_price" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="" class="form-label">Regular Price (USD)</label>
                <input type="text" class="form-control" id="regular_price_USD" name="regular_price_USD" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="" class="form-label">Sale Price (USD)</label>
                <input type="text" class="form-control" id="sale_price_USD" name="sale_price_USD" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="" class="form-label">Quicklab Points</label>
                <input type="text" class="form-control" id="QL_points" name="QL_points" required>
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label" for="">Stock</label>
                <select name="stock_status" id="stock_status" class="ms-1 d-block w-100" required>
                    <option>In Stock</option>
                    <option>Out of Stock</option>
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label" for="">Featured</label>
                <select name="featured" id="featured" class="ms-1 d-block w-100" required>
                    <option value="0">No</option>
                    <option value="0">Yes</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="" class="form-label">Quantity</label>
                <input type="text" class="form-control" id="quantity" name="quantity" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="" class="form-label">Product Category</label>
                <select name="category_id" id="category_id" class="ms-1 d-block w-100" required>
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="" class="form-label">Product Image</label>
                <input type="file" class="form-control input-file" name="image" id="image">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success text-white btn-outline-success form-control w-25 m-3" id="">Add Product</button>
        </div>
    </form>
</div>

@endsection