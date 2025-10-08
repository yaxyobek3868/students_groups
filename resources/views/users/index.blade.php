@extends('layouts.app')

@section('content')
<h2>Students</h2>
<a href="{{ route('users.create') }}" class="btn btn-success mb-3">Add new student</a>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>T/r</th>
            <th>Group</th>
            <th>Name</th>
            <th>Age</th>
            <th>Phone</th>
            <th>Status</th>
          
        </tr>
    </thead>
    <tbody>
        @foreach($users as $key => $user)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $user->group->name }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->age }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->status ? 'Active' : 'No active' }}</td>
            <td>
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Haqiqatdan o‘chirmoqchimisiz?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
