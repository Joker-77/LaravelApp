@extends('layouts.app')

@section('content')
<x-alert />

@if ($todos->all())
    
@endif
@endsection