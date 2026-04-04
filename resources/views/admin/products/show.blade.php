@extends('adminlte::page')

@section('title', 'Product Details')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Product Details</h1>
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Back</a>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @if($product->image)
                <div class="mb-4">
                    <img src="{{ asset('storage/' . $product->image) }}" width="200" height="150" style="object-fit:cover;">
                </div>
            @endif

            <table class="table table-striped">
                <tr>
                    <th width="200">ID</th>
                    <td>{{ $product->id }}</td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>{{ $product->title }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{!! nl2br(e($product->description)) !!}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        @if($product->status)
                            <span class="badge badge-success">Active</span>
                        @else
                            <span class="badge badge-secondary">Inactive</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Created</th>
                    <td>{{ $product->created_at->format('Y-m-d H:i:s') }}</td>
                </tr>
                <tr>
                    <th>Updated</th>
                    <td>{{ $product->updated_at->format('Y-m-d H:i:s') }}</td>
                </tr>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@stop
