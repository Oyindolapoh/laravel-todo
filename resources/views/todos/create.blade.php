<!-- resources/views/todos/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Todo</h1>
    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Todo</button>
    </form>
</div>
@endsection
