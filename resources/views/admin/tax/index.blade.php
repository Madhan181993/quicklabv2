@extends('layouts.admin')

@section('content')

<style>
    label {
        font-size: 14px;
        font-weight: 500;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        height: 30px;
    }
</style>
<h4>Tax Management</h4>
<div class="card">

    <div class="card-body">
        <a href="#" class="btn btn-primary button1" data-toggle="modal" data-target="#AddTaxModal"> Add Tax</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Percentage</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($taxes as $tax)
                <tr>
                    <td>{{ $tax->id }}</td>
                    <td>{{ $tax->taxname }}</td>
                    <td>{{ $tax->taxpercentage }}</td>
                    @if ($tax->taxstatus == 1)
                    <td>Active</td>
                    @else
                    <td>InActive</td>
                    @endif
                    <td>
                        <button href="#" class="editbtn" value="{{ $tax->id  }}"><i class="far fa-edit "></i></button>
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


<!-- Start Add Tax Modal -->
<div class="modal fade" id="AddTaxModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
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
                        <form action="{{ Route('admin.insert-tax') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6  mb-2">
                                    <label for="">Tax Code</label>
                                    <input type="text" class="form-control" name="taxcode" required>
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-6  mb-2">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" name="taxname" required>
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="">Tax Value</label>
                                    <input type="text" class="form-control" name="taxvalue">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="">Tax Percentage</label>
                                    <input type="text" class="form-control" name="taxpercentage">
                                </div>

                                <div class="col-md-12 mb-2">
                                    <label for="">Tax Description</label>
                                    <textarea name="taxdescription" rows="3" class="form-control"></textarea>
                                </div>.
                                <div class="col-md-4 mb-2">
                                    <label for="status" class="checkboxLabel">Status&nbsp;&nbsp;
                                        <input type="checkbox" class="form-control" name="taxstatus" checked></label>
                                </div>

                                <div class="col-md-12 ">

                                    <button class="btn btn-secondary " data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary add-btn popup-btn">Add</button>
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
<!-- End Add Tax Modal -->


<!-- Start Edit Tax Modal -->
<div class="modal fade" id="editTaxModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
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
                        <form enctype="multipart/form-data">
                            @csrf
                            <input type="text" id="editTaxId">
                            <div class="row">
                                <div class="col-md-6  mb-2">
                                    <label for="">Tax Code</label>
                                    <input type="text" class="form-control" name="edittaxcode" id="edittaxcode" required>
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-6  mb-2">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" name="edittaxname" id="edittaxname" required>
                                    <div class="alert alert-danger" style="display:none"></div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="">Tax Value</label>
                                    <input type="text" class="form-control" name="edittaxvalue" id="edittaxvalue">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="">Tax Percentage</label>
                                    <input type="text" class="form-control" name="edittaxpercentage" id="edittaxpercentage">
                                </div>

                                <div class="col-md-12 mb-2">
                                    <label for="">Tax Description</label>
                                    <textarea name="edittaxdescription" id="edittaxdescription" rows="3" class="form-control"></textarea>
                                </div>.
                                <div class="col-md-4 mb-2">
                                    <label for="edittaxstatus" class="checkboxLabel">Status&nbsp;&nbsp;
                                        <input type="checkbox" class="form-control" name="edittaxstatus" id="edittaxstatus" checked></label>
                                </div>

                                <div class="col-md-12 ">

                                    <button class="btn btn-secondary " data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary popup-btn update_tax">Add</button>
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
<!-- End Edit Tax Modal -->


<script>
    $(document).ready(function() {

        $(document).on('click', '.editbtn', function(e) {
            e.preventDefault();

            var id = $(this).val();
            console.log('this tax id : ' + id);
            $('#editTaxModal').modal('show');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "edit-tax/" + id,
                success: function(response) {
                    console.log(response);
                    if (response.status == 404) {
                        // console.log('error no. 404 edit');

                    } else {
                        $('#edittaxcode').val(response.tax.taxcode);
                        $('#edittaxname').val(response.tax.taxname);
                        $('#edittaxvalue').val(response.tax.taxvalue);
                        $('#edittaxpercentage').val(response.tax.taxpercentage);
                        $('#edittaxdescription').val(response.tax.taxdescription);
                        //Set Checkbox status
                        if (response.tax.taxstatus == 1) {
                            $("#edittaxstatus").prop("checked", true);
                        }


                        //send the id
                        $('#editTaxId').val(response.tax.id);

                    }


                }
            });
        })

    })

// Update Tax from Pop-Update


    $(document).on('click', '.update_tax', function(e) {
        e.preventDefault();

        var id = $('#editTaxId').val();
        console.log('id : ' + id);
        var data = {
            'id' : $('#editTaxId').val(),
            'taxname': $('#edittaxname').val(),
            'taxcode': $('#exittaxcode').val(),
            'taxvalue': $('#edittxtvalue').val(),
            'taxpercentage': $('#edittaxpercentage').val(),
            'taxdescription': $('#edittaxdescription').val(),
            'taxstatus': $('#edittaxstatus').val(),
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: "update-tax",
            data: data,
            dataType: "json",
            success: function(response) {
                // console.log(response);

                if (response.status == 400) {
                    console.log('error no. 400 - Update');

                } else if (response.status == 404) {
                    console.log(response);
                    console.log('error no. 404 udpate');


                } else {

                    console.log('error no. 200 udpate');

                    console.log(response.newvalue);
                    console.log(response.Taxvalue);
                    $('#editTaxModal').modal('hide');
                }
            }
        });



    });
</script>




@endsection