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
    @include('user.calender')
    <div class="container mt-5" style="padding-top: 120px;">
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
                use Illuminate\Support\Facades\Auth;
            @endphp

            <div class="col-lg-8 position-relative">
                <div class="card">
                    <span class="fs-2 fw-bold p-4">Hello! i'm {{ Auth::user()->name }}</span>
                </div>
                @if(session('success'))
                    <div class="card text-center mb-3 position-fixed top-40 start-50 translate-middle glass-card" style="z-index:9999;" id="success-message">
                        <div class="card-body bg-primary text-white rounded">
                            {{ session('success') }}
                            <hr>
                            <a href="{{ route('matching') }}" class="text-decoration-none text-white">find if there are any matches for your skills</a>
                        </div>
                    </div>
                @endif
                <div class="card my-4 ">
                    <h3 class="ms-5 mt-4">Match making secssion</h3>
                    <p class="ms-5 mt-4">post your request here</p>
                    <hr>
                    <form action="{{ route('skillexchange') }}" method="post">
                        @csrf
                        <div class="d-flex">
                            <div class="p-5">
                                <label class="form-lable fw-bold">willing to teach:</label>
                                <input type="text" class="form-control" name="teach" id="teach" placeholder="eg: Guitar or Spanish">
                            </div>
                            <div class="p-5">
                                <label class="form-lable fw-bold">In exchange:</label>
                                <input type="text" class="form-control" name="exchange" id="exchange" placeholder="Marketing">
                            </div>

                        </div>
                        <div class="d-flex justify-content-center m-1">
                            <button type="submit" class="btn btn-primary flex-fill ">
                                Submit
                            </button>
                        </div>


                    </form>
                </div>
                <div class="card mb-5">
                    <h3 class="ms-5 mt-4">Don't have anything to share?</br> Dont worry we got you</h3>
                    <hr>
                    <h4 class="ms-5">Pay and learn</h4>
                    <div >
                        <form class="d-flex mx-5 mb-5" role="search">
                          <input class="form-control me-2" type="search" placeholder="Search for what you wanna learn" aria-label="Search"/>
                          <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
{{-- <script>
setTimeout(() => {
   let msg = document.getElementById('success-message');
   if(msg) msg.style.display = 'none';
}, 2000);
</script> --}}
