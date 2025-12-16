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
    <div class="container mt-4" style="padding-top: 120px;">
        <form action="#" method="post">
            <div class="row">
                <div class="col-lg-9">
                    <div class="card p-4">
                        <h4 class="fw-bold">Basic info</h4>
                        <hr>
                        <label for="exampleFormControlInput1" class="form-label">class title</label>
                        <div class="mb-3 d-flex justify-content-between">
                          <input type="email" class="form-control" id="exampleFormControlInput1" >

                            <div class="dropdown ms-3 border border-light-subtle border-2 rounded">
                                <button class="btn category-btn dropdown-toggle"
                                        type="button"
                                        data-bs-toggle="dropdown">
                                    <i class="bi bi-compass"></i>
                                    <span id="selectedCategory">All Categories</span>
                                </button>

                                <ul class="dropdown-menu category-menu">
                                    <li><a class="dropdown-item" href="#" data-value="all">All Categories</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="academic">Academic Tutoring</ a></ li>
                                    <li><a class="dropdown-item" href="#" data-value="computer">Computer Skills</   a></li>
                                    <li><a class="dropdown-item" href="#" data-value="sports">Sports & Fitness</a></    li>
                                    <li><a class="dropdown-item" href="#" data-value="language">Language</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="music">Music</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="performing">Performing Arts</ a></ li>
                                    <li><a class="dropdown-item" href="#" data-value="visual">Visual Arts</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="digital">Digital Media</a></  li>
                                    <li><a class="dropdown-item" href="#" data-value="cookery">Cookery</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="finance">Finance & Business</ a></ li>
                                </ul>

                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Add tags to your class for     better search result</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">Class overview</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="experience" class="form-label">Years of experience</label>
                                <select id="experience" name="experience" class="form-select rounded">
                                    <option value="none" selected>No experience</option>
                                    <option value="1-2">1–2 years</option>
                                    <option value="3-5">3–5 years</option>
                                    <option value="6-10">6–10 years</option>
                                    <option value="10+">10+ years</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="certified" class="form-label">
                                    Are you a certified teacher?
                                    <span class="text-muted"
                                          data-bs-toggle="tooltip"
                                          data-bs-placement="top"
                                          title="A teaching certificate from a recognized authority">
                                    </span>
                                </label>
                                <select id="certified" name="certified" class="form-select">
                                    <option value="no" selected>No</option>
                                    <option value="yes">Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card p-4 my-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="mb-0">Booking configurations</h5>
                        </div>

                        <!-- Class location -->
                        <div class="mb-2">
                            <label class="form-label fw-semibold">
                                Class location
                                <span class="text-muted ms-1"
                                      data-bs-toggle="tooltip"
                                      title="Where will you teach your class?">ⓘ</span>
                            </label>
                            <div class="form-check d-inline-block ms-4">
                                <input class="form-check-input" type="checkbox" id="onlineLessons">
                                <label class="form-check-label" for="onlineLessons">
                                    Available for online lessons
                                </label>
                            </div>
                        </div>

                        <!-- Address line -->
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Street Address</label>
                                <input type="text" class="form-control" name="street_address">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Apt, Suite <span class="text-muted">(optional)</span></   label>
                                <input type="text" class="form-control" name="apt_suite">
                            </div>
                            <div class="col-md-2 d-flex align-items-end">
                                <button type="button" class="btn btn-outline-secondary w-100">+</button>
                            </div>
                        </div>

                        <!-- Country / City / Province / Zip -->
                        <div class="row g-3 mb-4">
                            <div class="col-md-3">
                                <label class="form-label">Country</label>
                                <select class="form-select" name="country">
                                    <option selected disabled>Choose...</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Town / City</label>
                                <input type="text" class="form-control" name="city">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Province</label>
                                <input type="text" class="form-control" name="province">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Postal Code/Zip</label>
                                <input type="text" class="form-control" name="postal_code">
                            </div>
                        </div>

                        <hr>

                        <!-- Availability -->
                        <div class="mb-2">
                            <label class="form-label fw-semibold">
                                When are you available to teach?
                                <span class="text-muted ms-1"
                                      data-bs-toggle="tooltip"
                                      title="Set the days and times you can teach">ⓘ</span>
                            </label>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-3">
                                <label class="form-label">From day</label>
                                <select class="form-select" name="from_day">
                                    <option selected disabled>Choose...</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">To day</label>
                                <select class="form-select" name="to_day">
                                    <option selected disabled>Choose...</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">From time</label>
                                <select class="form-select" name="from_time">
                                    <option selected disabled>Choose...</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">To time</label>
                                <select class="form-select" name="to_time">
                                    <option selected disabled>Choose...</option>
                                </select>
                            </div>
                            <div class="col-md-2 d-flex align-items-end">
                                <button type="button" class="btn btn-outline-secondary w-100">+</button>
                            </div>
                        </div>

                        <hr>

                        <!-- Fees and conditions -->
                        <div class="mb-2">
                            <label class="form-label fw-semibold">
                                Fees and conditions
                                <span class="text-muted ms-1"
                                      data-bs-toggle="tooltip"
                                      title="Set your class length and price">ⓘ</span>
                            </label>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Class length</label>
                                <select class="form-select" name="class_length">
                                    <option>30 mins</option>
                                    <option>45 mins</option>
                                    <option>60 mins</option>
                                    <option>90 mins</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">How much do you charge?</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input type="number" class="form-control" name="price" min="0" step="0.01">
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-end">
                                <button type="button" class="btn btn-outline-secondary w-100">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="row">
                        <!-- Publish card -->
                        <div class="card p-3">
                            <!-- Header -->
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0 me-2">Publish</h6>

                                </div>

                                <button type="button" class="btn btn-outline-secondary btn-sm">
                                    Preview
                                </button>
                            </div>

                            <hr class="my-2">

                            <!-- Text -->
                            <p class="mb-3" style="font-size: 0.9rem;">
                                Before publishing, try to fill out as much information about your class as
                                possible to attract more students.
                            </p>

                            <hr class="my-2">

                            <!-- Actions -->
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
    document.querySelectorAll('.category-menu .dropdown-item')
        .forEach(item => {
            item.addEventListener('click', function (e) {
                e.preventDefault();

                // Change button text
                document.getElementById('selectedCategory').textContent = this.textContent;
            });
        });
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

