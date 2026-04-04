@extends('adminlte::page')

@section('title', 'Blog Details')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Blog Details</h1>
        <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Back</a>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @if($blog->image)
                <div class="mb-4">
                    <img src="{{ asset('storage/' . $blog->image) }}" width="300" height="200" style="object-fit:cover;">
                </div>
            @endif

            <table class="table table-striped">
                <tr>
                    <th width="200">ID</th>
                    <td>{{ $blog->id }}</td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>{{ $blog->title }}</td>
                </tr>
                <tr>
                    <th>Slug</th>
                    <td>{{ $blog->slug }}</td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>
                        @if($blog->category)
                            <span class="badge badge-info">{{ $blog->category->name }}</span>
                        @else
                            <span class="text-muted">Uncategorized</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Author</th>
                    <td>{{ $blog->user->name ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        @if($blog->status)
                            <span class="badge badge-success">Active</span>
                        @else
                            <span class="badge badge-secondary">Inactive</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Published</th>
                    <td>
                        @if($blog->published_at)
                            {{ $blog->published_at->format('Y-m-d H:i:s') }}
                        @else
                            <span class="text-muted">Draft</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Content</th>
                    <td>{!! nl2br(e($blog->content)) !!}</td>
                </tr>
                <tr>
                    <th>Created</th>
                    <td>{{ $blog->created_at->format('Y-m-d H:i:s') }}</td>
                </tr>
                <tr>
                    <th>Updated</th>
                    <td>{{ $blog->updated_at->format('Y-m-d H:i:s') }}</td>
                </tr>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@stop
