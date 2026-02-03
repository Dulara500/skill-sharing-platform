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

                    <h2>Student Evaluation</h2>
                    <hr>
                    <span>student name:{{ $studentname->user->name }}</span>
                    <span>Course taken: {{ $stucourse->first()->course_title }}</span>
                    <form method="POST" action="{{ route('teareview.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="review" class="form-label">Evaluation Comments</label>
                            <textarea class="form-control" id="review" name="review" rows="4" placeholder="Enter your evaluation comments here..."></textarea>
                        </div>
                        <input type="hidden" name='name' value='{{ $studentname->user->name }}'>
                        <input type="hidden" name= 'course_title' value='{{ $stucourse->first()->course_title }}'>
                        <input type="hidden" name='user_id' value='{{ $studentname->user->id }}'>
                        <input type="hidden" name='teacher_id' value='{{ Auth::id() }}'>
                        <button type="submit" class="btn btn-primary">Submit Evaluation</button>
                    </form>
                    @if(@session('success'))
                        <div class="alert alert-success mt-3">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>


        </div>
    </div>
</body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
