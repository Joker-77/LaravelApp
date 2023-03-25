@extends('layouts.app')

@section('content')
<x-alert />

<div class="container">
    <div class="row">
        <div class="col-4 offset-4">
            @if (isset($todos))
            @foreach ($todos as $todo)
            <div class="card">
                <div class="card-header">
                    {{ $todo->title }}
                </div>
                <span class="text-center">

                </span>
            </div>
            @endforeach
            @endif
            @endsection
        </div>
    </div>
</div>