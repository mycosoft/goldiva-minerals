@extends('adminlte::page')

@section('title', 'Contact Messages')

@section('content_header')
    <h1>Contact Messages</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form method="GET" class="d-flex">
                <input type="text" name="search" class="form-control" placeholder="Search by name..." value="{{ request('search') }}">
                <select name="is_read" class="form-control ml-2">
                    <option value="">All</option>
                    <option value="0" {{ request('is_read') == '0' ? 'selected' : '' }}>Unread</option>
                    <option value="1" {{ request('is_read') == '1' ? 'selected' : '' }}>Read</option>
                </select>
                <button type="submit" class="btn btn-secondary ml-2">Filter</button>
            </form>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($contacts as $contact)
                    <tr @if(!$contact->is_read) class="table-warning" @endif>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->subject ?? '-' }}</td>
                        <td>
                            @if($contact->is_read)
                                <span class="badge badge-success">Read</span>
                            @else
                                <span class="badge badge-warning">Unread</span>
                            @endif
                        </td>
                        <td>{{ $contact->created_at->format('Y-m-d') }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('admin.contacts.show', $contact) }}" class="btn btn-info btn-sm">View</a>
                                <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="7" class="text-center">No messages found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">{{ $contacts->links() }}</div>
    </div>
@stop
