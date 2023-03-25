@extends('layouts.app')

@section('content')
    <form action="/todo/create" class="form">
        @csrf
        <input type="text" name="title" class="form-control" />
        <input type="submit" value="Submit"/>
    </form>

@endsection