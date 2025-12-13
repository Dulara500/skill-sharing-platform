
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillSwap</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/usernavbarcss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <style>
        .menu-links a.dashboard {
            color: black;
            border-bottom: 2px solid #d33;
            padding-bottom: 4px;
        }
        a {
            text-decoration: none;
            color: inherit;
        }
        .search-wrapper {
            display: flex;
            align-items: center;
            background: #fff;
            border-radius: 50px;
            padding: 6px;
            max-width: 700px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        /* Category Button */
        .category-btn {
            display: flex;
            align-items: center;
            gap: 6px;
            background: #f3f3f3;
            border-radius: 50px;
            padding: 8px 14px;
            border: none;
            font-weight: 500;
        }

        .category-btn i {
            color: #ff6b00;
        }

        /* Dropdown menu */
        .category-menu {
            border-radius: 14px;
            padding: 10px 0;
        }

        .category-menu .dropdown-item {
            padding: 10px 16px;
        }

        /* Search input */
        .search-input {
            border: none;
            outline: none;
            padding: 10px 14px;
            flex: 1;
            font-size: 15px;
        }

        /* Search button */
        .search-btn {
            background: #eaeaea;
            border-radius: 50%;
            padding: 10px 14px;
            border: none;
        }

        .search-btn:hover {
            background: #0d6efd;
            color: #fff;
        }

    </style>
</head>
<body>


@include('user.dashboardnav');
@include('user.calender')
<div class="container mt-4 pt-5">
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 d-flex justify-content-center">

                <div class="search-wrapper">
                    <!-- Category Dropdown -->
                    <div class="dropdown">
                        <button class="btn category-btn dropdown-toggle"
                                type="button"
                                data-bs-toggle="dropdown">
                            <i class="bi bi-compass"></i>
                            <span id="selectedCategory">Sports & Fitness</span>
                        </button>

                        <ul class="dropdown-menu category-menu">
                            <li><a class="dropdown-item" href="#" data-value="all">All Categories</a></li>
                            <li><a class="dropdown-item" href="#" data-value="academic">Academic Tutoring</a></li>
                            <li><a class="dropdown-item" href="#" data-value="computer">Computer Skills</a></li>
                            <li><a class="dropdown-item" href="#" data-value="sports">Sports & Fitness</a></li>
                            <li><a class="dropdown-item" href="#" data-value="language">Language</a></li>
                            <li><a class="dropdown-item" href="#" data-value="music">Music</a></li>
                            <li><a class="dropdown-item" href="#" data-value="performing">Performing Arts</a></li>
                            <li><a class="dropdown-item" href="#" data-value="visual">Visual Arts</a></li>
                            <li><a class="dropdown-item" href="#" data-value="digital">Digital Media</a></li>
                            <li><a class="dropdown-item" href="#" data-value="cookery">Cookery</a></li>
                            <li><a class="dropdown-item" href="#" data-value="finance">Finance & Business</a></li>
                        </ul>

                    </div>

                    <input type="text" class="search-input" placeholder="Search..." />

                    <button class="btn search-btn">
                        <i class="bi bi-search"></i>
                    </button>
                </div>

            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="card shadow-sm border-0 rounded-4 p-4">
            <h4 class="fw-bold mb-1">Hello there 👋</h4>
            <p class="text-muted mb-3">
              What would you like to do today?
            </p>

            <div class="d-flex gap-3 flex-wrap">
              <a href="{{ route('learning') }}" class="btn btn-primary rounded-pill px-4">
                Learn a Skill
              </a>
              <a href="{{ route('teaching') }}" class="btn btn-outline-primary rounded-pill px-4">
                Teach a Skill
              </a>
              <a href="{{ route('classes') }}" class="btn btn-outline-secondary rounded-pill px-4">
                My Classes
              </a>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h5 class="fw-bold mb-3">Popular Categories</h5>

        <div class="row g-3">
          <div class="col-md-3">
            <div class="card text-center p-3 shadow-sm rounded-4">
              <i class="bi bi-laptop fs-2 text-primary"></i>
              <span class="mt-2 fw-semibold">Computer Skills</span>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card text-center p-3 shadow-sm rounded-4">
              <i class="bi bi-activity fs-2 text-success"></i>
              <span class="mt-2 fw-semibold">Sports & Fitness</span>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card text-center p-3 shadow-sm rounded-4">
              <i class="bi bi-music-note-beamed fs-2 text-warning"></i>
              <span class="mt-2 fw-semibold">Music</span>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card text-center p-3 shadow-sm rounded-4">
              <i class="bi bi-translate fs-2 text-danger"></i>
              <span class="mt-2 fw-semibold">Languages</span>
            </div>
          </div>
        </div>

        <div class="container mt-5">
            <h5 class="fw-bold mb-3">Your Activity</h5>

            <div class="row g-3">
              <div class="col-md-4">
                <div class="card p-3 shadow-sm rounded-4">
                  <span class="text-muted">Classes Learning</span>
                  <h3 class="fw-bold">0</h3>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card p-3 shadow-sm rounded-4">
                  <span class="text-muted">Classes Teaching</span>
                  <h3 class="fw-bold">0</h3>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card p-3 shadow-sm rounded-4">
                  <span class="text-muted">Completed Sessions</span>
                  <h3 class="fw-bold">0</h3>
                </div>
              </div>
            </div>
        </div>

    </div>

    <div class="container mt-5 text-center">
        <div class="card p-5 shadow-sm border-0 rounded-4">
            <i class="bi bi-lightbulb fs-1 text-warning"></i>
            <h5 class="mt-3 fw-bold">You haven't joined any classes yet</h5>
            <p class="text-muted">
              Start learning or share your knowledge with others.
            </p>
            <a href="{{ route('classes') }}" class="btn btn-primary rounded-pill px-4">
              Explore Classes
            </a>
        </div>
    </div>



</div>
@include('layouts.footer')




</body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
