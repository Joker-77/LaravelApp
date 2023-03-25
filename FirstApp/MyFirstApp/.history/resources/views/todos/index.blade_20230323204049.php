@extends('layouts.app')

@section('content')
<x-alert />

@foreach ($todos as $todo)
    <ul>
        <li></li>
    </ul>
@endforeach
@endsection