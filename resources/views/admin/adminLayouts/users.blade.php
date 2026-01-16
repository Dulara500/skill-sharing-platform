@extends('admin.adminLayouts.sliderbar')
@section('users')
<div class="card shadow-sm ps-3">
    <h4>Users</h4>
</div>
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
