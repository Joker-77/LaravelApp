@extends('layouts.app')

@section('content')
<x-alert />

@if ($todos->any())

@foreach ($todos as $todo)
<ul>
    <li>{{ $todo->title }}</li>
</ul>
@endforeach
@endif
@endsection