@extends('admin.adminLayouts.sliderbar')
@section('viewcourse')

<nav class="navbar navbar-light bg-white shadow-sm rounded mb-4 px-3">
    <span class="navbar-brand mb-0 h5"><a href={{ route('admin.reports') }} class="text-decoration-none text-dark fw-bold">Reports</a> > View Course</span>
    <span class="text-muted">Admin Panel</span>
</nav>

        <div class="card p-4 mb-5">
                    <h3>Class Details</h3>
                    <hr>
                    <div class="card">
                        <img src=" {{ asset('material/'.$course->file) }}" class="card-img-top" alt="Class Image">
                    </div>
                    <div class="mt-3">
                        <h4 class="card-title fw-bold">{{ $course->title }}</h4>
                        <p><strong>Instructor:</strong> {{ $course->user->name }}</p>
                        <p><strong>Is certified: </strong>{{ $course->is_certified_teacher ? 'Yes' : 'No' }}</p>
                        <p><strong>Experience:</strong> {{ $course->years_experience }} years</p>
                        <p><strong>Description:</strong> {{ $course->overview }}</p>
                    </div>
        </div>
@endsection
