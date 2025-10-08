@extends('layouts.app')

@section('content')
<h2>Add new student</h2>
<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="group_id" class="form-label">Guruh</label>
        <select name="group_id" id="group_id" class="form-select" required>
            <option value="">Select a group</option>
            @foreach($groups as $group)
                <option value="{{ $group->id }}">{{ $group->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" id="age" name="age" min="1" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" required>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select name="status" id="status" class="form-select" required>
            <option value="1">Active</option>
            <option value="0">No active</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
