@extends('layouts.app')
@push('head')
<!-- Styles -->
<link href="{{ asset('css/pizza.css') }}" rel="stylesheet">
<!-- Scripts -->
<script src="{{ asset('js/components/pizza.js')}}"></script>
@endpush
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
                <input id='completeTodo' class="hello" type="text" />
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#completeTodo").css('color', 'red');
    });

</script>

@endsection
