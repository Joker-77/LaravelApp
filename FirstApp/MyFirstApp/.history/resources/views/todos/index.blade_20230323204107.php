@extends('layouts.app')

@section('content')
<x-alert />

@if ($todos->any())
    
@endif
@endsection