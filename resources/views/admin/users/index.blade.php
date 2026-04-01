@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Users</h1>
        <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Add User</a>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form method="GET">
                <input type="text" name="search" class="form-control" placeholder="Search users..." value="{{ request('search') }}">
            </form>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @foreach($user->roles as $role)
                                <span class="badge badge-info">{{ $role->name }}</span>
                            @endforeach
                        </td>
                        <td>{{ $user->created_at->format('Y-m-d') }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('admin.users.show', $user) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-warning btn-sm">Edit</a>
                                @if($user->id !== auth()->id())
                                <form action="{{ route('admin.users.destroy', $user) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="6" class="text-center">No users found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">{{ $users->links() }}</div>
    </div>
@stop
