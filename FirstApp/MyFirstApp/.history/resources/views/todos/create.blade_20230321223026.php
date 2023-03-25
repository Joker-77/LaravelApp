@extends('layouts.app')

@section('content')
    <form action="/todo/create">
        @csrf
    </form>

@endsection