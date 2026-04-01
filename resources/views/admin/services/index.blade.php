@extends('adminlte::page')

@section('title', 'Services')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Services</h1>
        <a href="{{ route('admin.services.create') }}" class="btn btn-primary">Add New Service</a>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form method="GET" class="d-flex">
                <input type="text" name="search" class="form-control" placeholder="Search services..." value="{{ request('search') }}">
                <button type="submit" class="btn btn-secondary ml-2">Search</button>
            </form>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Icon</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($services as $service)
                    <tr>
                        <td>{{ $service->id }}</td>
                        <td>
                            @if($service->image)
                                <img src="{{ asset('storage/' . $service->image) }}" width="60" height="40" style="object-fit:cover;">
                            @else
                                <span class="text-muted">No Image</span>
                            @endif
                        </td>
                        <td>{{ $service->title }}</td>
                        <td><i class="{{ $service->icon ?? 'fas fa-cog' }}"></i></td>
                        <td>
                            @if($service->status)
                                <span class="badge badge-success">Active</span>
                            @else
                                <span class="badge badge-secondary">Inactive</span>
                            @endif
                        </td>
                        <td>{{ $service->created_at->format('Y-m-d') }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('admin.services.show', $service) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.services.destroy', $service) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="7" class="text-center">No services found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">{{ $services->links() }}</div>
    </div>
@stop
