<nav class="navbar px-4 py-3 fixed-top">
    <div class="container-fluid d-flex align-items-center">
        <div class="d-flex align-items-center">
            <span class="fw-bold fs-4 text-primary-emphasis">SkillSwap</span>
        </div>

        <div class="ms-auto d-flex align-items-center gap-3">

            <a href={{ route('dash') }}><span class="myclass">Dashboard</span></a>

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
</nav>

