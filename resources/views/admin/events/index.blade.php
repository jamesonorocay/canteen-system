<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#17191F; color:white;">

<div class="container py-5">
    <div class="d-flex justify-content-between mb-4">
        <h2>Manage Events</h2>
        <a href="{{ route('admin.events.create') }}" class="btn btn-primary">+ Add Event</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card bg-dark text-white">
        <div class="card-body">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>Event Name</th>
                        <th>Venue</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($events as $event)
                        <tr>
                            <td>{{ $event->event_name }}</td>
                            <td>{{ $event->venue }}</td>
                            <td>{{ $event->event_date->format('M d, Y') }}</td>
                            <td>{{ ucfirst($event->status) }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No events found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary mt-3">Back to Dashboard</a>
</div>

</body>
</html>