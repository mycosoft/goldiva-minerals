@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Roles & Permissions</h1>
        <a href="{{ route('admin.roles.create') }}" class="btn btn-primary">Add Role</a>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Permissions</th>
                        <th>Users Count</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($roles as $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td><span class="badge badge-primary">{{ $role->name }}</span></td>
                        <td>
                            @foreach($role->permissions->take(5) as $perm)
                                <span class="badge badge-secondary">{{ $perm->name }}</span>
                            @endforeach
                            @if($role->permissions->count() > 5)
                                <span class="badge badge-info">+{{ $role->permissions->count() - 5 }} more</span>
                            @endif
                        </td>
                        <td>{{ $role->users->count() }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('admin.roles.show', $role) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('admin.roles.edit', $role) }}" class="btn btn-warning btn-sm">Edit</a>
                                @if($role->name !== 'admin')
                                <form action="{{ route('admin.roles.destroy', $role) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="5" class="text-center">No roles found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">{{ $roles->links() }}</div>
    </div>
@stop
