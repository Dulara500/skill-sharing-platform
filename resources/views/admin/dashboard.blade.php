@extends('admin.adminLayouts.sliderbar')
@section('admin_content')


        <!-- Top Navbar -->
        <nav class="navbar navbar-light bg-white shadow-sm rounded mb-4 px-3">
            <span class="navbar-brand mb-0 h5">Dashboard</span>
            <span class="text-muted">Admin Panel</span>
        </nav>

        <!-- Dashboard Stats -->
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card shadow-sm p-3">
                    <h6>Total Users</h6>
                    <h3>{{ $totalClasses }}</h3>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm p-3">
                    <h6>Active Teachers</h6>
                    <h3>342</h3>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm p-3">
                    <h6>Skills Listed</h6>
                    <h3>122</h3>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm p-3">
                    <h6>Pending Reports</h6>
                    <h3>9</h3>
                </div>
            </div>
        </div>

        <!-- Charts & Tables Section -->
        <div class="row mt-4">
            <div class="col-md-8">
                <div class="card shadow-sm p-3">
                    <h5>User Growth</h5>
                    <canvas id="growthChart" height="120"></canvas>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm p-3">
                    <h5>Top Skills</h5>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between">
                            Programming <span>124 users</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            Graphic Design <span>98 users</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            Cooking <span>54 users</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            Guitar <span>42 users</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>



  @endsection

