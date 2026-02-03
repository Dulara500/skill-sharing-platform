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
            <div class="col-lg-2">
                <div class="card p-4">
                    <a href={{ route('teaching') }}><section>Teaching</section></a>
                    <hr>
                    <a href={{ route('learning') }}><section>Learning</section></a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card p-4">
                    <span class="fw-bold">I'm learning</span>
                    <form class="d-flex position-absolute top-0 end-0" role="search">

                        <div class="collapse search-slide " id="searchBar">
                            <input class="form-control me-2 mt-3" type="search" placeholder="Search" aria-label="Search" />
                        </div>

                        <button class="btn me-2 mt-3" data-bs-toggle="collapse" data-bs-target="#searchBar" type="button"><i class="bi bi-search "></i></button>
                    </form>
                    <hr>
                    <span>


                        @if($classes->isEmpty())
                            <p>You haven't joined any classes yet</p>
                        @else
                        @if(session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                        @endif
                            @foreach ($classes as $class)


                                    <ul>

                                    <li>{{ $class->course_title}} <a href={{ route('user.viewClass', ['class' => $class->course_title, 'teacher_id' => $class->teacher_id]) }} class="btn btn-sm btn-outline-primary float-end">view class</a>
                                    @if($class->is_completed)
                                        <span class="badge bg-success float-end me-2">Completed</span>
                                    @endif
                                    </li>
                                </ul>





                            @endforeach
                        @endif


                    </span>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="card p-4">
                    <span class="fw-bold">Summery</span>
                    <hr>
                    <span class="fst-italic text-body-secondary">Currently learning</span>
                    <span class="fs-2">{{ $noOfLessons }}</span>
                    <hr>
                    <span class="fst-italic text-body-secondary">Analytics (Monthly*)</span>
                    <div class="d-flex justify-content-between">
                        <span class="my-2">Lesson taken</span>
                        <span class="my-2">0</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span class="my-2">Expense</span>
                        <span class="my-2">$0</span>
                    </div>

                </div>
            </div>
            <div>
                <h2 class="text-primary flex position-absolute top-50 start-40"><a href={{ route('profile') }}>Share skills</a> </h2>
            </div>

        </div>
    </div>

</body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

