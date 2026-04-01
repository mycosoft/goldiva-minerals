@extends('adminlte::page')

@section('title', 'Role Details')

@section('content_header')
    <h1>Role Details</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $role->id }}</p>
            <p><strong>Name:</strong> <span class="badge badge-primary">{{ $role->name }}</span></p>
            <p><strong>Permissions:</strong></p>
            <div class="ml-3">
                @forelse($role->permissions as $perm)
                    <span class="badge badge-secondary">{{ $perm->name }}</span>
                @empty
                    <span class="text-muted">No permissions assigned</span>
                @endforelse
            </div>
            <p class="mt-3"><strong>Users with this role:</strong> {{ $role->users->count() }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.roles.edit', $role) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('admin.roles.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
@stop
