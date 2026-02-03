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
                    <h3>{{ $usercount}}</h3>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm p-3">
                    <h6>Certified Teachers</h6>
                    <h3>{{ $tcount }}</h3>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm p-3">
                    <h6>Skills Listed</h6>
                    <h3>{{ $coursecount }}</h3>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm p-3">
                    <h6>Pending Reports</h6>
                    <h3>{{ $noOfReports }}</h3>
                </div>
            </div>
        </div>

        <!-- Charts & Tables Section -->
        <div class="row mt-4">



        </div>



  @endsection

