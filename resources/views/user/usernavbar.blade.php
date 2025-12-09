<nav class="navbar px-4 py-3">
    <div class="container-fluid d-flex align-items-center">
        <div class="d-flex align-items-center">
            <span class="fw-bold fs-4 text-primary-emphasis">SkillSwap</span>
        </div>

        <div class="ms-auto d-flex align-items-center gap-3">

            <span>My classes</span>

            <i class="bi bi-bell"></i>
            <i class="bi bi-calendar"></i>

            <!-- Dropdown -->
            <div class="dropdown">
                <a class="dropdown-toggle dropdown-toggle-no-caret"
                   href="#"
                   role="button"
                   data-bs-toggle="dropdown"
                   aria-expanded="false">

                   <i class="bi bi-person-circle fs-4"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">My Classes</a></li>
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

<!-- Menu tabs -->
<div class="container mt-3">

    <div class="menu-links d-flex justify-content-center">
        <a href={{ route('dashboard') }} class="dashboard">Dashboard</a>
        <a href={{ route('inbox') }} class="inbox">Inbox</a>
        <a href={{ route('classes') }} class="classes">Classes</a>
        <a href={{ route('progress') }} class="pro">Progress</a>
        <a href={{ route('reviews') }} class="reviews">Reviews</a>
    </div>
</div>



