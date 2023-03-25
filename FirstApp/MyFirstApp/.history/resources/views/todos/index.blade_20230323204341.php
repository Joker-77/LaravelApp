@extends('layouts.app')

@section('content')
<x-alert />

@if (isset($todos))
@foreach ($todos as $todo)

@endforeach
@endif
@endsection