@extends('adminlte::page')

@section('title', 'Blogs')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Blogs</h1>
        <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">Add New Blog</a>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form method="GET" class="d-flex flex-wrap gap-2">
                <input type="text" name="search" class="form-control" placeholder="Search blogs..." value="{{ request('search') }}">
                <select name="category" class="form-control">
                    <option value="">All Categories</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-secondary">Filter</button>
            </form>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Status</th>
                        <th>Published</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id }}</td>
                        <td>
                            @if($blog->image)
                                <img src="{{ asset('storage/' . $blog->image) }}" width="60" height="40" style="object-fit:cover;">
                            @else
                                <span class="text-muted">No Image</span>
                            @endif
                        </td>
                        <td>{{ $blog->title }}</td>
                        <td>
                            @if($blog->category)
                                <span class="badge badge-info">{{ $blog->category->name }}</span>
                            @else
                                <span class="text-muted">Uncategorized</span>
                            @endif
                        </td>
                        <td>{{ $blog->user->name ?? 'N/A' }}</td>
                        <td>
                            @if($blog->status)
                                <span class="badge badge-success">Active</span>
                            @else
                                <span class="badge badge-secondary">Inactive</span>
                            @endif
                        </td>
                        <td>
                            @if($blog->published_at)
                                {{ $blog->published_at->format('Y-m-d') }}
                            @else
                                <span class="text-muted">Draft</span>
                            @endif
                        </td>
                        <td>{{ $blog->created_at->format('Y-m-d') }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('admin.blogs.show', $blog) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="9" class="text-center">No blogs found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $blogs->links() }}
        </div>
    </div>
@stop
