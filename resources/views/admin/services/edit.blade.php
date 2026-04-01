@extends('adminlte::page')

@section('title', 'Edit Service')

@section('content_header')
    <h1>Edit Service</h1>
@stop

@section('content')
    <form action="{{ route('admin.services.update', $service) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $service->title) }}" required>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="5" required>{{ old('description', $service->description) }}</textarea>
                </div>
                <div class="form-group">
                    <label>Icon</label>
                    <input type="text" name="icon" class="form-control" value="{{ old('icon', $service->icon) }}">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    @if($service->image)
                        <div class="mb-2"><img src="{{ asset('storage/' . $service->image) }}" width="150"></div>
                    @endif
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label><input type="checkbox" name="status" value="1" {{ $service->status ? 'checked' : '' }}> Active</label>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </form>
@stop
