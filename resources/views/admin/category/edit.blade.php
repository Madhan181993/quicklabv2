@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>Edit/Update Category</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('update-category/' . $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4  mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug" value="{{ $category->slug }}">
                </div>
                <div class="col-md-8">
                    <textarea name="description" cols="30" rows="5" class="form-control mb-3" >{{ $category->description }}</textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="status">&nbsp;Status</label>
                    <input type="checkbox" class="form-control col-sm-1" name="status" {{ $category->status == "1" ? 'checked' : '' }}>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="popular">&nbsp;Popular</label>
                    <input type="checkbox" class="form-control col-sm-1" name="popular" {{ $category->popular == "1" ? 'checked' : '' }}>
                </div>
                <div class="col-md-8 mb-3">
                    <label for="meta_title">Meta Title</label>
                    <input type="text" class="form-control" name="meta_title" value="{{ $category->meta_title }}">
                </div>
                <div class="col-md-8 mb-3">
                    <label for="">Meta Keywords</label>
                    <input type="text" class="form-control" name="meta_keywords" value="{{ $category->meta_keywords }}">
                </div>
                <div class="col-md-8 mb-3">
                    <label for="">Meta Description</label>
                    <textarea name="meta_description" rows="3" class="form-control">{{ $category->meta_description }}</textarea>
                </div>
                @if($category->image)
                <img src="{{ asset('assets/uploads/category/'.$category->image) }}" class="category-list-image" alt="Image">
                @endif

                <div class="col-md-8 mb-3">
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection