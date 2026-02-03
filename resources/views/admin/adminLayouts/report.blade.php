@extends('admin.adminLayouts.sliderbar')
@section('report')
<nav class="navbar navbar-light bg-white shadow-sm rounded mb-4 px-3">
    <span class="navbar-brand mb-0 h5">Reports</span>
    <span class="text-muted">Admin Panel</span>
</nav>

<table class="table table-bordered mt-4">
    <tr>
        <th>Report ID</th>
        <th>Teacher ID</th>
        <th>Course ID</th>
        <th>Course Title</th>
        <th>Report Content</th>
        <th>Delete</th>
    </tr>
    @if($reports->isEmpty())
        <tr>
            <td colspan="6" class="text-center">No reports available.</td>
        </tr>
    @endif
   @foreach($reports as $report)

    <tr>
        <td>{{ $report->id }}</td>
        <td>{{ $report->teacher_id }}</td>
        <td>{{ $report->course_id }}</td>
        <td>{{ $report->course_title }}</td>
        <td>{{ $report->report }}</td>

            <td>
                <form action="{{ route('admin.deleteReport', ['course_id' => $report->course_id, 'report_id' => $report->id]) }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Delete course and report</button>

                </form>
                <a href="{{ route('admin.viewcourse', ['course_id' => $report->course_id]) }}" class="btn btn-outline-primary mt-2">view course</a>
            </td>

    </tr>

   @endforeach

</table>

@endsection
