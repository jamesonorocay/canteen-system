<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #17191F;
            color: #F5F6FA;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            background-color: #20232B;
            min-height: 100vh;
            padding: 25px 18px;
        }

        .brand {
            color: #91B4FF;
            font-size: 20px;
            font-weight: bold;
        }

        .nav-link {
            color: #A5AAB5;
            padding: 12px;
            border-radius: 8px;
            margin-top: 8px;
        }

        .nav-link:hover,
        .nav-link.active {
            background-color: #303746;
            color: #91B4FF;
        }

        .main-content {
            padding: 35px;
        }

        .dashboard-card {
            background-color: #242832;
            border: 1px solid #343944;
            border-radius: 12px;
            padding: 22px;
        }

        .muted {
            color: #A5AAB5;
        }

        .logout-btn {
            background-color: #303746;
            color: #F5F6FA;
            border: none;
        }

        .logout-btn:hover {
            background-color: #3B4659;
            color: white;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 sidebar">
            <div class="brand mb-4">School Events</div>

            <nav class="nav flex-column">
                <a href="/dashboard" class="nav-link active">Dashboard</a>
                <a href="{{ route('events.index') }}" class="nav-link">Browse Events</a>
                <a href="#" class="nav-link">My Registrations</a>
                <a href="#" class="nav-link">My Profile</a>
            </nav>

            <form action="{{ route('logout') }}" method="POST" class="mt-5">
                @csrf
                <button type="submit" class="btn logout-btn w-100">
                    Logout
                </button>
            </form>
        </div>

        <!-- Main Content -->
        <div class="col-md-9 col-lg-10 main-content">

            <h2 class="fw-bold">Welcome back, {{ Auth::user()->name }}!</h2>
            <p class="muted">Welcome to your student dashboard.</p>

            <div class="row g-3 mt-4">

                <div class="col-md-6">
                    <div class="dashboard-card">
                        <p class="muted mb-2">Available Events</p>
                        <h2 class="fw-bold">0</h2>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="dashboard-card">
                        <p class="muted mb-2">My Registrations</p>
                        <h2 class="fw-bold">0</h2>
                    </div>
                </div>

            </div>

            <div class="dashboard-card mt-4">
                <h5 class="fw-bold">Getting Started</h5>
                <p class="muted mb-0">
                    Browse available school events and register for activities
                    that interest you.
                </p>
            </div>

            <p class="muted text-center mt-5 small">
                School Event Registration Management System
            </p>

        </div>
    </div>
</div>

</body>
</html>
