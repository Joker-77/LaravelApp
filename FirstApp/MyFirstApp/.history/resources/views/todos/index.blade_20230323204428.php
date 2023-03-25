@extends('layouts.app')

@section('content')
<x-alert />

<div class="container">
    <div class="row">
        @if (isset($todos))
        @foreach ($todos as $todo)
        <div class="card">
            {{ $todo->title }}
        </div>
        @endforeach
        @endif
        @endsection
    </div>
</div>