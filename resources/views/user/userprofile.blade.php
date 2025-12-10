<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/usernavbarcss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <style>
        a {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>
<body>
    @include('user.usernavbar')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card p-4 mb-4 text-center">
                <div class="profile-pic mb-3"></div>
                <h5 class="fw-bold">{{ Auth::user() -> name }}</h5>
                <p class="text-muted">Joined in {{ Auth::user() -> created_at -> format('M-Y')}}</p>
                <div class="d-flex justify-content-center">
                    <div class="badge text-wrap mx-2 " style="width: 2rem; background:rgb(255, 112, 29)">
                        <span class="">0</span>
                    </div>
                    <span>reviews</span>

                </div>


            </div>
            </div>
            @php
                use Illuminate\Support\Facades\Auth
            @endphp
            <div class="col lg 8">
                <div class="card">
                    <span class="fs-2 fw-bold p-4">Hello! i'm {{ Auth::user()->name }}</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
