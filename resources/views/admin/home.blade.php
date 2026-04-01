@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $stats['blogs'] }}</h3>
                    <p>Blogs</p>
                </div>
                <div class="icon"><i class="fas fa-blog"></i></div>
                <a href="{{ route('admin.blogs.index') }}" class="small-box-footer">Manage <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $stats['services'] }}</h3>
                    <p>Services</p>
                </div>
                <div class="icon"><i class="fas fa-cogs"></i></div>
                <a href="{{ route('admin.services.index') }}" class="small-box-footer">Manage <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $stats['galleries'] }}</h3>
                    <p>Gallery Images</p>
                </div>
                <div class="icon"><i class="fas fa-images"></i></div>
                <a href="{{ route('admin.galleries.index') }}" class="small-box-footer">Manage <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $stats['unread_contacts'] }}</h3>
                    <p>Unread Messages</p>
                </div>
                <div class="icon"><i class="fas fa-envelope"></i></div>
                <a href="{{ route('admin.contacts.index') }}" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Visitors - Last 7 Days</h3>
                </div>
                <div class="card-body" style="height: 300px;">
                    <canvas id="visitorsChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Content Distribution</h3>
                </div>
                <div class="card-body" style="height: 300px;">
                    <canvas id="contentChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Recent Contact Messages</h3>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recentContacts as $contact)
                            <tr>
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
                                    <a href="{{ route('admin.contacts.show', $contact) }}" class="btn btn-primary btn-sm">View</a>
                                </td>
                            </tr>
                            @empty
                            <tr><td colspan="6" class="text-center">No messages yet.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
    // Visitors Line Chart
    const visitorCtx = document.getElementById('visitorsChart').getContext('2d');
    new Chart(visitorCtx, {
        type: 'line',
        data: {
            labels: {!! json_encode($visitorLabels) !!},
            datasets: [{
                label: 'Visitors',
                data: {!! json_encode($visitorData) !!},
                borderColor: '#17a2b8',
                backgroundColor: 'rgba(23, 162, 184, 0.1)',
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { display: false } }
        }
    });

    // Content Pie Chart
    const contentCtx = document.getElementById('contentChart').getContext('2d');
    new Chart(contentCtx, {
        type: 'pie',
        data: {
            labels: {!! json_encode(array_keys($contentDistribution)) !!},
            datasets: [{
                data: {!! json_encode(array_values($contentDistribution)) !!},
                backgroundColor: ['#28a745', '#ffc107', '#dc3545']
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { position: 'bottom' } }
        }
    });
</script>
@stop
