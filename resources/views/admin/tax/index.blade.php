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
                @foreach($tax as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->taxname }}</td>
                    <td>{{ $item->taxpercentage }}</td>
                    @if ($item->taxstatus == 1)
                    <td>Active</td>
                    @else
                    <td>InActive</td>
                    @endif
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
                                    <label for="status" class="checkboxLabel" >Status&nbsp;&nbsp;
                                        <input type="checkbox" class="form-control" name="taxstatus" checked></label>
                                </div>

                                <div class="col-md-12 ">
                                    
                                    <button class="btn btn-secondary "  data-dismiss="modal">Close</button>
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

@endsection