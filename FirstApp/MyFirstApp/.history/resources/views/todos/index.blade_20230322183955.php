@extends('layouts.app')

@section('content')
    @if(isset($message))
    {{ $message }}
    @endif
@endsection