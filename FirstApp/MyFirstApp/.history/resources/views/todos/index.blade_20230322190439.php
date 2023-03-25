@extends('layouts.app')

@section('content')
    <x-alert :message='$message ?? ""' :success='true' />
@endsection