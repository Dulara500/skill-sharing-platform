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
    <div class="container mt-5 position-relative" style="padding-top: 120px;">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card p-4">
                    <h3 class="text-center">Report the Course</h3>
                    <hr>
                    <form method="POST" action="{{ route('submit.report') }}">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                        <input type="hidden" name="teacher_id" value="{{ $teacher_id }}">
                        <input type="hidden" name="course_id" value="{{ $course_id }}">
                        <input type="hidden" name="course_title" value="{{ $course_title }}">
                        <div class="mb-3">
                            <label for="report" class="form-label">Reason for Reporting</label>
                            <textarea class="form-control" id="report" name="report" rows="4" placeholder="Enter the reason for reporting this course..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger">Submit Report</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
