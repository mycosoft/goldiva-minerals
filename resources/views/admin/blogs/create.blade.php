@extends('adminlte::page')

@section('title', 'Create Blog')

@section('content_header')
    <h1>Create Blog</h1>
@stop

@section('content')
    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required>
                    @error('title') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="10" required>{{ old('content') }}</textarea>
                    @error('content') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                    @error('image') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="status" value="1" checked> Active
                    </label>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </form>
@stop
