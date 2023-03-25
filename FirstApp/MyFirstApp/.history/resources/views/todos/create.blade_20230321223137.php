@extends('layouts.app')

@section('content')
    <form action="/todo/create" class="form">
        @csrf
        <input type="text" name="title" />
        <input type="submit" value="Submit"/>
    </form>

@endsection