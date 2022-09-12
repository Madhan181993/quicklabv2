@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h1>Tax Management</h1>
    </div>
    <div class="card-body">
        <a href="{{ url('add-category') }}" class="btn btn-primary button1" data-toggle="modal" data-target="#AddCategoryModal"> Add Tax</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <!-- <th>Image</th> -->
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($category as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <!-- <td>
                        <img src="{{ asset('assets/uploads/category/'.$item->image) }}" class="category-list-img" alt="Image Here">
                    </td> -->
                    <td>
                        <a href="{{ url('edit-category').$item->id }}" data-toggle="tooltip" title="Edit"><i class="far fa-edit"></i></a>
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
                <h5 class="modal-title" id="exampleModalLabel">Add Tax</h5>
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
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" name="name" required>
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="">Slug</label>
                                    <input type="text" class="form-control" name="slug">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="description" cols="30" rows="3" class="form-control mb-2" placeholder="Description"></textarea>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="status" class="checkboxLabel">Status&nbsp;&nbsp;<input type="checkbox" class="form-control" name="status"></label>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="popular" class="checkboxLabel">Popular&nbsp;&nbsp; <input type="checkbox" class="form-control" name="popular"></label>
                                    
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="meta_title">Meta Title</label>
                                    <input type="text" class="form-control" name="meta_title">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="">Meta Keywords</label>
                                    <input type="text" class="form-control" name="meta_keywords">
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="">Meta Description</label>
                                    <textarea name="meta_description" rows="3" class="form-control"></textarea>
                                </div>
                                <div class="col-md-8 mb-3">
                                    <input type="file" name="image" class="form-control">
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