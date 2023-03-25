@extends('layouts.app')

@section('content')
    <form action="/todo/create" class="form">
        @csrf
        <div class="form-group">
            <div class="row col-4"></div>
        </div>
    </form>

@endsection