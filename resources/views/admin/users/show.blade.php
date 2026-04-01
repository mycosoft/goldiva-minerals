@extends('adminlte::page')

@section('title', 'User Details')

@section('content_header')
    <h1>User Details</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $user->id }}</p>
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Roles:</strong>
                @forelse($user->roles as $role)
                    <span class="badge badge-info">{{ $role->name }}</span>
                @empty
                    <span class="text-muted">No roles</span>
                @endforelse
            </p>
            <p><strong>Created:</strong> {{ $user->created_at->format('Y-m-d H:i') }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
@stop
