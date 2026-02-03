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
    @include('user.dashboardnav')
    @include('user.calender')

    <div class="container " style="padding-top: 120px;">
    <form action="{{ route('storeClass') }}" method="POST" enctype="multipart/form-data">
        @csrf
         <div class="row my-4">

            <div class="col-lg-9 ">
                <div class="card p-4">
                    <h4 class="fw-bold">Basic info</h4>
                    <hr>

                    <label class="form-label">class title</label>
                    <div class="mb-3 d-flex justify-content-between">
                        <input type="text" class="form-control" name="title" id="title">


                        <div class="dropdown ms-3 border border-light-subtle border-2 rounded">
                            <button class="btn category-btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                <i class="bi bi-compass"></i>
                                <span id="selectedCategory">All Categories</span>
                            </button>

                            <ul class="dropdown-menu category-menu">
                                <li><a class="dropdown-item" href="#" data-id="0">All Categories</a></li>
                                <li><a class="dropdown-item" href="#" data-id="1">Coding</a></li>
                                <li><a class="dropdown-item" href="#" data-id="2">Computer Skills</a></li>
                                <li><a class="dropdown-item" href="#" data-id="3">Sports & Fitness</a></li>
                                <li><a class="dropdown-item" href="#" data-id="4">Language</a></li>
                                <li><a class="dropdown-item" href="#" data-id="5">Music</a></li>
                                <li><a class="dropdown-item" href="#" data-id="6">Business</a></li>
                            </ul>

                            <!-- This is what gets submitted -->
                            <input type="hidden" name="category_id" id="category_id">
                        </div>

                    </div>

                    <div class="mb-3">
                        <label class="form-label">Add tags to your class for better search result</label>
                        <input type="text" class="form-control" name="tags" id="tags" placeholder="e.g. math,algebra,high school">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Class overview</label>
                        <textarea class="form-control" name="overview" id="overview" rows="3"></textarea>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="experience" class="form-label">Years of experience</label>
                            <select id="years_experience" name="years_experience" class="form-select rounded">
                                <option value="0" selected>No experience</option>
                                <option value="1">Just few months</option>
                                <option value="2">1–2 years</option>
                                <option value="4">3–5 years</option>
                                <option value="8">6–10 years</option>
                                <option value="12">10+ years</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="certified" class="form-label">
                                Are you a certified teacher?
                            </label>
                            <select id="is_certified_teacher" name="is_certified_teacher" class="form-select">
                                <option value="no" selected>No</option>
                                <option value="yes">Yes</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="file" class="form-label fw-semibold">Upload class material</label>
                            <input type="file" name="file" id="file" class="form-control"  required>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3">
                <div class="card p-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0 me-2">Publish</h6>
                        </div>
                        <button type="button" class="btn btn-outline-secondary btn-sm">
                            Preview
                        </button>
                    </div>

                    <hr class="my-2">

                    <p class="mb-3" style="font-size: 0.9rem;">
                        Before publishing, try to fill out as much information about your class as
                        possible to attract more students.
                    </p>

                    <hr class="my-2">

                    <div class="d-flex justify-content-between mt-3">
                        <button type="button" class="btn btn-outline-secondary flex-fill me-2">
                            Save draft
                        </button>
                        <button type="submit" class="btn btn-primary flex-fill">
                            Publish
                        </button>
                    </div>
                </div>
            </div>
        </div>


        </div>


    </form>
</div>
</body>
</html>
<script>
    document.querySelectorAll('.category-menu .dropdown-item').forEach(item => {
        item.addEventListener('click', function (e) {
        e.preventDefault();

        // Update button text
        document.getElementById('selectedCategory').textContent = this.textContent;

        // Set hidden input value
        const val = this.dataset.id;
        document.getElementById('category_id').value = val ? val : '';
        });
    });

</script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

