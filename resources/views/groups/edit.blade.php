@extends('layouts.app')

@section('content')
<h2>Edit group</h2>
<form action="{{ route('groups.update', $group->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Group name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $group->name }}" required>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select name="status" id="status" class="form-select" required>
            <option value="1" {{ $group->status ? 'selected' : '' }}>Active</option>
            <option value="0" {{ !$group->status ? 'selected' : '' }}>No active</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
