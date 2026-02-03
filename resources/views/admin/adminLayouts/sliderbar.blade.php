@extends('admin.adminLayouts.adminapp')
@section('content')
<div class="row">
    <div class="col-md-2 position-fixed p-3">
        <ul class="nav flex-column">

                <h4 class="text-center text-primary mb-4">SkillSwap Admin</h4>

            <li class="nav-item mb-2">
                <span><a href="{{ route('admin.dashboard') }}" class="nav-link sidebar-link text-dark">📊 Dashboard</a></span>
            </li>
            <li class="nav-item my-2">
                <span><a href={{ route('admin.users') }} class="nav-link sidebar-link text-dark">👥 User</a></span>
            </li>
            <li class="nav-item my-2">
                <span><a href="{{ route('admin.reports') }}" class="nav-link sidebar-link text-dark">🚨 Reports</a></span>
            </li>

            <li class="nav-item my-2">
                <span><a href="" class="nav-link sidebar-link text-dark" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">🚪 Logout</a></span>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </ul>
    </div>
</div>
<div class="col-md-10 offset-md-2 mt-3">

    @yield('admin_content')
    @yield('users')
    @yield('report')
    @yield('viewcourse')
</div>
@endsection
