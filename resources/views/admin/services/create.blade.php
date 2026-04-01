@extends('adminlte::page')

@section('title', 'Create Service')

@section('content_header')
    <h1>Create Service</h1>
@stop

@section('content')
    <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required>
                    @error('title') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="5" required>{{ old('description') }}</textarea>
                    @error('description') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label>Icon (FontAwesome class)</label>
                    <input type="text" name="icon" class="form-control" value="{{ old('icon') }}" placeholder="e.g., fas fa-gem">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                    @error('image') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label><input type="checkbox" name="status" value="1" checked> Active</label>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </form>
@stop
