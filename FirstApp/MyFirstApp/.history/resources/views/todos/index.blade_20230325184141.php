@extends('layouts.app')

@section('content')
<x-alert />

<div class="container">
    <div class="row">
        <div class="col-4 offset-4">
            <a href="/todos/create" class="btn btn-primary">Create Todo</a>
            @if (isset($todos))
            @foreach ($todos as $todo)
            <div class="card">
                <div class="card-header text-center bg-light">
                    {{ $todo->title }}
                </div>
                <span class="card-body text-center">
                    <a href="/todos/edit/{{ $todo->id }}" class="btn btn-warning">Edit</a>
                    @if($todo->completed)
                    <span>completed</span>
                    @else
                    <span onclick="completeTodo('jh')" style="cursor: pointer">&#10004;</span>
                    @endif
                </span>
            </div>
            @endforeach
            @endif
            @endsection
        </div>
    </div>
</div>