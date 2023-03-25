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
                    <span class="mx-3">completed</span>
                    @else
                    <span class="mx-3" onclick="completeTodo('{{ $todo->id}}')" style="cursor: pointer">&#10004;</span>
                    @endif
                </span>
            </div>
            @endforeach
            @endif
            @endsection
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    function completeTodo(id) {
        event.preventDefault();
        let data = {
            id: id,
        };
        $.ajax({
            type: 'put'
            , url: '/todos/complete/' + id,
            , data: success: function(resp) {
                console.log(resp);
            }
            , error: function(err) {
                console.log(err);
            }
        , });
    }

</script>