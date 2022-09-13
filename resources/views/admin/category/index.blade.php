@extends('layouts.admin')

@section('content')

<!-- TODO : Show Parent Field and fetch based on Parent Id from Category Table -->
<!-- TODO : Categories Add, Edit Functionality to be completed. -->

<style>
    label {
        font-size: 14px;
        font-weight: 500;
    }
    input[type="text"],input[type="email"],input[type="password"]{
        height:30px;
    }
</style>

@if (session('status'))
<div class="alert alert-success">{{ session('status') }}</div>
@endif

<h4>Category Page</h4>
<div class="card">
    <div class="card-body">
        <a href="{{ url('add-category') }}" class="btn btn-primary button1" data-toggle="modal" data-target="#AddCategoryModal"> Add Category</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Parent</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($category as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->categoriesparentid }}</td>
                    <td>{{ $item->categoriesname }}</td>
                    <td>{{ $item->categoriesdescription }}</td>
                    <td>{{ $item->status }}</td>

                    <td>
                        <button href="#" value="{{ $item->id }}" class="editbtn"><i class="far fa-edit"></i></button>
                        <button href="#" data-toggle="tooltip" title="Delete" class="deletebtn"><i class="far fa-trash-alt"></i></button>
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

<!-- Modal for Add Category -->
<div class="modal fade" id="AddCategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add category</h5>
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
                                    <label for="">Category Name</label>
                                    <input type="text" class="form-control" name="name" required>
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="">Category Code</label>
                                    <input type="text" class="form-control" name="slug">
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="">Category Description</label>
                                    <textarea name="meta_description" rows="3" class="form-control"></textarea>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="status" class="checkboxLabel">Status&nbsp;&nbsp;<input type="checkbox" class="form-control" name="status"></label>
                                </div>
                                <div class="col-md-12 ">

                                    <button type="submit" class="btn btn-primary popup-btn">Submit</button>
                                    <button class="btn btn-secondary popup-btn" data-dismiss="modal">Close</button>
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
<!-- End Modal for Add Category -->


<!-- Start Modal for Edit Category -->

<div class="modal fade" id="EditCategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit & Update Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('update-category') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="category_id" id="category_id" />
                            <div class="row">
                                <div class="col-md-6  mb-2">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="">Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="description" id="description" cols="30" rows="3" class="form-control mb-2" placeholder="Description"></textarea>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="status" class="checkboxLabel">Status&nbsp;&nbsp;<input type="checkbox" class="form-control" name="status" id="status"></label>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="popular" class="checkboxLabel">Popular&nbsp;&nbsp; <input type="checkbox" class="form-control" name="popular" id="popular"></label>

                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="meta_title">Meta Title</label>
                                    <input type="text" class="form-control" name="meta_title" id="meta_title">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="">Meta Keywords</label>
                                    <input type="text" class="form-control" name="meta_keywords" id="meta_keywords">
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="">Meta Description</label>
                                    <textarea name="meta_description" id="meta_description" rows="3" class="form-control"></textarea>
                                </div>
                                <div class="col-md-8 mb-3">
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>
                                <div class="col-md-8 mb-3">
                                    <img src="" name="image1" id="image1">
                                </div>

                                <div class="col-md-12 ">

                                    <button type="submit" class="btn btn-primary popup-btn">Update</button>
                                    <button class="btn btn-secondary popup-btn" data-dismiss="modal">Close</button>
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

<!-- End Modal for Edit Category -->

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $(document).on('click', '.editbtn', function() {

            var category_id = $(this).val();
            // alert(category_id);

            $('#EditCategoryModal').modal('show');

            $.ajax({
                type: "GET",
                url: "/edit-category/" + category_id,
                success: function(response) {
                    // console.log(response.category.name);
                    $('#name').val(response.category.name);
                    $('#slug').val(response.category.slug);
                    $('#description').val(response.category.description);

                    // Setting the Checkboxes
                    if (response.category.status){
                        $('input[name=status]').attr('checked', true);
                    } else{
                        $('input[name=status]').attr('checked', false);
                    }
                    if (response.category.popular){
                        $('input[name=popular]').attr('checked', true);
                    } else{
                        $('input[name=popular]').attr('checked', false);
                    }
                    
                    $('#meta_title').val(response.category.meta_title);
                    $('#meta_keywords').val(response.category.meta_keywords);
                    $('#meta_description').val(response.category.meta_description);
                    // Showing image
                    $("#image1").attr('src', 'assets/uploads/category/'+response.category.image);
                    $("#image1").attr('width','200px');
                    $("#category_id").val(category_id);

                }
            });
        });
    });
</script>


@endsection