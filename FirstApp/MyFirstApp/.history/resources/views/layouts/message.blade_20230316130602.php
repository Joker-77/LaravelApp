@extends('layouts.app')

@section('alert-message')
<h1>Hello</h1>
@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@elseif (session()->has('error'))
<div class="alert alert-danger">
    {{ session()->get('error') }}
</div>
@endif
@endsection
