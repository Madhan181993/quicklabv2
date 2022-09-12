@extends('layouts.admin')

@section('content')

<style>
table.settings {
  border: 1px solid #C4C4C5;
  /* text-align: center; */
  justify-content:center;
  margin:auto;
}
table.settings td, table.settings th {
  border: 1px solid #AAAAAA;
}
table.settings thead {
  background: #DDDDDD;
}
table.settings thead th {
  font-weight: normal;
}
#slno{
    width:20px;
    text-align: center;
}

</style>

<h4>Settings Management</h4>

<table class="settings">
    <thead>
        <tr>
            <th id="slno">#</th>
            <th>Feature</th>
            <th>Value</th>
            <th>Unit</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td id="slno">1</td>
            <td>Quotation Validity</td>
            <td>20</td>
            <td>days</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Number of Shipping Addresses Allowed</td>
            <td>3</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Number of Images allowed for each Product</td>
            <td>5</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Wallet Points Validity</td>
            <td>6</td>
            <td>months</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Maximum Wallet points conversion per Invoice (%)</td>
            <td>20</td>
            <td>%</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Maximum Wallet points conversion per Invoice (Value)</td>
            <td>500</td>
            <td>INR</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Maximum Wallet points that can be collected per Invoice</td>
            <td>1200</td>
            <td>points</td>
        </tr>

    </tbody>
</table>



<!-- <div class="card">
    <div class="card-body">
        <form action="{{ url('insert-settings') }}" method="POST" enctype="multipart/form-data">
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
                    <button class="btn btn-secondary popup-btn" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div> -->
<!-- <a href="{{ url('add-category') }}" class="btn btn-primary button1" data-toggle="modal" data-target="#AddCategoryModal"> Add Tax</a> -->
<!-- <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th> -->
<!-- <th>Image</th> -->
<!-- <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>

                    <td>
                        <a href="#" data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></a> -->
<!-- <button data-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></button> -->
<!-- <a href=""></a>
                    </td>
                </tr>
            </tbody>
        </table> -->


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
                        <form action="{{ url('insert-settings') }}" method="POST" enctype="multipart/form-data">
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

@endsection