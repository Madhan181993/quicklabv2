@extends('layouts.admin')

@section('content')

<style>
    label{
        font-size:14px;
        font-weight:500;
    }
    input[type="text"],input[type="email"],input[type="password"]{
        height:30px;
    }
</style>
<h4>Product Management</h4>
<div class="card">

    <div class="card-body">
        <a href="{{ url('add-category') }}" class="btn btn-primary button1" data-toggle="modal" data-target="#AddCategoryModal"> Add Product</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>SKU</th>
                    <th>Name</th>
                    <th>Selling Price</th>
                    <th>Offer Price</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($product as $item)
                <tr>
                    <td>{{ $item->productid }}</td>
                    <td>{{ $item->productsku }}</td>
                    <td>{{ $item->productname }}</td>
                    <td>{{ $item->productsellingprice }}</td>
                    <td>{{ $item->productofferprice }}</td>
                    <td>{{ $item->status }}</td>
                    <!-- <td>
                        <img src="{{ asset('assets/uploads/category/'.$item->image) }}" class="category-list-img" alt="Image Here">
                    </td> -->
                    <td>
                        <a href="{{ url('edit-tax').$item->id }}" data-toggle="tooltip" title="Edit"><i class="far fa-edit"></i></a>
                        <a href="#" data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></a>
                        <!-- <button data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></button> -->
                        <a href=""></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>


<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddCategoryModal">
    Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="AddCategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('insert-category') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            <div class="col-md-6  mb-2">
                                    <label for="">SKU</label>
                                    <input type="text" class="form-control" name="taxcode" required>
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-6  mb-2">
                                    <label for="">Selling Price</label>
                                    <input type="text" class="form-control" name="taxname" required>
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="">Offer Price</label>
                                    <input type="text" class="form-control" name="taxvalue">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="">HSN Code</label>
                                    <input type="text" class="form-control" name="taxpercentage">
                                </div>



                                <div class="col-md-12 mb-2">
                                    <label for="">Product Description</label>
                                    <textarea name="meta_description" rows="3" class="form-control"></textarea>
                                </div>.
                                <div class="col-md-4 mb-2">
                                    <label for="status" class="checkboxLabel">Status&nbsp;&nbsp;<input type="checkbox" class="form-control" name="status"></label>
                                </div>

                                <div class="col-md-12 ">
                                    
                                    <button type="submit" class="btn btn-primary popup-btn">Update</button>
                                    <button class="btn btn-secondary popup-btn"  data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>

@endsection