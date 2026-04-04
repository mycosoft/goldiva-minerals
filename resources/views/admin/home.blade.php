@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    {{-- Stats Cards --}}
    <div class="row">
        <div class="col-lg-4 col-6">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-blog"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Blogs</span>
                    <h3 class="info-box-number mb-0">{{ $stats['blogs'] ?? 0 }}</h3>
                    <div class="description-box-footer">
                        <a href="#"><small>View Details</small> <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-6">
            <div class="info-box">
                <span class="info-box-icon bg-success"><i class="fas fa-cogs"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Services</span>
                    <h3 class="info-box-number mb-0">{{ $stats['services'] ?? 0 }}</h3>
                    <div class="description-box-footer">
                        <a href="#"><small>View Details</small> <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-6">
            <div class="info-box">
                <span class="info-box-icon bg-warning"><i class="fas fa-box-open"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Products</span>
                    <h3 class="info-box-number mb-0">{{ $stats['products'] ?? 0 }}</h3>
                    <div class="description-box-footer">
                        <a href="#"><small>View Details</small> <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-6">
            <div class="info-box">
                <span class="info-box-icon bg-purple"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Users</span>
                    <h3 class="info-box-number mb-0">{{ $stats['users'] ?? 0 }}</h3>
                    <div class="description-box-footer">
                        <a href="#"><small>View Details</small> <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-6">
            <div class="info-box">
                <span class="info-box-icon bg-teal"><i class="fas fa-eye"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Visits</span>
                    <h3 class="info-box-number mb-0">{{ $stats['total_visits'] ?? 0 }}</h3>
                    <div class="description-box-footer">
                        <a href="#"><small>View Details</small> <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-6">
            <div class="info-box">
                <span class="info-box-icon bg-danger"><i class="fas fa-envelope"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Messages</span>
                    <h3 class="info-box-number mb-0">{{ $stats['unread_contacts'] ?? 0 }}</h3>
                    <div class="description-box-footer">
                        <a href="#"><small>View Details</small> <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Charts Row --}}
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

    {{-- Analytics Details Row --}}
    <div class="row">
        <div class="col-md-6">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Top Countries</h3>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Country</th>
                                <th>Visits</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($topCountries as $country)
                            <tr>
                                <td>{{ $country->country ?? 'Unknown' }}</td>
                                <td><span class="badge badge-primary">{{ $country->count }}</span></td>
                            </tr>
                            @empty
                            <tr><td colspan="2" class="text-center">No data yet</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Top Pages</h3>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Page</th>
                                <th>Views</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($topPages as $page)
                            <tr>
                                <td><code>/{{ $page->page }}</code></td>
                                <td><span class="badge badge-info">{{ $page->count }}</span></td>
                            </tr>
                            @empty
                            <tr><td colspan="2" class="text-center">No data yet</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Device & Browser Distribution --}}
    <div class="row">
        <div class="col-md-4">
            <div class="card card-indigo">
                <div class="card-header">
                    <h3 class="card-title">Device Types</h3>
                </div>
                <div class="card-body" style="height: 200px;">
                    <canvas id="deviceChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card card-navy">
                <div class="card-header">
                    <h3 class="card-title">Recent Visitor Details</h3>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>IP Address</th>
                                <th>Country</th>
                                <th>City</th>
                                <th>Device</th>
                                <th>Browser</th>
                                <th>Page</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recentVisits as $visit)
                            <tr>
                                <td><code>{{ $visit->ip_address ?? 'N/A' }}</code></td>
                                <td>{{ $visit->country ?? 'Unknown' }}</td>
                                <td>{{ $visit->city ?? '-' }}</td>
                                <td>
                                    @if($visit->device == 'Mobile')
                                        <span class="badge badge-warning"><i class="fas fa-mobile-alt"></i> Mobile</span>
                                    @else
                                        <span class="badge badge-primary"><i class="fas fa-desktop"></i> Desktop</span>
                                    @endif
                                </td>
                                <td>{{ $visit->browser ?? 'Unknown' }}</td>
                                <td><code>{{ Str::limit($visit->page, 20) }}</code></td>
                                <td>{{ $visit->visited_at ? Carbon\Carbon::parse($visit->visited_at)->diffForHumans() : 'N/A' }}</td>
                            </tr>
                            @empty
                            <tr><td colspan="7" class="text-center">No visitor data yet</td></tr>
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
            labels: {!! json_encode($visitorLabels ?? []) !!},
            datasets: [{
                label: 'Visitors',
                data: {!! json_encode($visitorData ?? []) !!},
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
            labels: {!! json_encode(array_keys($contentDistribution ?? [])) !!},
            datasets: [{
                data: {!! json_encode(array_values($contentDistribution ?? [])) !!},
                backgroundColor: ['#28a745', '#ffc107', '#dc3545', '#17a2b8']
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { position: 'bottom' } }
        }
    });

    // Device Pie Chart
    @if(!empty($deviceDistribution))
    const deviceCtx = document.getElementById('deviceChart').getContext('2d');
    new Chart(deviceCtx, {
        type: 'doughnut',
        data: {
            labels: {!! json_encode(array_keys($deviceDistribution)) !!},
            datasets: [{
                data: {!! json_encode(array_values($deviceDistribution)) !!},
                backgroundColor: ['#17a2b8', '#ffc107']
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { position: 'bottom' } }
        }
    });
    @endif
</script>
@stop
