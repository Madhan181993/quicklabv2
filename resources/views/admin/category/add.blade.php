@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>Add category</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('insert-category') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4  mb-3">
                    <label for="">Category</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="">Parent Category</label>
                    <input type="text" class="form-control" name="category_id">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="status">&nbsp;Status</label>
                    <input type="checkbox" class="form-control col-sm-1" name="status">
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection