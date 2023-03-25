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
                <input id='inputTodo' class="hello" type="text" />
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function completeTodo(id) {
        alert(id);
        $.ajax({
            type: 'post'
            , url: 'todos/complete/' + id
            , dataType: 'json'
            , success: function(resp) {
                console.log(resp);
            }
            , error: function(error) {
                console.error(error);
            }
        });
    };

</script>
@endpush
