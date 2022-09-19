@extends('layouts.admin')

@section('content')

<!-- TODO : Show Parent Field and fetch based on Parent Id from Category Table -->
<!-- TODO : Categories Add, Edit Functionality to be completed. -->
<meta name="csrf-token" content="{{ csrf_token() }}">
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
@if($parent)
This is ok.
@else
This NOT OK.
@endif

                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        @if($category->parent_id)
                        {{ $category->parent->name }}
                        @else
                        No Parent
                        @endif
                    </td>
                    <td>{{ ($category->status == 1  ? "Active" : "Inactive" ) }}</td>

                    <td>
                        <button href="" value="{{ $category->id }}" class="editbtn"><i class="far fa-edit"></i></button>
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
                                <select name="parent_id" width="150px;">

                                    <option value="">No Parent Category</option>
                                    @foreach($parent as $parentid)
                                    <option value="{{ $parentid->id }}">{{ $parentid->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label for="status" class="checkboxLabel">Status&nbsp;&nbsp;
                                    <input type="checkbox" class="form-control" name="categorystatus" checked></label>
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

    </div>
</div>
<!-- End Modal for Add Category -->


<!-- Start Modal for Edit Category -->

<div class="modal fade" id="editCategoryrModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <div id="success_message"></div>
                <h5 class="modal-title" id="exampleModalLabel">Edit category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <ul id="updateform_errlist"></ul>

                <div class="card">
                    <div class="card-body">
                        <form id="editFormId" enctype="multipart/form-data">
                            <input type="text" id="editCategoryId">
                            <div id="message_area"></div>
                            <!-- <div class="row"> -->
                            <div class="col-md-10  mb-2">
                                <label for="">Category Name</label>
                                <input type="text" class="form-control" name="name" id="name" required>
                                <div class="alert alert-danger" style="display:none"></div>
                            </div>
                            <div class="col-md-10 mb-2">
                                <label for="category_id">Parent Category</label>
                                <select name="category_id" id="category_id" width="150px;">

                                    <option value="">No Parent Category</option>
                                    @foreach($parent as $parentid)
                                    <option value="{{ $parentid->id }}">{{ $parentid->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-4 mb-2">
                                <label for="status" class="checkboxLabel">Status&nbsp;&nbsp;
                                    <input type="checkbox" class="form-control" name="categorystatus" id="categorystatus"></label>
                            </div>
                            <div class="col-md-12 ">

                                <button type="button" class="btn btn-primary popup-btn update_category">Submit</button>
                                <button type="button" class="btn btn-secondary popup-btn" data-dismiss="modal">Close</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- End Modal for Edit Category -->



@endsection

@section('scripts')
<script>
    $(document).ready(function() {


        $(document).on('click', '.editbtn', function(e) {
            e.preventDefault();

            var id = $(this).val();
            console.log('this id : ' + id);
            $('#editCategoryrModal').modal('show');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "GET",
                url: "edit-category/" + id,
                success: function(response) {
                    console.log(response);
                    if (response.status == 404) {
                        console.log('error no. 404 edit');

                    } else {
                        $('#name').val(response.category.name);
                        //Set Checkbox status
                        if (response.category.status == 1) {
                            $("#categorystatus").prop("checked", true);
                        }
                        $("#category_id").val(response.category.id);

                        //send the id
                        $('#editCategoryId').val(response.category.id);

                    }


                }
            });
        })

    })

    $(document).on('click', '.update_category', function(e) {
        e.preventDefault();

        var id = $('#editCategoryId').val();
        console.log('id : ' + id);
        var data = {
            // 'id' : id,
            'name': $('#name').val(),
            'category_id': $('#category_id').val(),
            'categorystatus': $('#categorystatus').val(),
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: "update-category",
            data: data,
            dataType: "json",
            success: function(response) {
                // console.log(response);

                if (response.status == 400) {
                    console.log('error no. 400 - Update');

                } else if (response.status = 404) {
                    console.log(response);
                    console.log('error no. 404 udpate');


                } else {


                    $('#editCategoryrModal').modal('hide');
                }
            }
        });



    });
</script>


@endsection