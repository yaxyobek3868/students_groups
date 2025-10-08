@extends('layouts.app')

@section('content')
<h2>Edit student</h2>
<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="group_id" class="form-label">Group</label>
        <select name="group_id" id="group_id" class="form-select" required>
            @foreach($groups as $group)
                <option value="{{ $group->id }}" {{ $user->group_id == $group->id ? 'selected' : '' }}>
                    {{ $group->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" id="age" name="age" min="1" value="{{ $user->age }}" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}" required>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select name="status" id="status" class="form-select" required>
            <option value="1" {{ $user->status ? 'selected' : '' }}>Active</option>
            <option value="0" {{ !$user->status ? 'selected' : '' }}>No active</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
