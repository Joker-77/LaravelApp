@extends('layouts.app')

@section('content')
<div class="container">
    <x-alert>
        <x-slot name='msg'>
            {{ $message ?? "" }}
        </x-slot>
    </x-alert>
    <form action="/todo/create" method="POST" class="form">
        @csrf
        <div class="row form-group">
            <div class="col-3 p-0">
                <label class="label">Title:</label>
                <input type="text" name="title" class="form-control" />
            </div>
            <div class="col-1 px-1 align-self-end">
                <input type="submit" value="submit" class="btn btn-primary">
            </div>
        </div>
    </form>
    <a href="/todos" class="btn btn-danger my-3 align-self-start">Back To Todos</a>
</div>
@endsection