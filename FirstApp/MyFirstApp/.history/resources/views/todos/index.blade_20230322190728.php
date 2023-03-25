@extends('layouts.app')

@section('content')
@if (isset($data))
<x-alert :message='$data' />
@endif
@endsection