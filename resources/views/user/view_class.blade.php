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
        .menu-links a.classes {
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
            <div class="col-lg-9 mx-auto">
                <div class="card p-4 mb-5">
                    <h3>Class Details</h3>
                    <hr>
                    <div class="card">
                        @if($match->is_completed)
                            <div class="position-absolute  text-danger fs-1 fw-bold ms-5">Completed</div>
                        @endif
                        <img src=" {{ asset('material/'.$course_details->file) }}" class="card-img-top" alt="Class Image">
                    </div>
                    <div class="mt-3">
                        <h4 class="card-title fw-bold">{{ $course_details->title }}</h4>
                        <p><strong>Instructor:</strong> {{ $course_details->user->name }}</p>
                        <p><strong>Is certified: </strong>{{ $course_details->is_certified_teacher ? 'Yes' : 'No' }}</p>
                        <p><strong>Experience:</strong> {{ $course_details->years_experience }} years</p>
                        <p><strong>Description:</strong> {{ $course_details->overview }}</p>
                        <form action="{{ route('course.completed', $match) }}" method="post">
                            @csrf
                            <label for="completed: ">Completed: </label>
                            <input type="checkbox" name="completed" id="completed" value="1" {{ old('completed') ? 'checked' : '' }}>
                            <button type="submit" class="btn btn-primary">Mark as Completed</button>
                        </form>
                        <div class="mt-3">
                            <button class="btn btn-outline-secondary ms-2">Download Material</button>
                            <button class="btn btn-outline-secondary ms-2">Attend the qize</button>
                        </div>

                        @if($match->is_completed)
                            <div class="alert alert-info mt-3" id="review_section">
                                You have completed this course.
                                <p>post a review for your instructor!</p>
                                <form action="{{ route('submit.review') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="review" class="form-label">Your Review:</label>
                                        <textarea class="form-control" id="review" name="review" rows="3"></textarea>
                                        <input type="hidden" name="teacher_id" id="teacher_id" value="{{ $match->teacher_id }}">
                                        <input type="hidden" name="course_title" id="course_title" value="{{ $match->course_title }}">
                                    </div>
                                    <button type="submit" class="btn btn-success">Submit Review</button>
                                </form>
                                @if(session('success'))
                                    <div class="alert alert-success mt-3">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            </div>
                        @endif


                </div>
        </div>
    </div>
</body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
