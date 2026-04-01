@extends('adminlte::page')

@section('title', 'Service Details')

@section('content_header')
    <h1>Service Details</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @if($service->image)
                <img src="{{ asset('storage/' . $service->image) }}" class="img-fluid mb-3" style="max-height: 250px;">
            @endif
            <h3><i class="{{ $service->icon ?? 'fas fa-cog' }}"></i> {{ $service->title }}</h3>
            <p class="text-muted">Status: {{ $service->status ? 'Active' : 'Inactive' }} | Created: {{ $service->created_at->format('Y-m-d H:i') }}</p>
            <hr>
            <p>{{ $service->description }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
@stop
