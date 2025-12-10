
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillSwap</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/usernavbarcss.css') }}">
    <style>
        .menu-links a.dashboard {
            color: black;
            border-bottom: 2px solid #d33;
            padding-bottom: 4px;
        }
    </style>
</head>
<body>


@include('user.usernavbar')

<!-- Main Content -->
<div class="container mt-4">
    <div class="row">

        <!-- LEFT SIDE -->
        <div class="col-lg-8">

            <!-- Upcoming events -->
            <div class="card p-4 mb-4">
                <h5 class="fw-bold">Upcoming events</h5>
                <hr>
                <p>No upcoming events scheduled</p>
                <a href="#">Go to calendar →</a>
            </div>

            <!-- Notifications -->
            <div class="card p-4 mb-4">
                <h5 class="fw-bold">Notifications</h5>
                <hr>
                <small>04 Dec 2025</small>
                <p>Welcome to clascity!</p>
                <a href="#">See all notifications →</a>
            </div>

            <!-- Teaching -->
            <div class="card p-4 mb-4">
                <h5 class="fw-bold">Currently teaching</h5>
                <hr>
                <p>You are not teaching any class</p>
            </div>

            <div class="card p-4 mb-4">
                <h5 class="fw-bold">Currently learning</h5>
                <hr>
                <p>You are not taking any class</p>
            </div>
        </div>

        @php
            use Illuminate\Support\Facades\Auth
        @endphp
        <!-- RIGHT SIDE -->
        <div class="col-lg-4">

            <!-- Profile -->
            <div class="card p-4 mb-4 text-center">
                <div class="profile-pic mb-3"></div>
                <h5 class="fw-bold">{{ Auth::user() -> name }}</h5>
                <p class="text-muted">Joined in {{ Auth::user() -> created_at -> format('M-Y')}}</p>
                <button class="btn btn-outline-dark w-100">Edit profile</button>
            </div>

            <!-- Monthly summary -->
            <div class="card p-4">
                <h5 class="fw-bold">Monthly summary</h5>
                <hr>
                <p class="d-flex justify-content-between">
                    <span>Lessons taught</span> <span>0</span>
                </p>
                <p class="d-flex justify-content-between">
                    <span>Total revenue</span> <span>$0</span>
                </p>
                <hr>
                <p class="d-flex justify-content-between">
                    <span>Lessons taken</span> <span>0</span>
                </p>
                <p class="d-flex justify-content-between">
                    <span>Total expense</span> <span>$0</span>
                </p>
            </div>

        </div>

    </div>
</div>

<!-- Bootstrap Icons & JS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
