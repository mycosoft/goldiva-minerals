@extends('adminlte::page')

@section('title', 'Edit Role')

@section('content_header')
    <h1>Edit Role</h1>
@stop

@section('content')
    <form action="{{ route('admin.roles.update', $role) }}" method="POST">
        @csrf @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label>Role Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $role->name) }}" required>
                </div>
                <div class="form-group">
                    <label>Permissions</label>
                    <div class="row">
                        @foreach($permissions as $permission)
                        <div class="col-md-4">
                            <label><input type="checkbox" name="permissions[]" value="{{ $permission->name }}" {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }}> {{ $permission->name }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('admin.roles.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </form>
@stop
