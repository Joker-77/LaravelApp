@extends('layouts.app')

@section('content')
    <form action="/todo/create">
        @csrf
        <input name="title" />
    </form>

@endsection