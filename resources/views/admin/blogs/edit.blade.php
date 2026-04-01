@extends('adminlte::page')

@section('title', 'Edit Blog')

@section('content_header')
    <h1>Edit Blog</h1>
@stop

@section('content')
    <form action="{{ route('admin.blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $blog->title) }}" required>
                    @error('title') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="10" required>{{ old('content', $blog->content) }}</textarea>
                    @error('content') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label>Image</label>
                    @if($blog->image)
                        <div class="mb-2"><img src="{{ asset('storage/' . $blog->image) }}" width="150"></div>
                    @endif
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                    @error('image') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="status" value="1" {{ $blog->status ? 'checked' : '' }}> Active
                    </label>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </form>
@stop
