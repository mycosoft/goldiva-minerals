@extends('adminlte::page')

@section('title', 'Add Gallery Image')

@section('content_header')
    <h1>Add Gallery Image</h1>
@stop

@section('content')
    <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <input type="text" name="category" class="form-control" placeholder="e.g., Mining, Equipment">
                </div>
                <div class="form-group">
                    <label><input type="checkbox" name="status" value="1" checked> Active</label>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{ route('admin.galleries.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </form>
@stop
