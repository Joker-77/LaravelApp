@extends('layouts.app')

@section('content')
    @if (isset($data))
        
    @else
        
    @endif
    <x-alert :message='$data' />
@endsection