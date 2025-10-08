@extends('layouts.app')

@section('content')
<h2>Groups</h2>
<a href="{{ route('groups.create') }}" class="btn btn-success mb-3">Add new group</a>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
          
        </tr>
    </thead>
    <tbody>
        @foreach($groups as $group)
        <tr>
            <td>{{ $group->id }}</td>
            <td>{{ $group->name }}</td>
            <td>{{ $group->status ? 'Active' : 'No active' }}</td>
            <td>
                <a href="{{ route('groups.edit', $group->id) }}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('groups.destroy', $group->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Haqiqatdan o‘chirmoqchimisiz?')">
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
