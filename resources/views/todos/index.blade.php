<!-- resources/views/todos/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Todo List</h1>
    <a href="{{ route('todos.create') }}" class="btn btn-primary">Add Todo</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <ul class="list-group mt-4">
        @foreach($todos as $todo)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <strong>{{ $todo->title }}</strong> - {{ $todo->description }}
                </div>
                <div>
                    <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
                        <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-warning">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>
@endsection
