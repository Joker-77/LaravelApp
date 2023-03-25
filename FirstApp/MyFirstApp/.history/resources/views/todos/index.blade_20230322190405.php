@extends('layouts.app')

@section('content')
    <x-alert :message='$message ?? "h"' success='true' />
@endsection