@extends('layouts.app')

@section('content')
<h2>Add new group</h2>
<form action="{{ route('groups.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">group name</label>
        <input type="text" class="form-control" id="name" name="name" required>
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
