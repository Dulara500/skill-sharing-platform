
<nav class="navbar px-4 py-3 fixed-top">
    <div class="container-fluid d-flex align-items-center">
        <div class="d-flex align-items-center">
            <span class="fw-bold fs-4 text-primary-emphasis">SkillSwap</span>
        </div>

        <div class="ms-auto d-flex align-items-center gap-3">

            <a href={{ route('classes') }}><span class="myclass">My classes</span></a>

            <a href={{ route('inbox') }}><i class="bellicon bi bi-bell"></i></a>

            <button class="btn calendar-btn" type="button"
                data-bs-toggle="modal"
                data-bs-target="#calendarModal">
                <i class="bi bi-calendar"></i>
            </button>



            <!-- Dropdown -->
            <div class="dropdown">
                <a class="dropdown-toggle dropdown-toggle-no-caret"
                   href="#"
                   role="button"
                   data-bs-toggle="dropdown"
                   aria-expanded="false">

                   <i class="profile bi bi-person-circle fs-4"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href={{ route('profile') }}>Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href={{ route('classes') }}>My Classes</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="dropdown-item text-danger" type="submit">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>

        </div>

    </div>

    <div class="container mt-3 d-flex justify-content-center">

        <div class="menu-links ">
            <a href={{ route('dashboard') }} style="position: fixed; left:70px; top:60px"><i class="bi bi-house-door fs-2"></i></a>
            <a href={{ route('dash') }} class="dashboard">Dashboard</a>
            <a href={{ route('inbox') }} class="inbox">Inbox</a>
            <a href={{ route('classes') }} class="classes">Classes</a>
            <a href={{ route('progress') }} class="pro">Progress</a>
            <a href={{ route('reviews') }} class="reviews">Reviews</a>
        </div>
    </div>
</nav>





