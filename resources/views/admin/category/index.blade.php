@extends('layouts.admin')

@section('content')

<!-- TODO : Show Parent Field and fetch based on Parent Id from Category Table -->
<!-- TODO : Categories Add, Edit Functionality to be completed. -->

<style>
    label {
        font-size: 14px;
        font-weight: 500;
        display: flex;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        height: 30px;
    }
</style>

<h4>Category Page</h4>
<div class="card">
    <div class="card-body">
        <a href="{{ url('admin/add-category') }}" class="btn btn-primary button1" data-toggle="modal" data-target="#AddCategoryModal"> Add Category</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Parent</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($category as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        @if($item->category_id)
                        {{ $item->parent->name }}
                        @else
                        No Parent
                        @endif
                    </td>
                    <td>{{ ($item->status == 1  ? "Active" : "Inactive" ) }}</td>

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
    <div class="modal-dialog modal-md">
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
                        <form action="{{ url('admin/insert-category') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- <div class="row"> -->
                            <div class="col-md-10  mb-2">
                                <label for="">Category Name</label>
                                <input type="text" class="form-control" name="name" required>
                                <div class="alert alert-danger" style="display:none"></div>
                            </div>
                            <div class="col-md-10 mb-2">
                                <label for="parentcategory">Parent Category</label>
                                <select name="category_id" width="150px;" id="">

                                    <option value="">No Parent Category</option>
                                    @foreach($parent as $parentid)
                                    <option value="{{ $parentid->id }}">{{ $parentid->name }}</option>
                                    @endforeach
                                </select>


                            </div>

                            <div class="col-md-4 mb-2">
                                <label for="status" class="checkboxLabel">Status&nbsp;&nbsp;
                                    <input type="checkbox" class="form-control" name="status" checked></label>
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
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('admin/insert-category') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- <div class="row"> -->
                            <div class="col-md-10  mb-2">
                                <label for="">Category Name</label>
                                <input type="text" class="form-control" name="name" required>
                                <div class="alert alert-danger" style="display:none"></div>
                            </div>
                            <div class="col-md-10 mb-2">
                                <label for="parentcategory">Parent Category</label>
                                <select name="category_id" width="150px;" id="">

                                    <option value="">No Parent Category</option>
                                    @foreach($parent as $parentid)
                                    <option value="{{ $parentid->id }}">{{ $parentid->name }}</option>
                                    @endforeach
                                </select>


                            </div>

                            <div class="col-md-4 mb-2">
                                <label for="status" class="checkboxLabel">Status&nbsp;&nbsp;
                                    <input type="checkbox" class="form-control" name="status" checked></label>
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

<!-- End Modal for Edit Category -->

@endsection

@section('scripts')
<script>
    $(document).ready(function() {

                $(document).on('click', '.editbtn', function() {

                            var category_id = $(this).val();
                            // alert(category_id);

                            $('#EditCategoryrModal').modal('show');

                            $.ajax({
                                type: "POST",
                                url: "{{ url('admin/edit-category')}}",
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "category_id": category_id
                                },
                                success: function(response) {
                                    // console.log(response.user.name);
                                    $('#name').val(response.category.name);


                                    // Setting the Checkboxes
                                    if (response.category.status == 1) {
                                        $('input[name=status]').attr('checked', true);
                                    } else {
                                        $('input[name=status]').attr('checked', false);
                                    }

                                    $("#category_id").val(user_id);

                                }





                                // old category edit
                                // $(document).on('click', '.editbtn', function() {

                                //     var category_id = $(this).val();
                                //     // alert(category_id);

                                //     $('#EditCategoryModal').modal('show');

                                //     $.ajax({
                                //         type: "GET",
                                //         url: "/edit-category/" + category_id,
                                //         success: function(response) {
                                //             // console.log(response.category.name);
                                //             $('#name').val(response.category.name);
                                //             $("#category_id").val(category_id);

                                //         }
                                    });
                                });
                            });
</script>


@endsection