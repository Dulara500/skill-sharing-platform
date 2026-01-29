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
        <div class="row justify-content-center">

            <div class="col-lg-8 mb-5">
                <div class="card p-4">
                    <h2>Match making</h2>
                    <hr>
                    @if($matches->isEmpty())
                        <p class="text-center text-muted">
                            No matches found yet 🤝
                        </p>
                    @else
                        @foreach($matches as $match)
                            <div class="border rounded p-3 mb-3">
                                 <h5>User: {{ $match->user->name }}</h5>

                                <p>
                                    <strong>Teaches:</strong>

                                    @foreach($match->teach as $skill)
                                        <span class="badge bg-success">{{ $skill }}</span>
                                    @endforeach


                                </p>

                                <p>
                                    <strong>Wants in exchange:</strong>
                                    <span class="badge bg-primary">
                                        {{ $match->exchange }}
                                    </span>
                                </p>

                                <a href="" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('getClass{{ $match->id }}').submit();">
                                    Enroll in Class <i class="bi bi-bookmark-plus"></i>
                                </a>



                                <button class="btn btn-primary">Get in touch <i class="bi bi-chat-dots"></i></button>
                                <form action="{{ route('learning.store') }}" id="getClass{{ $match->id }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="course_title" value="{{ $match->teach[0] }}">
                                    <input type="hidden" name="teacher_id" value="{{ $match->user->id }}">
                                </form>

                            </div>
                        @endforeach
                    @endif
                </div>
            </div>


        </div>
    </div>
</body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
