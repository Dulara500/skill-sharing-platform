<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/usernavbarcss.css') }}">
    <title>SkillSwap – Learn & Teach Together</title>
    <style>
        .menu-links a.reviews {
            color: black;
            border-bottom: 2px solid #d33;
            padding-bottom: 4px;
        }
        a{
            text-decoration: none;
            color: inherit;
        }
        a:hover{
            color: blue;
        }
    </style>
</head>
<body>
    @include('user.usernavbar')
    @include('user.calender')
    <div class="container mt-4" style="padding-top: 120px;">
        <div class="row">
            <div class="col-lg-3">
                <div class="card p-4">
                    <a href={{ route('stureview') }}><section>From students</section></a>
                    <hr>
                    <a href={{ route('teareviews') }}><section>From teachers</section></a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card p-4">
                    <span class="fw-bold">Reviews from students</span>

                    <hr>
                    <span>
                        @if($reviews->isEmpty())
                            <p class="text-center text-muted">
                                No reviews found yet
                            </p>
                        @else
                            @foreach ($reviews as $review)
                                <div class="mb-3">
                                    <span class="d-block">
                                        <p class="mb-1">Review from : {{ $review->user?->name ?? 'Unknown Student' }}</p>
                                        <p class="mb-1">course: {{ $review->course_title }}</p>
                                        <p class="mb-1"> Review: {{ $review->review }}</p>
                                    </span>

                                    <hr>
                                </div>

                            @endforeach
                        @endif
                    </span>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card p-4">
                    <span class="fs-1">{{ $count }}</span>
                    <hr>
                    <span class="fst-italic text-body-secondary">Reviews</span>

            </div>

        </div>
    </div>
</body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

