@extends('layouts.app')

@section('content')
    <form action="/todo/create">
        @csrf
        <input type="text" name="title" />
        <button type="submit">Submit</button>
    </form>

@endsection