<!-- resources/views/todos/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Todo</h1>
    <form action="{{ route('todos.update', $todo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="{{ $todo->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description">{{ $todo->description }}</textarea>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="completed" {{ $todo->completed ? 'checked' : '' }}>
            <label class="form-check-label" for="completed">Completed</label>
        </div>
        <button type="submit" class="btn btn-primary">Update Todo</button>
    </form>
</div>
@endsection
