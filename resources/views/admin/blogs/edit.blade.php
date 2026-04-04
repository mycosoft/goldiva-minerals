@extends('adminlte::page')

@section('title', 'Edit Blog')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Edit Blog</h1>
        <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Back</a>
    </div>
@stop

@section('content')
    <form action="{{ route('admin.blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Title *</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $blog->title) }}" required>
                            @error('title') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                <option value="">-- Select Category --</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id', $blog->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug', $blog->slug) }}">
                    @error('slug') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label>Content *</label>
                    <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="10" required>{{ old('content', $blog->content) }}</textarea>
                    @error('content') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Image</label>
                            @if($blog->image)
                                <div class="mb-2"><img src="{{ asset('storage/' . $blog->image) }}" width="150" style="object-fit:cover;"></div>
                            @endif
                            <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror" accept="image/*">
                            @error('image') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Published Date</label>
                            <input type="datetime-local" name="published_at" class="form-control @error('published_at') is-invalid @enderror" value="{{ old('published_at', $blog->published_at ? date('Y-m-d\TH:i', strtotime($blog->published_at)) : '') }}">
                            @error('published_at') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>
                        <input type="checkbox" name="status" value="1" {{ old('status', $blog->status) ? 'checked' : '' }}> Active
                    </label>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Update Blog</button>
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </form>
@stop
