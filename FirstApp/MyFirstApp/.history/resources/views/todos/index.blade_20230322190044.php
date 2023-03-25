@extends('layouts.app')

@section('content')
    {{ $message }}
    <x-alert :message='$message' />
@endsection