@extends('layouts.app')

@section('content')
<x-alert />

@if (isset($todos))
@foreach ($todos as $todo)

<ul>
    <li>{{ $todo->title }}</li>
</ul>
@endforeach
@endif
@endsection