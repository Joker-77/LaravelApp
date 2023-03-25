@extends('layouts.app')

@section('content')
<x-alert :message='$data["message"]' />
@endsection