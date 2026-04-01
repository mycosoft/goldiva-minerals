@extends('adminlte::page')

@section('title', 'Edit Gallery')

@section('content_header')
    <h1>Edit Gallery</h1>
@stop

@section('content')
    <form action="{{ route('admin.galleries.update', $gallery) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $gallery->title }}" required>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <div class="mb-2"><img src="{{ asset('storage/' . $gallery->image) }}" width="150"></div>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <input type="text" name="category" class="form-control" value="{{ $gallery->category }}">
                </div>
                <div class="form-group">
                    <label><input type="checkbox" name="status" value="1" {{ $gallery->status ? 'checked' : '' }}> Active</label>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('admin.galleries.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </form>
@stop
