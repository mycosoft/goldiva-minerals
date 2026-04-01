@extends('adminlte::page')

@section('title', 'Gallery Image')

@section('content_header')
    <h1>Gallery Image</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <img src="{{ asset('storage/' . $gallery->image) }}" class="img-fluid mb-3" style="max-height: 400px;">
            <h3>{{ $gallery->title }}</h3>
            <p class="text-muted">
                Category: {{ $gallery->category ?? '-' }} |
                Status: {{ $gallery->status ? 'Active' : 'Inactive' }} |
                Created: {{ $gallery->created_at->format('Y-m-d') }}
            </p>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.galleries.edit', $gallery) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('admin.galleries.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
@stop
