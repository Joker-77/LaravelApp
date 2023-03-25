@extends('layouts.app')

@section('content')
    <form action="/todo/create">
        @csrf
        <input type="text" name="title" />
        <button></button>
    </form>

@endsection