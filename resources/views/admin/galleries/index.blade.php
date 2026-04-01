@extends('adminlte::page')

@section('title', 'Gallery')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Gallery</h1>
        <a href="{{ route('admin.galleries.create') }}" class="btn btn-primary">Add Image</a>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form method="GET" class="d-flex">
                <input type="text" name="search" class="form-control" placeholder="Search..." value="{{ request('search') }}">
                <select name="category" class="form-control ml-2">
                    <option value="">All Categories</option>
                </select>
                <button type="submit" class="btn btn-secondary ml-2">Filter</button>
            </form>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($galleries as $gallery)
                    <tr>
                        <td>{{ $gallery->id }}</td>
                        <td><img src="{{ asset('storage/' . $gallery->image) }}" width="80" height="60" style="object-fit:cover;"></td>
                        <td>{{ $gallery->title }}</td>
                        <td>{{ $gallery->category ?? '-' }}</td>
                        <td>
                            @if($gallery->status)
                                <span class="badge badge-success">Active</span>
                            @else
                                <span class="badge badge-secondary">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('admin.galleries.show', $gallery) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('admin.galleries.edit', $gallery) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.galleries.destroy', $gallery) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="6" class="text-center">No images found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">{{ $galleries->links() }}</div>
    </div>
@stop
