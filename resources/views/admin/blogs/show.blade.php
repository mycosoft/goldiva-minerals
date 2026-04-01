@extends('adminlte::page')

@section('title', 'Blog Details')

@section('content_header')
    <h1>Blog Details</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @if($blog->image)
                <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid mb-3" style="max-height: 300px;">
            @endif
            <h3>{{ $blog->title }}</h3>
            <p class="text-muted">
                <span>Slug: {{ $blog->slug }}</span> |
                <span>Status: {{ $blog->status ? 'Active' : 'Inactive' }}</span> |
                <span>Author: {{ $blog->user->name ?? 'N/A' }}</span> |
                <span>Created: {{ $blog->created_at->format('Y-m-d H:i') }}</span>
            </p>
            <hr>
            <div>{!! $blog->content !!}</div>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
@stop
