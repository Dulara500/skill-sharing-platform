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
                    <a href={{ route('teaching') }} ><section>Teaching</section></a>
                    <hr>
                    <a href={{ route('learning') }}><section>Learning</section></a>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="card p-4">
                    <span class="fw-bold">I'm teaching</span>
                    <form class="d-flex position-absolute top-0 end-0" role="search">

                        <div class="collapse search-slide " id="searchBar">
                            <input class="form-control me-2 mt-3" type="search" placeholder="Search" aria-label="Search" />
                        </div>

                        <button class="btn me-2 mt-3" data-bs-toggle="collapse" data-bs-target="#searchBar" type="button"><i class="bi bi-search "></i></button>

                        <button class="btn me-2 mt-3 btn btn-outline-secondary" type="submit">create a class</button>

                    </form>
                    <hr>
                    <span>You are not teaching any classes</span>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card p-4">
                    <span class="fw-bold">Summery</span>
                    <hr>
                    <span class="fst-italic text-body-secondary">Currently teaching</span>
                    <span class="fs-2">0</span>
                    <hr>
                    <span class="fst-italic text-body-secondary">Analytics (Monthly*)</span>
                    <div class="d-flex justify-content-between">
                        <span class="my-2">Lesson taught</span>
                        <span class="my-2">0</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span class="my-2">Revenue</span>
                        <span class="my-2">$0</span>
                    </div>

                </div>
            </div>

        </div>
    </div>
</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>


