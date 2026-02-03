@extends('admin.adminLayouts.sliderbar')
@section('users')
<nav class="navbar navbar-light bg-white shadow-sm rounded mb-4 px-3">
    <span class="navbar-brand mb-0 h5">Users</span>
    <span class="text-muted">Admin Panel</span>
</nav>
<table class="table table-bordered mt-4">

    <tr>
        <th>User Name</th>
        <th>User Email</th>
        <th>User Role</th>
        <th>Created At</th>
    </tr>
   @foreach($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->user_type }}</td>
        <td>{{ $user->created_at }}</td>
        <td>
        <form action="{{ route('admin.deleteUser',$user->id) }}" method="post">
            @csrf
            <button type="submit">Delete</button>
        </form>

        </td>
    </tr>

   @endforeach

</table>
@endsection
