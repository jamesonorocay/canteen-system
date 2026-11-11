<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Events</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #17191F;
            color: #F5F6FA;
            font-family: Arial, sans-serif;
        }

        .main-content {
            padding: 35px;
        }

        .event-card {
            background-color: #242832;
            border: 1px solid #343944;
            border-radius: 12px;
            padding: 22px;
            height: 100%;
        }

        .muted {
            color: #A5AAB5;
        }

        .btn-blue {
            background-color: #91B4FF;
            color: #17191F;
            border: none;
            font-weight: bold;
        }

        .btn-blue:hover {
            background-color: #789FEF;
            color: #17191F;
        }

        .back-link {
            color: #91B4FF;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="container-fluid main-content">

    <a href="{{ url('/dashboard') }}" class="back-link">
        &larr; Back to Dashboard
    </a>

    <div class="mt-4 mb-4">
        <h2 class="fw-bold">Browse Events</h2>
        <p class="muted">Explore upcoming school events and activities.</p>
    </div>

    @if($events->isEmpty())
        <div class="event-card text-center">
            <h5>No Events Available</h5>
            <p class="muted mb-0">
                There are currently no school events to display.
            </p>
        </div>
    @else

        <div class="row g-3">

            @foreach($events as $event)
                <div class="col-md-6 col-lg-4">
                    <div class="event-card">

                        <h5 class="fw-bold">{{ $event->event_name }}</h5>

                        <p class="muted mb-2">
                            {{ $event->description ?? 'No description available.' }}
                        </p>

                        <hr style="border-color: #343944;">

                        <p class="muted mb-1">
                            Venue: {{ $event->venue }}
                        </p>

                        <p class="muted mb-1">
                            Date: {{ $event->event_date->format('F d, Y') }}
                        </p>

                        <p class="muted mb-3">
                            Status: {{ ucfirst($event->status) }}
                        </p>

                        <button class="btn btn-blue w-100" disabled>
                            Registration Coming Soon
                        </button>

                    </div>
                </div>
            @endforeach

        </div>

    @endif

</div>

</body>
</html>
