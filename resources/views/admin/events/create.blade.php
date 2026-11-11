<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#17191F; color:white;">

<div class="container py-5" style="max-width:750px;">
    <h2 class="mb-4">Add New Event</h2>

    <div class="card bg-dark text-white">
        <div class="card-body">
            <form action="{{ route('admin.events.store') }}" method="POST">
                @csrf

                <label class="form-label">Event Name</label>
                <input type="text" name="event_name" class="form-control mb-3" value="{{ old('event_name') }}" required>

                <label class="form-label">Description</label>
                <textarea name="description" class="form-control mb-3">{{ old('description') }}</textarea>

                <label class="form-label">Venue</label>
                <input type="text" name="venue" class="form-control mb-3" value="{{ old('venue') }}" required>

                <label class="form-label">Event Date</label>
                <input type="date" name="event_date" class="form-control mb-3" value="{{ old('event_date') }}" required>

                <label class="form-label">Start Time</label>
                <input type="time" name="start_time" class="form-control mb-3" value="{{ old('start_time') }}" required>

                <label class="form-label">End Time</label>
                <input type="time" name="end_time" class="form-control mb-3" value="{{ old('end_time') }}" required>

                <label class="form-label">Maximum Participants</label>
                <input type="number" name="max_participants" class="form-control mb-3" value="{{ old('max_participants') }}" min="1">

                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                <button type="submit" class="btn btn-primary">Save Event</button>
                <a href="{{ route('admin.events.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>