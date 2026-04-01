@extends('adminlte::page')

@section('title', 'Contact Message')

@section('content_header')
    <h1>Contact Message</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3>From: {{ $contact->name }}</h3>
            @if(!$contact->is_read)
                <form action="{{ route('admin.contacts.markAsRead', $contact) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success">Mark as Read</button>
                </form>
            @endif
        </div>
        <div class="card-body">
            <p><strong>Email:</strong> <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></p>
            <p><strong>Phone:</strong> {{ $contact->phone ?? '-' }}</p>
            <p><strong>Subject:</strong> {{ $contact->subject ?? '-' }}</p>
            <p><strong>Date:</strong> {{ $contact->created_at->format('Y-m-d H:i') }}</p>
            <hr>
            <div class="bg-light p-3 rounded">
                {{ $contact->message }}
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">Back</a>
            <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this message?')">
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@stop
