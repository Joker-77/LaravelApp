@extends('layouts.app')

@section('content')
<x-alert />

@if (isset($todos))
@foreach ($todos as $todo)
<div class="card"></div>
@endforeach
@endif
@endsection